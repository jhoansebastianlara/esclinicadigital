<?php

use App\Transformer\GenericTransformer;
use App\Transformer\ExternalCauseTransformer;

class ExternalCauseController extends ApiController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$externalCauseList = ExternalCause::where("name", "LIKE", "%" . htmlentities(Input::get('filter')) . "%")
						->orderBy(Config::get('constants.EXTERNAL_CAUSE.ATTRS.NAME'))
						->get();

		if (!$externalCauseList->count()) {
            return $this->notDataFound();
        }

		return $this->respondWithCollection($externalCauseList, new ExternalCauseTransformer);
	}

}
