<?php namespace app\transformer;

use Exam;
use League\Fractal\TransformerAbstract;
use Config;

use App\Transformer\ExamItemTransformer;

class ExamTransformer extends TransformerAbstract {

    protected $availableEmbeds = [
        'examItems'
    ];

    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(Exam $exam) {
        return [
            Config::get('constants.EXAM.ATTRS.EXAM_ID')         => $exam->examId,
            Config::get('constants.EXAM.ATTRS.SPECIALITY_ID')   => $exam->specialityId,
            Config::get('constants.EXAM.ATTRS.EXAM_TYPE_ID')    => $exam->examTypeId,
        ];
    }

    /**
     * Embed examItems
     *
     * @return League\Fractal\Resource\Collection
     */
    public function embedExamItems(Exam $exam) {
        $examItems = $exam->examItems;

        return $this->collection($examItems, new ExamItemTransformer);
    }
}
