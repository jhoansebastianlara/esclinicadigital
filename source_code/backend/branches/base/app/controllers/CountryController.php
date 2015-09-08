<?php

/**
*	Controlador responsable de gestionar la información referente a los paises en la aplicación.
*	
*	@author: Sebastián Lara <sebastian@mobigeek.co>
*	@date: 04/11/2014
*/
use App\Transformer\CountryTransformer;

class CountryController extends ApiController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		// Se valida si llega u filtro para consultar, de lo contrario se retorna la lista completa.
		if (Input::get(Config::get('constants.QUERY'))) {
			$countriesList = Country::where('countryId', 'LIKE', '%' . Input::get(Config::get('constants.QUERY')) . '%')
									->orWhere('name', 'LIKE', '%' . Input::get(Config::get('constants.QUERY')) . '%')
									->get();
		} else {
			$countriesList = Country::all();			
		}

		return $this->respondWithCollection($countriesList, new CountryTransformer);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		Log::info('LLega el id: ' . $id);

		$country = Country::find($id);
		Log::info($country);

        if (!$country) {
            return $this->errorNotFound('Country not found');
        }
        
        return $this->respondWithItem($country, new CountryTransformer);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
