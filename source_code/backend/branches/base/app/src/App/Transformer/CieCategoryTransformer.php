<?php namespace app\transformer;

use CieCategory;
use League\Fractal\TransformerAbstract;
use Config;

class CieCategoryTransformer extends TransformerAbstract {

    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(CieCategory $cieCategory) {
        return [
            Config::get('constants.CIE_CATEGORY.ATTRS.CIE_CATEGORY_ID')   => $cieCategory->cieCategoryId,
            Config::get('constants.CIE_CATEGORY.ATTRS.NAME')              => $cieCategory->name,
        ];
    }
}
