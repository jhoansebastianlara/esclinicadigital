<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Custodian extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'custodian';

	/**
	*	Se indica la eliminación logica de los datos.
	*/
	protected $softDelete = true;

	/**
	 * LLave primaria del de la tabla a la que hace referencia el modelo.
	 *
	 * @var string
	 */
	protected $primaryKey = 'custodianId';

	/**
	*	Campo usado para el eliminado lógico en la tabla
	*/
	protected $dates = ['deleted_at'];

	/**
	*	Se especifican los campos que no se pueden "setear" cuando se provee un 
	*	arreglo de datos en la creación de una nueva instancia.
	*/
	 protected $guarded = [
        "custodianId",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

	/**
	*	Para actualizar los "timestamps" de las tablas padres cuando sus hijas son actualizadas
	*/
	//protected $touches = array('patients');
    
    #Relaciones    

    /**
    *	Una persona puede ser responsable ("Custodian") de muchos pacientes ("Patient").
    */
    public function patients() {
    	return $this->belongsToMany('Patient', 'patient_custodian', 'custodianId', 'patientId');
    }

}
