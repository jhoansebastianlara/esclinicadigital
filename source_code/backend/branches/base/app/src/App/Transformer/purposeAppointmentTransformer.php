<?php namespace app\transformer;

use purposeAppointment;
use League\Fractal\TransformerAbstract;
use Config;

class purposeAppointmentTransformer extends TransformerAbstract {

    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(purposeAppointment $purposeAppointment) {
        return [
            Config::get('constants.PURPOSE_APPOINTMENT.ATTRS.PURPOSE_APPOINTMENT_ID')   => $purposeAppointment->purposeAppointmentId,
            Config::get('constants.PURPOSE_APPOINTMENT.ATTRS.NAME')                     => $purposeAppointment->name,
        ];
    }
}