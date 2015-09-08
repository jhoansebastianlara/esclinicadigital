<?php namespace app\transformer;

use Speciality;
use League\Fractal\TransformerAbstract;
use Config;

class SpecialityTransformer extends TransformerAbstract {

    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(Speciality $speciality) {
        return [
            Config::get('constants.SPECIALITY.ATTRS.SPECIALITY_ID')   => $speciality->specialityId,
            Config::get('constants.SPECIALITY.ATTRS.NAME')           => $speciality->name,
        ];
    }
}