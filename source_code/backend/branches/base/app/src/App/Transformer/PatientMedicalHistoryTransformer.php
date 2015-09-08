<?php namespace app\transformer;

use PatientMedicalHistory;
use League\Fractal\TransformerAbstract;
use Config;

class PatientMedicalHistoryTransformer extends TransformerAbstract
{
  
    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(PatientMedicalHistory $patientMedicalHistory) {
        return [
            Config::get('constants.PATIENT_MEDICAL_HISTORY.ATTRS.PATIENT_MEDICALHISTORY_ID')   => (int) $patientMedicalHistory->patientMedicalHistoryId,
            Config::get('constants.PATIENT_MEDICAL_HISTORY.ATTRS.PATIENT_ID')   => (int) $patientMedicalHistory->patientId,
            Config::get('constants.PATIENT_MEDICAL_HISTORY.ATTRS.MEDICAL_HISTORY_ID')   => (int) $patientMedicalHistory->medicalHistoryId,
            Config::get('constants.PATIENT_MEDICAL_HISTORY.ATTRS.MEDICAL_HISTORYITEM_ID')   => (int) $patientMedicalHistory->medicalHistoryItemId,
            Config::get('constants.PATIENT_MEDICAL_HISTORY.ATTRS.DESCRIPTION')   => (string) $patientMedicalHistory->description,
        ];
    }

}