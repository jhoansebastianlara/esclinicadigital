<?php

/**
*	Archivo que contiene las constantes de la aplicación.
*
*	@author: Sebastián Lara <sebastian@mobigeek.co>
*
*	@date: 01/10/2014
*/

return array(

	'QUERY' => 'query',

	'APP' => array(
		// código de Colombia en la BD, ver tabla "country"
		'COUNTRY_CODES' => array(
			'CO' => '53'
		),
	),

	'ENTITY' => array(
		'CREATED_AT' => 'createdAt',
	),

	'CUSTODIANS' => 'custodians',
	'CUSTODIANS_DELETE' => 'custodiansDelete',

	'USER' => array(
		'TABLE' => 'user',
		'ATTRS' => array(
			'USER_ID' => 'userId',
			'IDENTIFICATION_TYPE_ID' => 'identificationTypeId',
			'NAME' => 'name',
			'LASTNAME' => 'lastname',
			'USERNAME' => 'username',
			'PASSWORD' => 'password',
			'IDENTIFICATION_NUMBER' => 'identificationNumber',
			'EMAIL' => 'email',
			'BIRTHDATE' => 'birthdate',
			'GENDER' => 'gender',
			'REMEMBER_TOKEN' => 'rememberToken',
		),
	),	

	'PATIENT' => array (
		'TABLE' => 'patient',
		'ATTRS' => array (
			'PATIENT_ID' => 'patientId',
			'IDENTIFICATION_TYPE_ID' => 'identificationTypeId',
			'MARITAL_STATUS_ID' => 'maritalStatusId',
			'NAME' => 'name',
			'LASTNAME' => 'lastname',
			'IDENTIFICATION_NUMBER' => 'identificationNumber',
			'PLACEBIRTH' => 'placebirth',
			'BIRTHDATE' => 'birthdate',
			'GENDER' => 'gender',
			'OCCUPATION' => 'occupation',
			'RESIDENCE_CITY' => 'residenceCity',
			'ADDRESS' => 'address',
		)
	),

	'CUSTODIAN' => array (
		'TABLE' => 'custodian',
		'ATTRS' => array (
			'CUSTODIAN_ID' => 'custodianId',
			'RELATIONSHIP_ID' => 'relationshipId',
			'IDENTIFICATION_TYPE_ID' => 'identificationTypeId',
			'IDENTIFICATION_NUMBER' => 'identificationNumber',
			'FULLNAME' => 'fullName',
			'PHONE' => 'phone',
			'EMAIL' => 'email',
		)
	),

	'IDENTIFICATION_TYPE' => array(
		'TABLE' => 'identification_type',
		'ATTRS' => array(
			'IDENTIFICATION_TYPE_ID' => 'identificationTypeId',
			'COUNTRY_ID' => 'countryId',
			'COUNTRY_KEY' => 'countryKey',
			'NAME' => 'name',
			'ABBEVIATION' => 'abbeviation',
		),
	),

	'MARITAL_STATUS' => array(
		'TABLE' => 'marital_status',
		'ATTRS' => array(
			'MARITAL_STATUS_ID' => 'maritalStatusId',
			'COUNTRY_ID' => 'countryId',
			'NAME' => 'name',
		),
	),

	'RELATIONSHIP' => array(
		'TABLE' => 'relationship',
		'ATTRS' => array(
			'RELATIONSHIP_ID' => 'relationshipId',
			'COUNTRY_ID' => 'countryId',
			'NAME' => 'name',
		),
	),

	'CITY' => array(
		'TABLE' => 'city',
		'ATTRS' => array (
			'CITY_ID' => 'cityId',
			'NAME' => 'name',
		)
	),

	'STATE' => array(
		'TABLE' => 'state',
		'ATTRS' => array (
			'COUNTRY_ID' => 'stateId',
			'NAME' => 'name',
		),
	),
	
	'COUNTRY' => array(
		'TABLE' => 'country',
		'ATTRS' => array (
			'COUNTRY_ID' => 'countryId',
			'NAME' => 'name',
		),
	),

	'MEDICAL_RECORD' => array(
		'TABLE' => 'medical_record',
		'ATTRS' => array (
			
		),
	),

	'MEDICAL_RECORD_EVOLUTION' => array(
		'TABLE' => 'medical_record_evolution',
		'ATTRS' => array (
			'MEDICAL_RECORD_ID' => 'medicalRecordId',
			'USER_ID' => 'userId',
			'EXTERNAL_CAUSE_ID' => 'externalCauseId',
			'PURPOSE_APPOINTMENT_ID' => 'purposeAppointmentId',
			'DATE' => 'date',
			'EVOLUTION_NUMBER' => 'evolutionNumber',
			'PURPOSE' => 'purpose',
			'CONDUCT' => 'conduct',
			'PRINCIPAL_DIAGNOSTIC_TYPE' => 'principalDiagnosticType',
		),
	),

	'MEDICAL_HISTORY' => array(
		'TABLE' => 'medical_history',
		'ATTRS' => array (
			'MEDICAL_HISTORY_ID' => 'medicalHistoryId',
			'NAME' => 'name',
		),
	),

	'PATIENT_MEDICAL_HISTORY' => array(
		'TABLE' => 'medical_history',
		'ATTRS' => array (
			'PATIENT_MEDICALHISTORY_ID' => 'patientMedicalHistoryId',
			'PATIENT_ID' => 'patientId',
			'MEDICAL_HISTORY_ID' => 'medicalHistoryId',
			'MEDICAL_HISTORYITEM_ID' => 'medicalHistoryItemId',
			'DESCRIPTION' => 'description',
		),
	),
	
	'EXAM' => array(
		'TABLE' => 'exam',
		'ATTRS' => array (
			'EXAM_ID' => 'examId',
			'SPECIALITY_ID' => 'specialityId',
			'EXAM_TYPE_ID' => 'examTypeId',
		),
	),
	
	'EXAM_ITEM' => array(
		'TABLE' => 'exam_item',
		'ATTRS' => array (
			'EXAM_ITEM_ID' => 'examItemId',
			'EXAM_ID' => 'examId',
			'USER_SPECIALITY_ID' => 'userSpecialityId',
			'NAME' => 'name',
			'ABBREVIATION' => 'abbreviation',
			'TYPE' => 'type',
			'STATUS' => 'status',
			'TECHNICAL_NAME' => 'technicalName',
			'MAX_LENGTH' => 'maxlength',
			'DISABLED' => 'disabled',
			'ON_CHAGE_EVENT' => 'onChageEvent',
		),
	),

	'EXAM_TYPE' => array(
		'TABLE' => 'exam_type',
		'ATTRS' => array (
			'EXAMTYPE_ID' => 'examTypeId',
			'NAME' => 'name',
		),
	),

	'SPECIALITY' => array(
		'TABLE' => 'speciality',
		'ATTRS' => array (
			'SPECIALITY_ID' => 'specialityId',
			'NAME' => 'name',
		),
	),

	'CIE' => array(
		'TABLE' => 'cie',
		'ATTRS' => array (
			'CIE_ID' => 'cieId',
			'CIE_CATEGOTY_ID' => 'cieCategoryId',
			'CODE' => 'code',
			'NAME' => 'name',
		),
	),

	'CIE_CATEGORY' => array(
		'TABLE' => 'cie_category',
		'ATTRS' => array (
			'CIE_CATEGORY_ID' => 'cieCategoryId',
			'NAME' => 'name',
		),
	),

	'EXTERNAL_CAUSE' => array(
		'TABLE' => 'external_cause',
		'ATTRS' => array (
			'EXTERNAL_CAUSE_ID' => 'externalCauseId',
			'NAME' => 'name',
		),
	),

	'PURPOSE_APPOINTMENT' => array(
		'TABLE' => 'purpose_apointment',
		'ATTRS' => array (
			'PURPOSE_APPOINTMENT_ID' => 'purposeAppointmentId',
			'NAME' => 'name',
		),
	),
);
