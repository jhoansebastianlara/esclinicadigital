<?php

use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use League\Fractal\Manager;

use App\Transformer\GenericTransformer;

class ApiController extends BaseController
{
    protected $statusCode = 200;
    protected $requestedEmbeds;
    protected $eagerLoad;

    // constantes para el uso en la aplicación.
    const NOT_DATA_FOUND = 'NOT_DATA_FOUND';
    const MESSAGE = 'MESSAGE';

    const POST = 'POST';
    const PUT = 'PUT';
    const GET = 'GET';


    const CODE_WRONG_ARGS = 'GEN-FUBARGS';
    //const CODE_INTERNAL_ERROR = 'GEN-AAAGGH';
    //const CODE_UNAUTHORIZED = 'GEN-MAYBGTFO';
    const CODE_FORBIDDEN = 'GEN-GTFO';
    const CODE_INVALID_MIME_TYPE = 'GEN-UMWUT';

    const CODE_SUCCESS_LOG_OUT = '30';
    const CODE_COULD_NOT_AUTHENTICATE = '32';
    const CODE_RESOURCE_WAS_NOT_FOUND = '34';
    const CODE_ACCOUNT_SUSPENDED = '64';
    const CODE_INVALID_SECURITY_HASH = '88';
    const CODE_INVALID_API_KEY = '89';
    const CODE_OBJECT_NOT_FOUND = '104';
    const CODE_INTERNAL_ERROR = '131';
    const CODE_UNAUTHORIZED = '179';
    const CODE_WRONG_ARGUMENTS = '185';

    const NOT_ALLOWED_METHOD_CODE = '190';
    const NOT_ALLOWED_METHOD_MESSAGE = 'Not allowed method: %1$s'; // %1$s --> %1: primer, $s: string => %1$s: primer string

    const MESSAGE_COULD_NOT_AUTHENTICATE = 'The username or password entered is incorrect';
    const UNKNOW_PARAMETER = 'Unknown parameter(s): %1$s';

    const NOT_DATA_FOUND_CODE = '35';
    const NOT_DATA_FOUND_MESSAGE = 'Not data found';

    public function __construct(Manager $fractal) {
        $this->fractal = $fractal;

        // Are we going to try and include embedded data?
        $this->requestedEmbeds = explode(',', Input::get('embed'));

        $this->fractal->setRequestedScopes($this->requestedEmbeds);

        $this->fireDebugFilters();
    }



    /**
    *   Función responsable de capturar la información 
    *   que se desea embeber en las respuestas.
    */
    public function buildEagerLoad($possibleRelationships) {
        //  Check for potential ORM relationships, and convert 
        //  from generic "embed" names
        $this->eagerLoad = array_keys (
            array_intersect (
                $possibleRelationships, 
                $this->requestedEmbeds
            )
        );
    }

    /**
    *   To add your controller's runtime to timeline
    */
    public function fireDebugFilters()
    {
        $this->beforeFilter(function () {
            Event::fire('clockwork.controller.start');
        });

        $this->afterFilter(function () {
            Event::fire('clockwork.controller.end');
        });
    }

    /**
     * Getter for statusCode
     *
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
    
    /**
     * Setter for statusCode
     *
     * @param int $statusCode Value to set
     *
     * @return self
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }
    
    protected function respondWithItem($item, $callback)
    {
        $resource = new Item($item, $callback);

        $rootScope = $this->fractal->createData($resource);

        return $this->respondWithArray($rootScope->toArray());
    }

    protected function respondWithCollection($collection, $callback)
    {
        $resource = new Collection($collection, $callback);

        $rootScope = $this->fractal->createData($resource);

        return $this->respondWithArray($rootScope->toArray());
    }

    protected function respondWithArray(array $array, array $headers = [])
    {
        $mimeTypeRaw = Input::server('HTTP_ACCEPT', '*/*');

        // If its empty or has */* then default to JSON
        if ($mimeTypeRaw === '*/*') {
            $mimeType = 'application/json';
        } else {
             // You will probably want to do something intelligent with charset if provided.
            // This chapter just assumes UTF8 everything everywhere.
            $mimeParts = (array) explode(';', $mimeTypeRaw);
            $mimeType = strtolower($mimeParts[0]);
        }


        switch ($mimeType) {
            case 'application/json':
                $contentType = 'application/json';
                $content = json_encode($array);
                break;

            case 'application/x-yaml':
                $contentType = 'application/x-yaml';
                $dumper = new YamlDumper();
                $content = $dumper->dump($array, 2);
                break;

            default:
                $contentType = 'application/json';
                $content = json_encode([
                    'error' => [
                        'code' => static::CODE_INVALID_MIME_TYPE,
                        'http_code' => 415,
                        'message' => sprintf('Content of type %s is not supported.', $mimeType),
                    ]
                ]);
                $content = json_encode($array);
        }

        $response = Response::make($content, $this->statusCode, $headers);
        $response->header('Content-Type', $contentType);

        return $response;
    }

    protected function respondWithError($message, $errorCode) {
        /*
        if ($this->statusCode === 200) {
            trigger_error(
                "You better have a really good reason for erroring on a 200...",
                E_USER_WARNING
            );
        }*/

        return $this->respondWithArray([
            'error' => [
                'code' => $errorCode,
                'http_code' => $this->statusCode,
                'message' => $message,
            ]
        ]);
    }

    /**
     * Generates a Response with a 403 HTTP header and a given message.
     *
     * @return  Response
     */
    public function errorForbidden($message = 'Forbidden')
    {
        return $this->setStatusCode(403)->respondWithError($message, self::CODE_FORBIDDEN);
    }

    /**
     * Generates a Response with a 500 HTTP header and a given message.
     *
     * @return  Response
     */
    public function errorInternalError($message = 'Internal Error')
    {
        return $this->setStatusCode(500)->respondWithError($message, self::CODE_INTERNAL_ERROR);
    }
    
    /**
     * Generates a Response with a 404 HTTP header and a given message.
     *
     * @return  Response
     */
    public function errorNotFound($message = 'Resource Not Found')
    {
        return $this->setStatusCode(404)->respondWithError($message, self::CODE_RESOURCE_WAS_NOT_FOUND);
    }

    /**
     * Generates a Response with a 401 HTTP header and a given message.
     *
     * @return  Response
     */
    public function errorUnauthorized($message = 'Unauthorized')
    {
        return $this->setStatusCode(401)->respondWithError($message, self::CODE_UNAUTHORIZED);
    }

    /**
     * Generates a Response with a 400 HTTP header and a given message.
     *
     * @return  Response
     */
    public function errorWrongArgs($message = 'Wrong Arguments')
    {
        return $this->setStatusCode(400)->respondWithError($message, self::CODE_WRONG_ARGS);
    }

    /**
    *   Genera una respuesta HTTP 201 cuando se crea un elemento.
    *   
    *   @return response
    */
    public function responseCreatedSuccessfulElement($item, $callback) {
        return $this->setStatusCode(201)->respondWithItem($item, $callback);
    }

    /**
     * Generates a Response with a 404 HTTP header and a given message.
     *
     * @return  Response
     */
    public function notDataFound($message = '') {
        $response[self::NOT_DATA_FOUND] = true;

        if (!empty($message)) {
            $response[self::MESSAGE] = $message;            
        }

        return $this->respondWithItem($response, new GenericTransformer);
    }
}
