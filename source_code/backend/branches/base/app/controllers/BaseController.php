<?php

use App\Transformer\IdentificationTypeTransformer;
use App\Transformer\MaritalStatusTransformer;

use Illuminate\Support\MessageBag;

class BaseController extends Controller
{
    protected $passes;

    protected $errors;

    public function __construct()
    {
        $errors = new MessageBag();

        if ($old = Input::old("errors"))
        {
            $errors = $old;
        }

        $this->errors = $errors;
    }

    public function isValid($rules)
    {
        $validator = Validator::make(Input::all(), $rules);

        $this->passes = $validator->passes();
        $this->errors = $validator->errors();

        return $this->passes;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function setErrors(MessageBag $errors)
    {
        $this->errors = $errors;
        return $this;
    }

    public function hasErrors()
    {
        return $this->errors->any();
    }

    public function getError($key)
    {
        return $this->getErrors()->first($key);
    }

    public function getErrorMarkup($key)
    {
        if ($error = $this->getError($key))
        {
            return "<div class='error'>" . $error . "</div>";
        }

        return "";
    }

    /**
    *   Función responsable de listar los tipos de identificación 
    *   disponibles para el país actual.
    *
    *   @return array, lista de tipos de identificación encontrados.
    */
    public function getIdentificationTypeList($countryId = '') {
        if (empty($countryId)) {
            $countryId = Config::get('constants.APP.COUNTRY_CODES.CO');
        }
        
        $identificationTypeList = IdentificationType::where('countryId', $countryId)
                                ->orderBy(Config::get('constants.IDENTIFICATION_TYPE.ATTRS.IDENTIFICATION_TYPE_ID'))
                                ->get();

        return $identificationTypeList;
    }

    /**
    *   Función responsable de obtener el listado de estados civiles 
    *   disponibles para el país actual.
    *
    *   @return array, lista de estados civiles encontrados.
    */
    public function getMaritalStatusList($countryId = '') {
        if (empty($countryId)) {
            $countryId = Config::get('constants.APP.COUNTRY_CODES.CO');
        }

        $maritalStatusList = MaritalStatus::where('countryId', $countryId)
                            ->orderBy(Config::get('constants.MARITAL_STATUS.ATTRS.MARITAL_STATUS_ID'))
                            ->get();                            

        return $maritalStatusList;
    }

    /**
    *   Función responsable de obtener el listado de parentescos civiles 
    *   disponibles para el país actual.
    *
    *   @return array, lista de parentescos civiles encontrados.
    */
    public function getRelationshipList($countryId = '') {
        if (empty($countryId)) {
            $countryId = Config::get('constants.APP.COUNTRY_CODES.CO');
        }

        $relationshipList = Relationship::where('countryId', $countryId)
                            ->orderBy(Config::get('constants.RELATIONSHIP.ATTRS.RELATIONSHIP_ID'))
                            ->get();

        return $relationshipList;
    }

}