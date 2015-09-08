<?php namespace app\transformer;

use Patient;
use League\Fractal\TransformerAbstract;
use Config;
use Log;
use App\Transformer\CustodianTransformer;
use App\Transformer\PatientMedicalHistoryTransformer;

class PatientTransformer extends TransformerAbstract
{
    protected $availableEmbeds = [
        'custodians',
        'patientMedicalHistories',
    ];

    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(Patient $patient) {
        return [
            Config::get('constants.PATIENT.ATTRS.PATIENT_ID')                => (int) $patient->patientId,
            Config::get('constants.PATIENT.ATTRS.IDENTIFICATION_TYPE_ID')    => (int) $patient->identificationTypeId,
            Config::get('constants.PATIENT.ATTRS.MARITAL_STATUS_ID')         => (int) $patient->maritalStatusId,
            Config::get('constants.PATIENT.ATTRS.NAME')                      => $patient->name,
            Config::get('constants.PATIENT.ATTRS.LASTNAME')                  => $patient->lastname,
            Config::get('constants.PATIENT.ATTRS.IDENTIFICATION_NUMBER')     => $patient->identificationNumber,
            Config::get('constants.PATIENT.ATTRS.PLACEBIRTH')                => $patient->placebirth,
            Config::get('constants.PATIENT.ATTRS.BIRTHDATE')                 => (string) $patient->birthdate,
            Config::get('constants.PATIENT.ATTRS.GENDER')                    => $patient->gender,
            Config::get('constants.PATIENT.ATTRS.OCCUPATION')                => $patient->occupation,
            Config::get('constants.PATIENT.ATTRS.RESIDENCE_CITY')            => $patient->residenceCity,
            Config::get('constants.PATIENT.ATTRS.ADDRESS')                   => $patient->address,
            Config::get('constants.ENTITY.CREATED_AT')                      => (string)$patient->created_at,
        ];
    }

    /**
     * Embed States
     *
     * @return League\Fractal\Resource\Collection
     */
    public function embedCustodians(Patient $patient) {
        $custodians = $patient->custodians;

        Log::info("Embedding patient-{$patient->patientId}");

        return $this->collection($custodians, new CustodianTransformer);
    }

    /**
     * Embed States
     *
     * @return League\Fractal\Resource\Collection
     */
    public function embedPatientMedicalHistories(Patient $patient) {
        $patientMedicalHistories = $patient->patientMedicalHistories;

        return $this->collection($patientMedicalHistories, new PatientMedicalHistoryTransformer);
    }

}
