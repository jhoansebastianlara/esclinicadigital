<?php namespace app\transformer;

use Cie;
use League\Fractal\TransformerAbstract;
use Config;

class CieTransformer extends TransformerAbstract {

    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(Cie $cie) {
        return [
            Config::get('constants.CIE.ATTRS.CIE_ID')             => $cie->cieId,
            Config::get('constants.CIE.ATTRS.CIE_CATEGOTY_ID')    => $cie->cieCategoryId,
            Config::get('constants.CIE.ATTRS.CODE')               => $cie->code,
            Config::get('constants.CIE.ATTRS.NAME')               => $cie->name,
        ];
    }
}