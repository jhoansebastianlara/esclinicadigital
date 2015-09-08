<?php namespace app\transformer;

use State;
use League\Fractal\TransformerAbstract;
use Config;

class StateTransformer extends TransformerAbstract
{
    protected $availableEmbeds = [
        'cities'
    ];

    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(State $state) {
        return [
            Config::get('constants.STATE.ATTRS.STATE_ID')   => (int) $state->stateId,
            Config::get('constants.STATE.ATTRS.NAME')       => $state->name,
        ];
    }

    /**
     * Embed cities
     *
     * @return League\Fractal\Resource\Collection
     */
    public function embedCities(State $state) {
        $cities = $state->cities;

        return $this->collection($cities, new CityTransformer);
    }

}
