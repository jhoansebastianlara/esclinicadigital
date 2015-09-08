<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class UserSpeciality extends Eloquent {

	use SoftDeletingTrait;

	/**a
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_speciality';

	/**
	*	Se indica la eliminación logica de los datos.
	*/
	protected $softDelete = true;

	/**
	 * LLave primaria del de la tabla a la que hace referencia el modelo.
	 *
	 * @var string
	 */
	protected $primaryKey = 'userSpecialityId';

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
        "userSpecialityId",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
    /**
    * Relaciones
    */
    public function user() {
        return $this->belongsTo('User', 'userId')->withTimestamps();
    }

    public function speciality() {
        return $this->belongsTo('Speciality', 'specialityId')->withTimestamps();
    }

    public function ExamItems()
    {
        return $this->hasMany('ExamItem');
    }

    


}
