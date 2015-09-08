<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user';

	/**
	*	Se indica la eliminación logica de los datos.
	*/
	protected $softDelete = true;

	/**
	 * LLave primaria del de la tabla a la que hace referencia el modelo.
	 *
	 * @var string
	 */
	protected $primaryKey = 'userId';

	/**
	*	Campo usado para el eliminado lógico en la tabla
	*/
	protected $dates = ['deleted_at'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'rememberToken');

	/**
	*	The fillable property specifies which attributes should be mass-assignable
	*/
	//protected $fillable = array('first_name', 'last_name', 'email');

	/**
	*	Se especifican los campos que no se pueden "setear" cuando se provee un 
	*	arreglo de datos en la creación de una nueva instancia.
	*/
	protected $guarded = [
        "userId",
        "created_at",
        "updated_at",
        "deleted_at"
    ];

	public function getAuthIdentifier() {
		return $this->getKey();
	}

	public function getAuthPassword() {
		return $this->password;
	}

	public function getRememberToken() {
		return $this->rememberToken;
	}

	public function setRememberToken($value) {
		$this->rememberToken = $value;
	}

	public function getRememberTokenName() {
		return "rememberToken";
	}

	public function getReminderEmail() {
		return $this->email;
	}

	public function getReminderUsername() {
		return $this->username;
	}

	# relaciones

	/**
	*	Un usuario ("User") puede tener un tipo de identificación ("IdentificationType")
	*/
	public function IdentificationTypes()
    {
        return $this->belongsTo('IdentificationType', 'identificationTypeId')->withTimestamps();
    }

}
