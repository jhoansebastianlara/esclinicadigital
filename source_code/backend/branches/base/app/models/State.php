<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class State extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'state';

	/**
	*	Se indica la eliminación logica de los datos.
	*/
	protected $softDelete = true;

	/**
	 * LLave primaria del de la tabla a la que hace referencia el modelo.
	 *
	 * @var string
	 */
	protected $primaryKey = 'stateId';

	/**
	*	Campo usado para el eliminado lógico en la tabla
	*/
	protected $dates = ['deleted_at'];

	/**
	*	The fillable property specifies which attributes should be mass-assignable
	*/
	//protected $fillable = array('first_name', 'last_name', 'email');

	/**
	*	Se especifican los campos que no se pueden "setear" cuando se provee un 
	*	arreglo de datos en la creación de una nueva instancia.
	*/
	 protected $guarded = [
        //"stateId", // se deshabilita para que permita especificar el PK.
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    public function country() {
        return $this->belongsTo('Country', 'countryId')->withTimestamps();
    }

    public function cities()
    {
        return $this->hasMany('City', 'stateId');
    }

}
