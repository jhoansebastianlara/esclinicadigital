<?php

use App\Transformer\GenericTransformer;
use App\Transformer\CieTransformer;

class CieController extends ApiController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$cieList = Cie::where("name", "LIKE", "%" . htmlentities(Input::get('filter')) . "%")
						->orWhere("code", "LIKE", "%" . htmlentities(Input::get('filter')) . "%")
						->orderBy(Config::get('constants.CIE.ATTRS.CIE_ID'))
						->get();

		if (!$cieList->count()) {
            return $this->notDataFound();
        }

		return $this->respondWithCollection($cieList, new CieTransformer);
	}

}

