<?php namespace app\transformer;

use City;
use League\Fractal\TransformerAbstract;
use Config;

class CityTransformer extends TransformerAbstract
{
    protected $availableEmbeds = [];

    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(City $city) {
        return [
            Config::get('constants.CITY.ATTRS.CITY_ID') => (int) $city->cityId,
            Config::get('constants.CITY.ATTRS.NAME')    => $city->name,
        ];
    }

}
