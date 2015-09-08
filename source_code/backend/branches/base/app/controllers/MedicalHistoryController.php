<?php

use App\Transformer\GenericTransformer;
use App\Transformer\MedicalHistoryTransformer;

class MedicalHistoryController extends ApiController {
	/**
	 * Funcion para listar todos los datos en la tabla 
	 *
	 * @return Response
	 */
	public function index() {
		$medicalHistory = MedicalHistory::orderBy(Config::get('constants.MEDICAL_HISTORY.ATTRS.MEDICAL_HISTORY_ID'), 'asc')->get();
        
		if (!$medicalHistory->count()) {
            return null;
        }

		return $this->respondWithCollection($medicalHistory, new MedicalHistoryTransformer);
	}

	
	
}