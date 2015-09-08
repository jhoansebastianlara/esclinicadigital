<?php namespace app\transformer;

use ExamType;
use League\Fractal\TransformerAbstract;
use Config;

class ExamTypeTransformer extends TransformerAbstract {

    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(ExamType $examType) {
        return [
            Config::get('constants.EXAM_TYPE.ATTRS.EXAM_TYPE_ID')   => $examType->examTypeId,
            Config::get('constants.EXAM_TYPE.ATTRS.NAME')           => $examType->name,
        ];
    }
}
