<?php namespace app\transformer;

use ExternalCause;
use League\Fractal\TransformerAbstract;
use Config;

class ExternalCauseTransformer extends TransformerAbstract {

    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(ExternalCause $externalCause) {
        return [
            Config::get('constants.EXTERNAL_CAUSE.ATTRS.EXTERNAL_CAUSE_ID')   => $externalCause->externalCauseId,
            Config::get('constants.EXTERNAL_CAUSE.ATTRS.NAME')                => $externalCause->name,
        ];
    }
}