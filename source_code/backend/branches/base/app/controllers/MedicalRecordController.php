<?php

use App\Transformer\GenericTransformer;
use App\Transformer\PatientTransformer;
use App\Transformer\ExamTransformer;
use App\Transformer\ExamItemTransformer;
use App\Transformer\MedicalRecordEvolutionTransformer;

class MedicalRecordController extends ApiController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		
	}

	/**
	 *	Se carga la configuración de la historia clínica dependiendo la 
	 *	especialidad del usuario logueado.
	 *
	 *	@return Response
	 */
	public function create() {		
		// Se consultan los examenes que tiene asociada la historia clínica.
		$examList = $this->getExamList(1); // 1: especialidad de ginecología
		// listado de causas externas
		$externalCauseList = $this->getExternalCauseList();
		// listado de propositos de la consulta
		$purposeAppointmentList = $this->getPurposeAppoinmentList();
		// Se consulta el siguiente número de la evolución
		$evolutionNumber = $this->getNextEvolutionNumber();

		$response = array(
			$examList,
			$externalCauseList,
			$purposeAppointmentList,
			$evolutionNumber,
			
		);

		return $this->respondWithCollection($response, new GenericTransformer);
	}

	/**
	*	Función responsable de crear un nuevo registro para la evolución.
	*/
	public function store() {
		$response = null;
		$medicalRecordEvolution = new MedicalRecordEvolution;

		if (Request::isMethod(self::POST)) {
			Log::info(Input::all());

			if ($this->isValidForAdd()) {
				//medicalRecordEvolutionId
				if (!empty(Input::get(Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.MEDICAL_RECORD_ID')))) {
					$medicalRecordEvolution->medicalRecordId = Input::get(Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.MEDICAL_RECORD_ID'));
				}

				if (!empty(Input::get(Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.USER_ID')))) {
					$medicalRecordEvolution->userId = Input::get(Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.USER_ID'));
				}

				if (!empty(Input::get(Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.EXTERNAL_CAUSE_ID')))) {
					$medicalRecordEvolution->externalCauseId = Input::get(Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.EXTERNAL_CAUSE_ID'));
				}

				if (!empty(Input::get(Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.PURPOSE_APPOINTMENT_ID')))) {
					$medicalRecordEvolution->purposeAppointmentId = Input::get(Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.PURPOSE_APPOINTMENT_ID'));
				}

				if (!empty(Input::get(Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.DATE')))) {
					$medicalRecordEvolution->date = Input::get(Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.DATE'));
				}
				
				$medicalRecordEvolution->evolutionNumber = $this->getNextEvolutionNumber();
				
				if (!empty(Input::get(Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.PURPOSE')))) {
					$medicalRecordEvolution->purpose = Input::get(Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.PURPOSE'));
				}

				if (!empty(Input::get(Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.CONDUCT')))) {
					$medicalRecordEvolution->conduct = Input::get(Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.CONDUCT'));
				}

				if (!empty(Input::get(Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.PRINCIPAL_DIAGNOSTIC_TYPE')))) {
					$medicalRecordEvolution->principalDiagnosticType = Input::get(Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.PRINCIPAL_DIAGNOSTIC_TYPE'));
				}

				// se guarda el registro
				$medicalRecordEvolution->save();

				$response = $this->responseCreatedSuccessfulElement($medicalRecordEvolution, new MedicalRecordEvolutionTransformer);
			} else {
				$response = $this->respondWithError($this->getErrors(), self::CODE_WRONG_ARGUMENTS);
			}

		} else {
 			$response = $this->respondWithError(sprintf(self::NOT_ALLOWED_METHOD_MESSAGE, Request::method()), self::NOT_ALLOWED_METHOD_CODE);
		}

		return $response;
	}

	/**
	*	Función responsable de verificar si la información con la que se pretende 
	*	adicionar un paciente es válida.
	*/
	public function isValidForAdd() {
        return true;
    }

	/**
	*	Función responsable de obtener el listado de examenes 
	*	asociados a una especialidad.
	*/
	public function getExamList($specialityId = 1) {
		$examList = Exam::join('exam_type', 'exam.examTypeId', '=', 'exam_type.examTypeId')
						->where('specialityId', '=', $specialityId)
						->with('examItems')
						->get();

		return $examList;
	}

	/**
	*	Función responsable de retornar el listado de causas externas
	*	para una historia clínica.
	*/
	public function getExternalCauseList() {
		$externalCauseList = ExternalCause::where("name", "LIKE", "%" . htmlentities(Input::get('filter')) . "%")
						->orderBy(Config::get('constants.EXTERNAL_CAUSE.ATTRS.NAME'))
						->get();

		if (!$externalCauseList->count()) {
            return $this->notDataFound();
        }

		return $externalCauseList;
	}

	/**
	*	Función responsable de retornar el listado de proposito de la conslta
	*	para una historia clínica.
	*/
	public function getPurposeAppoinmentList() {
		$purposeAppointmentList = PurposeAppointment::where("name", "LIKE", "%" . htmlentities(Input::get('filter')) . "%")
						->orderBy(Config::get('constants.PURPOSE_APPOINTMENT.ATTRS.NAME'))
						->get();

		if (!$purposeAppointmentList->count()) {
            return $this->notDataFound();
        }

		return $purposeAppointmentList;
	}

	/**
	*	Función responsable de obtener siguiente número consecutivo para la
	*	evolución de la historia.
	*/
	public function getNextEvolutionNumber() {
		// se consulta el máximo consecutivo y se le suma uno
		$evolutionNumber = MedicalRecordEvolution::max(Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.EVOLUTION_NUMBER'));

		if (empty($evolutionNumber)) {
			$evolutionNumber = 0;
		}

		return ($evolutionNumber + 1);
	}
}
