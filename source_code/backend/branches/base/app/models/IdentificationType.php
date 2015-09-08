<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class IdentificationType extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'identification_type';

	/**
	*	Se indica la eliminación logica de los datos.
	*/
	protected $softDelete = true;

	/**
	 * LLave primaria del de la tabla a la que hace referencia el modelo.
	 *
	 * @var string
	 */
	protected $primaryKey = 'identificationTypeId';

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
        "identificationTypeId",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    /**
    *	Un tipo de identificación ("IdentificationType") la pueden tener muchos usuarios ("User")
    */
    public function users() {
        return $this->hasMany('User', 'identificationTypeId');
    }


}
