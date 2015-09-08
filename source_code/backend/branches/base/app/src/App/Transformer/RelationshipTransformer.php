<?php namespace app\transformer;

use Relationship;
use League\Fractal\TransformerAbstract;
use Config;

class RelationshipTransformer extends TransformerAbstract {
    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(Relationship $relationship) {
        return [
            Config::get('constants.RELATIONSHIP.ATTRS.RELATIONSHIP_ID') => $relationship->relationshipId,
            Config::get('constants.RELATIONSHIP.ATTRS.COUNTRY_ID')      => $relationship->countryId,            
            Config::get('constants.RELATIONSHIP.ATTRS.NAME')            => $relationship->name,            
        ];
    }
}
