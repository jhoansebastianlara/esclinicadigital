<?php namespace app\transformer;

use ExamItem;
use League\Fractal\TransformerAbstract;
use Config;

class ExamItemTransformer extends TransformerAbstract {

    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(ExamItem $examItem) {
        return [
            Config::get('constants.EXAM_ITEM.ATTRS.EXAM_ITEM_ID')       => $examItem->examItemId,
            Config::get('constants.EXAM_ITEM.ATTRS.EXAM_ID')            => $examItem->examId,
            Config::get('constants.EXAM_ITEM.ATTRS.USER_SPECIALITY_ID') => $examItem->userSpecialityId,
            Config::get('constants.EXAM_ITEM.ATTRS.NAME')               => $examItem->name,
            Config::get('constants.EXAM_ITEM.ATTRS.ABBREVIATION')       => $examItem->abbreviation,
            Config::get('constants.EXAM_ITEM.ATTRS.TYPE')               => $examItem->type,
            Config::get('constants.EXAM_ITEM.ATTRS.STATUS')             => $examItem->status,
        ];
    }
}
