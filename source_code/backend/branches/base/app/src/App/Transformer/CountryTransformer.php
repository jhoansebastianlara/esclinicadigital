<?php namespace app\transformer;

use Country;
use Log;
use League\Fractal\TransformerAbstract;
use App\Transformer\StateTransformer;
use Config;

class CountryTransformer extends TransformerAbstract
{
    protected $availableEmbeds = [
        'states'
    ];

    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(Country $country) {
        return [
            Config::get('constants.COUNTRY.ATTRS.COUNTRY_ID')   => (string) $country->countryId,
            Config::get('constants.COUNTRY.ATTRS.NAME')         => $country->name,
        ];
    }

    /**
     * Embed States
     *
     * @return League\Fractal\Resource\Collection
     */
    public function embedStates(Country $country) {
        $states = $country->states;

        Log::info("Embedding user-{$country->countryId}");

        return $this->collection($states, new StateTransformer);
    }
}
