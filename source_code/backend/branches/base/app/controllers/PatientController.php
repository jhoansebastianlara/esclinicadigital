<?php

use App\Transformer\GenericTransformer;
use App\Transformer\PatientTransformer;

class PatientController extends ApiController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$patientsList = Patient::orderBy(Config::get('constants.PATIENT.ATTRS.PATIENT_ID'))->get();

		if (!$patientsList->count()) {
            return $this->notDataFound();
        }

		return $this->respondWithCollection($patientsList, new PatientTransformer);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		$identificationTypeList = $this->getIdentificationTypeList();
		$maritalStatusList = $this->getMaritalStatusList();
		$relationshipList = $this->getRelationshipList();
		
		$response = array(
			$identificationTypeList,
			$maritalStatusList,
			$relationshipList
		);

		return $this->respondWithCollection($response, new GenericTransformer);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {
		$response = null;
		$patient = new Patient;

		// se valida que la petición sea por post
		if (Request::isMethod('POST')) {
			// se validan las entradas antes de intentar crear un nuevo usuario

			Log::info(Input::all());

			if ($this->isValidForAdd()) {
				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.IDENTIFICATION_TYPE_ID')))) {
					$patient->identificationTypeId = Input::get(Config::get('constants.PATIENT.ATTRS.IDENTIFICATION_TYPE_ID'));
				}

				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.MARITAL_STATUS_ID')))) {
					$patient->maritalStatusId = Input::get(Config::get('constants.PATIENT.ATTRS.MARITAL_STATUS_ID'));
				}

				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.NAME')))) {
					$patient->name = Input::get(Config::get('constants.PATIENT.ATTRS.NAME'));
				}

				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.LASTNAME')))) {
					$patient->lastname = Input::get(Config::get('constants.PATIENT.ATTRS.LASTNAME'));
				}

				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.IDENTIFICATION_NUMBER')))) {
					$patient->identificationNumber = Input::get(Config::get('constants.PATIENT.ATTRS.IDENTIFICATION_NUMBER'));
				}
				
				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.PLACEBIRTH')))) {
					$patient->placebirth = Input::get(Config::get('constants.PATIENT.ATTRS.PLACEBIRTH'));
				}
				
				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.BIRTHDATE')))) {
					$patient->birthdate = Input::get(Config::get('constants.PATIENT.ATTRS.BIRTHDATE'));
				}

				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.GENDER')))) {
					$patient->gender = Input::get(Config::get('constants.PATIENT.ATTRS.GENDER'));
				}
				
				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.OCCUPATION')))) {
					$patient->occupation = Input::get(Config::get('constants.PATIENT.ATTRS.OCCUPATION'));					
				}				
				
				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.RESIDENCE_CITY')))) {
					$patient->residenceCity = Input::get(Config::get('constants.PATIENT.ATTRS.RESIDENCE_CITY'));
				}
				
				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.ADDRESS')))) {
					$patient->address = Input::get(Config::get('constants.PATIENT.ATTRS.ADDRESS'));
				}
				
				$patient->save();

				// seguardan los datos de los responsables
				$custodians = Input::get(Config::get('constants.CUSTODIANS'));
				
				foreach ($custodians as $custodian) {
					$this->storeCustodian($custodian, $patient->patientId);
				}
				
				$response = $this->responseCreatedSuccessfulElement($patient, new PatientTransformer);
			} else {
				$response = $this->respondWithError($this->getErrors(), self::CODE_WRONG_ARGUMENTS);
			}
		}

		return $response;
	}

	/**
	*	Función responsable de almacenar un nuevo responsable ("Custodian") del paciente
	*/
	public function storeCustodian($custodianData, $patientId) {
		
		$custodian = new Custodian;
		// se asume por defecto que se va a crear un nvo responsable
		$isCreating = true;

		if ($custodianData[Config::get('constants.CUSTODIAN.ATTRS.CUSTODIAN_ID')]) {
			// el responsable ya existe, se consulta para editarlo
			$custodian = Custodian::find($custodianData[Config::get('constants.CUSTODIAN.ATTRS.CUSTODIAN_ID')]);
			// Se esta actualizando el responsable, no creando.
			$isCreating = false;
		}

		if (!empty($custodianData[Config::get('constants.CUSTODIAN.ATTRS.RELATIONSHIP_ID')])) {
			$custodian->relationshipId = $custodianData[Config::get('constants.CUSTODIAN.ATTRS.RELATIONSHIP_ID')];
		}

		if (!empty($custodianData[Config::get('constants.CUSTODIAN.ATTRS.IDENTIFICATION_TYPE_ID')])) {
			$custodian->identificationTypeId = $custodianData[Config::get('constants.CUSTODIAN.ATTRS.IDENTIFICATION_TYPE_ID')];
		}

		if (!empty($custodianData[Config::get('constants.CUSTODIAN.ATTRS.IDENTIFICATION_NUMBER')])) {
			$custodian->identificationNumber = $custodianData[Config::get('constants.CUSTODIAN.ATTRS.IDENTIFICATION_NUMBER')];
		}

		if (!empty($custodianData[Config::get('constants.CUSTODIAN.ATTRS.FULLNAME')])) {
			$custodian->fullName = $custodianData[Config::get('constants.CUSTODIAN.ATTRS.FULLNAME')];
		}

		if (!empty($custodianData[Config::get('constants.CUSTODIAN.ATTRS.PHONE')])) {
			$custodian->phone = $custodianData[Config::get('constants.CUSTODIAN.ATTRS.PHONE')];
		}

		if (!empty($custodianData[Config::get('constants.CUSTODIAN.ATTRS.EMAIL')])) {
			$custodian->email = $custodianData[Config::get('constants.CUSTODIAN.ATTRS.EMAIL')];
		}		
		
		if ($isCreating) {
			Log::info('Creando.. ');
			$patient = Patient::find($patientId);
			$custodian = $patient->custodians()->save($custodian);
		} else {
			Log::info('actualizando.. ');
			$custodian->save();
			Log::info($custodian);
		}

		return $custodian;
	}

	/**
	 *	Función responsable de mostrar la información de un paciente específico.
	 *
	 *	@param  int  $id, llave primaria del paciente
	 *	@return Response
	 */
	public function show($id) {
		$patient = Patient::find($id);
		
        if (!$patient) {
            return $this->notDataFound();
        }
        
        return $this->respondWithItem($patient, new PatientTransformer);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		$response = null;
		$patient = Patient::find($id);

		// se valida que el metodo por el cual se hacer la petición sea el adecuado.
		if (Request::isMethod(self::PUT)) {

			// se valida que la información con la que se pretende actualizar sea válida.
			if ($this->isValidForUpdate()) {
				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.IDENTIFICATION_TYPE_ID')))) {
					$patient->identificationTypeId = Input::get(Config::get('constants.PATIENT.ATTRS.IDENTIFICATION_TYPE_ID'));
				}

				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.MARITAL_STATUS_ID')))) {
					$patient->maritalStatusId = Input::get(Config::get('constants.PATIENT.ATTRS.MARITAL_STATUS_ID'));
				}

				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.NAME')))) {
					$patient->name = Input::get(Config::get('constants.PATIENT.ATTRS.NAME'));
				}

				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.LASTNAME')))) {
					$patient->lastname = Input::get(Config::get('constants.PATIENT.ATTRS.LASTNAME'));
				}

				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.IDENTIFICATION_NUMBER')))) {
					$patient->identificationNumber = Input::get(Config::get('constants.PATIENT.ATTRS.IDENTIFICATION_NUMBER'));
				}
				
				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.PLACEBIRTH')))) {
					$patient->placebirth = Input::get(Config::get('constants.PATIENT.ATTRS.PLACEBIRTH'));
				}
				
				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.BIRTHDATE')))) {
					$patient->birthdate = Input::get(Config::get('constants.PATIENT.ATTRS.BIRTHDATE'));
				}

				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.GENDER')))) {
					$patient->gender = Input::get(Config::get('constants.PATIENT.ATTRS.GENDER'));
				}

				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.OCCUPATION')))) {
					$patient->occupation = Input::get(Config::get('constants.PATIENT.ATTRS.OCCUPATION'));					
				}				
				
				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.RESIDENCE_CITY')))) {
					$patient->residenceCity = Input::get(Config::get('constants.PATIENT.ATTRS.RESIDENCE_CITY'));
				}
				
				if (!empty(Input::get(Config::get('constants.PATIENT.ATTRS.ADDRESS')))) {
					$patient->address = Input::get(Config::get('constants.PATIENT.ATTRS.ADDRESS'));
				}
				
				// se guardan los datos del paciente
				$patient->save();

				// seguardan los datos de los responsables
				$custodians = Input::get(Config::get('constants.CUSTODIANS'));
				
				foreach ($custodians as $custodian) {
					$this->storeCustodian($custodian, $patient->patientId);
				}

				// listado de responsables a aliminar
				$custodiansDelete = Input::get(Config::get('constants.CUSTODIANS_DELETE'));

				// se valida si el arreglo de responsables a aliminar tiene contenido
				if (!empty($custodiansDelete)) {
					// existen responsables a eliminar
					Custodian::destroy($custodiansDelete);
				}

				$response = $this->respondWithItem($patient, new PatientTransformer);
			} else {
				$response = $this->respondWithError($this->getErrors(), self::CODE_WRONG_ARGUMENTS);
			}
		} else {
 			$response = $this->respondWithError(sprintf(self::NOT_ALLOWED_METHOD_MESSAGE, Request::method()), self::NOT_ALLOWED_METHOD_CODE);
		}

		return $response;
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		//
	}

	/**
	*	Función responsable de verificar si la información con la que se pretende 
	*	adicionar un paciente es válida.
	*/
	public function isValidForAdd() {
        return $this->isValid([
			Config::get('constants.PATIENT.ATTRS.IDENTIFICATION_TYPE_ID')	=> 'required',
			Config::get('constants.PATIENT.ATTRS.MARITAL_STATUS_ID')		=> 'required',
			Config::get('constants.PATIENT.ATTRS.NAME')						=> 'required',
			Config::get('constants.PATIENT.ATTRS.LASTNAME')					=> 'required',
			Config::get('constants.PATIENT.ATTRS.IDENTIFICATION_NUMBER')	=> 'required|unique:' . Config::get('constants.PATIENT.TABLE'),
			Config::get('constants.PATIENT.ATTRS.PLACEBIRTH')				=> 'required',
			Config::get('constants.PATIENT.ATTRS.BIRTHDATE')				=> 'required',
			Config::get('constants.PATIENT.ATTRS.GENDER')					=> 'required',
        ]);
    }

    /**
	*	Función responsable de verificar si la información con la que se pretende 
	*	actualizar es válida.
	*/
    public function isValidForUpdate() {
        return $this->isValid([
        	Config::get('constants.PATIENT.ATTRS.PATIENT_ID') 				=> "exists:" . Config::get('constants.PATIENT.TABLE') . "," . Config::get('constants.PATIENT.ATTRS.PATIENT_ID'),
			Config::get('constants.PATIENT.ATTRS.IDENTIFICATION_TYPE_ID')	=> 'required',
			Config::get('constants.PATIENT.ATTRS.MARITAL_STATUS_ID')		=> 'required',
			Config::get('constants.PATIENT.ATTRS.NAME')						=> 'required',
			Config::get('constants.PATIENT.ATTRS.LASTNAME')					=> 'required',
			Config::get('constants.PATIENT.ATTRS.IDENTIFICATION_NUMBER')	=> "required|unique:" . Config::get('constants.PATIENT.TABLE') . ',' 
																			. Config::get('constants.PATIENT.ATTRS.IDENTIFICATION_NUMBER') . ',' 
																			. Input::get(Config::get('constants.PATIENT.ATTRS.PATIENT_ID')) . ',' 
																			. Config::get('constants.PATIENT.ATTRS.PATIENT_ID'),
			Config::get('constants.PATIENT.ATTRS.PLACEBIRTH')				=> 'required',
			Config::get('constants.PATIENT.ATTRS.BIRTHDATE')				=> 'required',
			Config::get('constants.PATIENT.ATTRS.GENDER')					=> 'required',
        ]);
    }

    /**
	*	Función responsable de validar la existencia del un nuevo 
	*	paciente por su número de identificación ("identificationNumber").
	*
	*	@param string $identificationNumber, representa el nuevo número de identificación a validar.
	*	@return boolean, true: el número de identificación existe, false: el número de identificación 
	*	no existe
	*/
	public function checkUnique($field = 'identificationNumber', $id = '') {

		// se asume el peor de los casos, que el paciente exista
		$response['isUnique'] = false;

		if ($field == Config::get('constants.PATIENT.ATTRS.IDENTIFICATION_NUMBER')) {
			// se obtiene el valor del campo a validar
			$value = trim(Input::get($field));

			// se consulta la cantidad de usuarios que coinciden con el filtro
			$patientsCount = Patient::where($field, $value)
								->where(Config::get('constants.PATIENT.ATTRS.PATIENT_ID'), '!=', $id)
								->count();

			// si la cantidad de usuarios es "== 0", quiere decir q el paciente aún NO EXISTE
			if ($patientsCount == 0) {
				$response['isUnique'] = true;
			}
		} else {
			$response = $this->respondWithError(sprintf(self::UNKNOW_PARAMETER, $field), self::CODE_WRONG_ARGUMENTS);
		}

		return $this->respondWithItem($response, new GenericTransformer);
	}

}
