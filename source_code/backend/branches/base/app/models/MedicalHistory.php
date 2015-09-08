<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class MedicalHistory extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'medical_history';

	/**
	*	Se indica la eliminación logica de los datos.
	*/
	protected $softDelete = true;

	/**
	 * LLave primaria del de la tabla a la que hace referencia el modelo.
	 *
	 * @var string
	 */
	protected $primaryKey = 'medicalHistoryId';

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
        "medicalHistoryId",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    #Relaciones
    
    /**
    *	Un antecedente médico ("MedicalHistory") lo pueden tener muchos pacientes ("Patient").
    */
    public function patients() {
    	return $this->belongsToMany('Patient', 'patient_medical_history', 'medicalHistoryId', 'patientId');
    }

    /**
    *   Un antecedente médico ("MedicalHistory") lo puede tener muchos pacientes ("PatientMedicalHistory").
    */
    public function patientMedicalHistories() {
        return $this->hasMany('PatientMedicalHistory', 'medicalHistoryId');
    }

}
