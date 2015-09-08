<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {
	return View::make('hello');
});

Route::post('/login', 'AuthController@doLogin');
Route::get('/logout', 'AuthController@doLogout');

/**
*	App
*/
Route::group(array('prefix' => 'checkUnique'), function() {
	
	Route::group(array('prefix' => 'users'), function() {
		Route::get("/{field?}/{id?}", "UserController@checkUnique");

	});

	Route::group(array('prefix' => 'patients'), function() {
		Route::get("/{field?}/{id?}", "PatientController@checkUnique");

	});

});

// retorna los tipos de identificacion que existen
Route::get('/identificationType/{countryId?}', 'ApiController@getIdentificationTypeList');
Route::get('/maritalStatus/{countryId?}', 'ApiController@getMaritalStatusList');
Route::get('/relationships/{countryId?}', 'ApiController@getRelationshipList');

/**
*	Users
*/
Route::resource('users', 'UserController');

/**
*	Medical History
*/
Route::resource('/patients/medicalHistory', 'medicalHistoryController');

/**
*	Patients
*/
Route::resource('patients', 'PatientController');

/**
*	Cie
*/
Route::resource('cies', 'CieController');

/**
*	External Cause
*/
Route::resource('externalCause', 'ExternalCauseController');

/**
*	Porpuse Appointment
*/
Route::resource('purposeAppointment', 'PurposeAppointmentController');

/**
*	MedicalRecords
*/
Route::group(array('prefix' => 'patients'), function() {
	
	Route::group(array('prefix' => '/medicalRecords'), function() {
		Route::get('/create', array('uses' => 'MedicalRecordController@create'));

		Route::post('/', array('uses' => 'MedicalRecordController@store'));

	});
	
});


/**
*	More...
*/
Route::resource('countries', 'CountryController');
Route::resource('states', 'StateController');

Route::group(['before' => 'auth'], function() {
    /*
    Route::model("event", "Event");

    Route::get("event", [
        "as"   => "event/index",
        "uses" => "EventController@index"
    ]);
    */

});