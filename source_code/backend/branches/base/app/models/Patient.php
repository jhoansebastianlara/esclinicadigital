<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Patient extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'patient';

	/**
	*	Se indica la eliminación logica de los datos.
	*/
	protected $softDelete = true;

	/**
	 * LLave primaria del de la tabla a la que hace referencia el modelo.
	 *
	 * @var string
	 */
	protected $primaryKey = 'patientId';

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
        "patientId",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    # Relaciones
    
    public function identificationType() {
        return $this->belongsTo('IdentificationType', 'identificationTypeId')
        			->withTimestamps();
    }

    /**
    *	Un paciente ("Patient") puede tener muchos resposables ("Custodian")
    */
    public function custodians() {
        return $this->belongsToMany('Custodian', 'patient_custodian', 'patientId', 'custodianId');
    }

    /**
    *   Un paciente ("Patient") puede tener muchos antecedente médicos ("MedicalHistory")
    */
    public function medicalHistories() {
        return $this->belongsToMany('MedicalHistory', 'patient_medical_history', 'patientId', 'medicalHistoryId');
    }

    public function maritalStatus() {
        return $this->belongsTo('MaritalStatus', 'maritalStatusId')->withTimestamps();
    }

    public function patientIdentifications()
    {
        return $this->hasMany('PatientIdentification');
    }
    /**
    * un usuario ("Patient") puede tener muchos antecedentes medicos personales ("PatientMedicalHistory") 
    */
    public function patientMedicalHistories()
    {
        return $this->hasMany('PatientMedicalHistory','patientMedicalHistoryId');
    }


}

/**
*	En la tabla donde esta la relacion va hasOne, en la ralacionada belongsTo
*
*
*	En la tabla NOMBRE_MODELO_RELACIONADO hay un registro de PATIENT
*	hasOne(
*		'NOMBRE_MODELO_RELACIONADO', (Requerido)
*		'LLAVE_FORANEA_RELACIONADA_AL_MODELO_RELACIONADO', (Opcional)
*		'COLUMNA_LOCAL_USADA_PARA_LA_ASOCIACION' (Opcional)
*	)
*
*	belongsTo(MODELO_RELACIONADO, LOCAL_KEY, PARENT_KEY)
*
*/