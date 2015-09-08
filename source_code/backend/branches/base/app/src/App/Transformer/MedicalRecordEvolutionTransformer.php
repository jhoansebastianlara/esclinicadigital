<?php namespace app\transformer;

use MedicalRecordEvolution;
use Log;
use League\Fractal\TransformerAbstract;
use App\Transformer\StateTransformer;
use Config;

class MedicalRecordEvolutionTransformer extends TransformerAbstract
{
    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(MedicalRecordEvolution $medicalRecordEvolution) {
        return [
            Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.MEDICAL_RECORD_ID')           => $medicalRecordEvolution->medicalRecordId,
            Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.USER_ID')                     => $medicalRecordEvolution->userId,
            Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.EXTERNAL_CAUSE_ID')           => $medicalRecordEvolution->externalCauseId,
            Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.PURPOSE_APPOINTMENT_ID')      => $medicalRecordEvolution->purposeAppointmentId,
            Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.DATE')                        => $medicalRecordEvolution->date,
            Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.EVOLUTION_NUMBER')            => $medicalRecordEvolution->evolutionNumber,
            Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.PURPOSE')                     => $medicalRecordEvolution->purpose,
            Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.CONDUCT')                     => $medicalRecordEvolution->conduct,
            Config::get('constants.MEDICAL_RECORD_EVOLUTION.ATTRS.PRINCIPAL_DIAGNOSTIC_TYPE')   => $medicalRecordEvolution->principalDiagnosticType,
            Config::get('constants.ENTITY.CREATED_AT')                                          => (string) $medicalRecordEvolution->created_at,
        ];
    }

}
