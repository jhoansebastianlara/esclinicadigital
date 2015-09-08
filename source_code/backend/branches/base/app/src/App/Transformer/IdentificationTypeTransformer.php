<?php namespace app\transformer;

use IdentificationType;
use League\Fractal\TransformerAbstract;
use Config;

class IdentificationTypeTransformer extends TransformerAbstract {
    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(IdentificationType $identificationType) {
        return [
            Config::get('constants.IDENTIFICATION_TYPE.ATTRS.IDENTIFICATION_TYPE_ID')   => $identificationType->identificationTypeId,
            Config::get('constants.IDENTIFICATION_TYPE.ATTRS.COUNTRY_ID')               => $identificationType->countryId,
            Config::get('constants.IDENTIFICATION_TYPE.ATTRS.COUNTRY_KEY')              => $identificationType->countryKey,
            Config::get('constants.IDENTIFICATION_TYPE.ATTRS.NAME')                     => $identificationType->name,
            Config::get('constants.IDENTIFICATION_TYPE.ATTRS.ABBEVIATION')              => $identificationType->abbeviation
        ];
    }
}
