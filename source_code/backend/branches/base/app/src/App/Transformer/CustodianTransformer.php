<?php namespace app\transformer;

use Custodian;
use League\Fractal\TransformerAbstract;
use Config;

class CustodianTransformer extends TransformerAbstract {
    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(Custodian $custodian) {
        return [
            Config::get('constants.CUSTODIAN.ATTRS.CUSTODIAN_ID') => $custodian->custodianId,
            Config::get('constants.CUSTODIAN.ATTRS.RELATIONSHIP_ID') => $custodian->relationshipId,
            Config::get('constants.CUSTODIAN.ATTRS.IDENTIFICATION_TYPE_ID') => $custodian->identificationTypeId,
            Config::get('constants.CUSTODIAN.ATTRS.IDENTIFICATION_NUMBER') => $custodian->identificationNumber,
            Config::get('constants.CUSTODIAN.ATTRS.FULLNAME') => $custodian->fullName,
            Config::get('constants.CUSTODIAN.ATTRS.PHONE') => $custodian->phone,
            Config::get('constants.CUSTODIAN.ATTRS.EMAIL') => $custodian->email,
        ];
    }
}
