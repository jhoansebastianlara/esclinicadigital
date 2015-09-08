<?php

use App\Transformer\GenericTransformer;
use App\Transformer\PurposeAppointmentTransformer;

class PurposeAppointmentController extends ApiController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$purposeAppointmentList = PurposeAppointment::where("name", "LIKE", "%" . htmlentities(Input::get('filter')) . "%")
						->orderBy(Config::get('constants.PURPOSE_APPOINTMENT.ATTRS.NAME'))
						->get();

		if (!$purposeAppointmentList->count()) {
            return $this->notDataFound();
        }

		return $this->respondWithCollection($purposeAppointmentList, new PurposeAppointmentTransformer);
	}

}
