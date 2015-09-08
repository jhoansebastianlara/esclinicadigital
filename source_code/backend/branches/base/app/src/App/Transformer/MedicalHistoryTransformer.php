<?php namespace app\transformer;

use MedicalHistory;
use League\Fractal\TransformerAbstract;
use Config;

use App\Transformer\PatientMedicalHistoryTransformer;

class MedicalHistoryTransformer extends TransformerAbstract
{
    protected $availableEmbeds = [
        'patientMedicalHistories',
    ];

    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(MedicalHistory $medicalHistory) {
        return [
            Config::get('constants.MEDICAL_HISTORY.ATTRS.MEDICAL_HISTORY_ID')   => (int) $medicalHistory->medicalHistoryId,
            Config::get('constants.MEDICAL_HISTORY.ATTRS.NAME')  => (string) $medicalHistory->name
        ];
    }

    /**
     * Embed States
     *
     * @return League\Fractal\Resource\Collection
     */
    public function embedPatientMedicalHistories(MedicalHistory $medicalHistory) {
        $patientMedicalHistories = $medicalHistory->patientMedicalHistories;

        return $this->collection($patientMedicalHistories, new PatientMedicalHistoryTransformer);
    }
}
