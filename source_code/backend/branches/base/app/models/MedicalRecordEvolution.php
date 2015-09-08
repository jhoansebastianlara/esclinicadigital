<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class MedicalRecordEvolution extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'medical_record_evolution';

	/**
	*	Se indica la eliminación logica de los datos.
	*/
	protected $softDelete = true;

	/**
	 * LLave primaria del de la tabla a la que hace referencia el modelo.
	 *
	 * @var string
	 */
	protected $primaryKey = 'medicalRecordEvolutionId';

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
        "medicalRecordEvolutionId",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
    /**
    * Relaciones
    */
    public function medicalRecord() {
        return $this->belongsTo('MedicalRecord', 'medicalRecordId')->withTimestamps();
    }

    public function medicalRecordPrescriptions() {
    	return $this->hasMany('MedicalRecordPrescription');
    }

    public function ripses() {
    	return $this->hasMany('Rips');
    }

    public function medicalRecordEvolutionExamItems() {
    	return $this->hasMany('MedicalRecordEvolutionExamItem');
    }

    public function medicalRecordEvolutionCies() {
    	return $this->hasMany('MedicalRecordEvolutionCie');
    }


}
