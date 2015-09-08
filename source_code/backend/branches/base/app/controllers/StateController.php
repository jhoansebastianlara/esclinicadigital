<?php

use App\Transformer\StateTransformer;

class StateController extends ApiController {

	/**
	*	Variable para las posibles relaciones que va a tener el "state".
	*
	*	Left is the embed names, right is relationship names.
	*	avoids exposing relationships and whatnot directly.
	*/
	private $possibleRelationships = [
		'cities' => 'cities',
	];

	/**
	*	Función responsable de capturar la información 
	*	que se desea embeber en las respuestas teniendo
	*	en cuenta el parametro "embed".
	*/
	public function getEagerLoad() {
		$this->buildEagerLoad($this->possibleRelationships);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		// Se verifica la información a embeber.		
		$this->getEagerLoad();

		// Se consultan los datos teniendo en cuenta la información a embeber.
		$statesList = State::all();

		return $this->respondWithCollection($statesList, new StateTransformer);
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
		$state = State::find($id);

        if (!$state) {
            return $this->errorNotFound('state not found');
        }
        
        return $this->respondWithItem($state, new StateTransformer);
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
