<?php

use App\Transformer\GenericTransformer;
use App\Transformer\UserTransformer;

class UserController extends ApiController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$usersList = User::orderBy(Config::get('constants.USER.ATTRS.USER_ID'), 'desc')->get();
        
		if (!$usersList->count()) {
            return null;
        }

		return $this->respondWithCollection($usersList, new UserTransformer);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		$identificationTypeList = $this->getIdentificationTypeList();
		
		$response = array(
			$identificationTypeList
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
		$user = new User;

		// se valida que la petición sea por post
		if (Request::isMethod(self::POST)) {
			// se validan las entradas antes de intentar crear un nuevo usuario
			if ($this->isValidForAdd()) {
				$user->identificationTypeId = Input::get(Config::get('constants.USER.ATTRS.IDENTIFICATION_TYPE_ID'));
				$user->name = htmlspecialchars(Input::get(Config::get('constants.USER.ATTRS.NAME')));
				$user->lastname = htmlspecialchars(Input::get(Config::get('constants.USER.ATTRS.LASTNAME')));
				$user->username = htmlspecialchars(Input::get(Config::get('constants.USER.ATTRS.USERNAME')));
				$user->password = Input::get(Config::get('constants.USER.ATTRS.PASSWORD'));
				$user->identificationNumber = htmlspecialchars(Input::get(Config::get('constants.USER.ATTRS.IDENTIFICATION_NUMBER')));
				$user->email = htmlspecialchars(Input::get(Config::get('constants.USER.ATTRS.EMAIL')));
				$user->birthdate = Input::get(Config::get('constants.USER.ATTRS.BIRTHDATE'));
				$user->gender = Input::get(Config::get('constants.USER.ATTRS.GENDER'));
								
				$user->save();				
				
				$response = $this->responseCreatedSuccessfulElement($user, new UserTransformer);
			} else {
				$response = $this->respondWithError($this->getErrors(), self::CODE_WRONG_ARGUMENTS);
			}
		}

		return $response;
	}

	/**
	 *	Función responsable de mostrar la información de un usuario específico.
	 *
	 *	@param  int  $userId, llave primaria del  usuario
	 *	@return Response
	 */
	public function show($userId) {
		$user = User::find($userId);

        if (!$user) {
            return $this->notDataFound();
        }
        
        return $this->respondWithItem($user, new UserTransformer);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
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
		$user = User::find($id);

		// se valida que el metodo por el cual se hacer la petición sea el adecuado.
		if (Request::isMethod(self::PUT)) {

			// se valida que la información con la que se pretende actualizar sea válida.
			Log::info(Input::all());
			if ($this->isValidForUpdate()) {
				
				if (Input::get(Config::get('constants.USER.ATTRS.IDENTIFICATION_TYPE_ID'))) {
					$user->identificationTypeId = Input::get(Config::get('constants.USER.ATTRS.IDENTIFICATION_TYPE_ID'));
				}

				if (Input::get(Config::get('constants.USER.ATTRS.NAME'))) {
					$user->name = Input::get(Config::get('constants.USER.ATTRS.NAME'));
				}
				
				if (Input::get(Config::get('constants.USER.ATTRS.NAME'))) {
					$user->lastname = Input::get(Config::get('constants.USER.ATTRS.LASTNAME'));
				}

				if (Input::get(Config::get('constants.USER.ATTRS.USERNAME'))) {
					$user->username = Input::get(Config::get('constants.USER.ATTRS.USERNAME'));
				}

				if (Input::get(Config::get('constants.USER.ATTRS.PASSWORD'))) {
					$user->password = Input::get(Config::get('constants.USER.ATTRS.PASSWORD'));
				}

				if (Input::get(Config::get('constants.USER.ATTRS.IDENTIFICATION_NUMBER'))) {
					$user->identificationNumber = Input::get(Config::get('constants.USER.ATTRS.IDENTIFICATION_NUMBER'));
				}

				if (Input::get(Config::get('constants.USER.ATTRS.EMAIL'))) {
					$user->email = Input::get(Config::get('constants.USER.ATTRS.EMAIL'));
				}

				if (Input::get(Config::get('constants.USER.ATTRS.BIRTHDATE'))) {
					$user->birthdate = Input::get(Config::get('constants.USER.ATTRS.BIRTHDATE'));
				}
				
				if (Input::get(Config::get('constants.USER.ATTRS.GENDER'))) {
					$user->gender = Input::get(Config::get('constants.USER.ATTRS.GENDER'));
				}

				$user->save();

				$response = $this->respondWithItem($user, new UserTransformer);
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
	public function destroy($id)
	{
		//
	}

	/**
	*	Función responsable de validar si la informaciòn con la que se pretende 
	*	adicionar un usuario es válida.
	*/
	public function isValidForAdd() {
        return $this->isValid([
            Config::get('constants.USER.ATTRS.NAME') 					=> "required",
            Config::get('constants.USER.ATTRS.LASTNAME') 				=> "required",
            Config::get('constants.USER.ATTRS.IDENTIFICATION_TYPE_ID') 	=> "required",
			Config::get('constants.USER.ATTRS.USERNAME') 				=> "required|unique:" . Config::get('constants.USER.TABLE'),
			Config::get('constants.USER.ATTRS.PASSWORD') 				=> "required",
			Config::get('constants.USER.ATTRS.IDENTIFICATION_TYPE_ID') 	=> "required",
			Config::get('constants.USER.ATTRS.IDENTIFICATION_NUMBER')	=> "required|unique:" . Config::get('constants.USER.TABLE'),
			Config::get('constants.USER.ATTRS.EMAIL') 					=> "required|email",
			Config::get('constants.USER.ATTRS.BIRTHDATE') 				=> "required",
			Config::get('constants.USER.ATTRS.GENDER') 					=> "required",
        ]);
    }

	/**
	*	Función responsable de validar si la información con la que se pretende 
	*	actualizar un usuario es válida.
	*/
	public function isValidForUpdate() {
		
        return $this->isValid([
        	Config::get('constants.USER.ATTRS.USER_ID') 				=> "exists:" . Config::get('constants.USER.TABLE') . "," . Config::get('constants.USER.ATTRS.USER_ID'),
        	Config::get('constants.USER.ATTRS.NAME') 					=> "required",
            Config::get('constants.USER.ATTRS.IDENTIFICATION_TYPE_ID') 	=> "required",
			Config::get('constants.USER.ATTRS.USERNAME') 				=> "required|unique:" . Config::get('constants.USER.TABLE') . ',' 
																		. Config::get('constants.USER.ATTRS.USERNAME') . ',' 
																		. Input::get(Config::get('constants.USER.ATTRS.USER_ID')) . ',' 
																		. Config::get('constants.USER.ATTRS.USER_ID'),
			Config::get('constants.USER.ATTRS.IDENTIFICATION_NUMBER')	=> "required|unique:" . Config::get('constants.USER.TABLE') . ',' 
																		. Config::get('constants.USER.ATTRS.IDENTIFICATION_NUMBER') . ',' 
																		. Input::get(Config::get('constants.USER.ATTRS.USER_ID')) . ',' 
																		. Config::get('constants.USER.ATTRS.USER_ID'),
			Config::get('constants.USER.ATTRS.EMAIL') 					=> "required|email",
        ]);
    }

	/**
	*	Función responsable de validar la existencia del un nuevo 
	*	nombre de usuario ("username") en la aplicación.
	*
	*	@param string $username, representa el nuevo nombre de
	*	usuario a validar.
	*	@return boolean, true: el usuario existe, false: el usuario 
	*	no existe
	*/
	public function checkUnique($field = 'username', $id = '') {

		// se asume el peor de los casos, que el usuario exista
		$response['isUnique'] = false;

		if ($field == Config::get('constants.USER.ATTRS.USERNAME')
				|| $field == Config::get('constants.USER.ATTRS.IDENTIFICATION_NUMBER')) {
			// se obtiene el valor del campo a validar
			$value = trim(Input::get($field));

			// se consulta la cantidad de usuarios que coinciden con el filtro
			$usersCount = User::where($field, $value)
								->where(Config::get('constants.USER.ATTRS.USER_ID'), '!=', $id)
								->count();

			// si la cantidad de usuarios es "== 0", quiere decir q el usuario aún NO EXISTE
			if ($usersCount == 0) {
				$response['isUnique'] = true;
			}
		} else {
			$response = $this->respondWithError(sprintf(self::UNKNOW_PARAMETER, $field), self::CODE_WRONG_ARGUMENTS);
		}

		return $this->respondWithItem($response, new GenericTransformer);
	}


}
