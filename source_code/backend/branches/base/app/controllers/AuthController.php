<?php

/**
*   Controlador responsable de gestionar todo lo referente a la session de un usuario
*   
*   @author: Sebastián Lara <sebastian@mobigeek.co>
*   @date: 04/11/2014
*/

use App\Transformer\UserTransformer;

class AuthController extends ApiController {
 
    /**
    *   Función responsable de autenticar a un usuario en la aplicación
    */
    public function doLogin() {
        $response = null;

        try {
            // Se validan las credenciales.
            $validator = $this->validateCredentials();

            if ($validator->passes()) {
                $remember = false; // por defecto no recuerda el usuario autenticado.
                $credentials = $this->getLoginCredentials();

                // se verifica si el usuario fue autenticado
                if (Auth::attempt($credentials, $remember)) {
                    // se retorna la información del usuario cuando este es autenticado.                
                    $response = $this->respondWithItem(Auth::User(), new UserTransformer);
                } else {
                    $response = $this->respondWithError(self::MESSAGE_COULD_NOT_AUTHENTICATE, self::CODE_COULD_NOT_AUTHENTICATE);
                }
            } else {
                $response = $this->respondWithError($validator->messages(), self::CODE_WRONG_ARGUMENTS);
            }
        } catch(Exception $e) {
            $response = $this->errorInternalError($e->getMessage());
        }

        return $response;
    }

    /**
    *   Función responsable de validar las entradas para el login.
    *   @return Validator, objeto con el resultado de la validación.
    */
    protected function validateCredentials() {
        // se capturan las credenciales para realizar la validación
        $credentials = $this->getLoginCredentials();

        // reglas para la validación
        $rules = array (
            'username' => 'required',
            'password' => 'required',
        );

        // mensajes personalizados en caso de error
        $messages = array (
            'required' => ':attribute is required.',
        );

        return Validator::make($credentials, $rules, $messages);
    }

    /**
    *   Función responsable de retornar las credenciales para realizar el login.
    *   @author Sebastián Lara <>
    *   @return array, arreglo con las credenciales para realizar el login.
    */
    protected function getLoginCredentials() {
        return [
            "username" => Input::get("username"),
            "password" => Input::get("password")
        ];
    }

    /**
    *   Función responsable de validar si una petición se esta haciendo por el 
    *   método post.
    *   @author Sebastián Lara <>
    *   @return boolean, true: cuando la petición es por el método 'POST', 
    *   false: en caso contrario
    */
    protected function isPostRequest() {
        return (Input::server("REQUEST_METHOD") == "POST");
    }
 
    
    public function doLogout() {
        // se cierra la session del usuario
        Auth::logout();
 
        return Response::json(
            array (
                'data'   => array(
                    'successful' => true,
                    'message'     => 'Session closed successfully'
                )
            ),
            200
        );
    }
 
}
?>