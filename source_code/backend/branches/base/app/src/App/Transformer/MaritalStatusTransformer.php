<?php namespace app\transformer;

use MaritalStatus;
use League\Fractal\TransformerAbstract;
use Config;

class MaritalStatusTransformer extends TransformerAbstract {
    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(MaritalStatus $maritalStatus) {
        return [
            Config::get('constants.MARITAL_STATUS.ATTRS.MARITAL_STATUS_ID') => $maritalStatus->maritalStatusId,
            Config::get('constants.MARITAL_STATUS.ATTRS.COUNTRY_ID')        => $maritalStatus->countryId,            
            Config::get('constants.MARITAL_STATUS.ATTRS.NAME')              => $maritalStatus->name,            
        ];
    }
}
