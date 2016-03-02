<?php

namespace Fungku\NetSuite\Classes;

class ContactSearchBasic extends SearchRecordBasic {
	public $address;
	public $addressee;
	public $addressLabel;
	public $addressPhone;
	public $attention;
	public $availableOffline;
	public $category;
	public $city;
	public $comments;
	public $company;
	public $contactRole;
	public $contactSource;
	public $country;
	public $county;
	public $dateCreated;
	public $email;
	public $employer;
	public $entityId;
	public $externalId;
	public $externalIdString;
	public $fax;
	public $firstName;
	public $giveAccess;
	public $globalSubscriptionStatus;
	public $group;
	public $hasDuplicates;
	public $image;
	public $internalId;
	public $internalIdNumber;
	public $isDefaultBilling;
	public $isDefaultShipping;
	public $isInactive;
	public $isPrivate;
	public $language;
	public $lastModifiedDate;
	public $lastName;
	public $level;
	public $middleName;
	public $owner;
	public $permission;
	public $phone;
	public $phoneticName;
	public $salutation;
	public $state;
	public $subsidiary;
	public $title;
	public $type;
	public $zipCode;
	public $customFieldList;
	static $paramtypesmap = array(
		"address" => "SearchStringField",
		"addressee" => "SearchStringField",
		"addressLabel" => "SearchStringField",
		"addressPhone" => "SearchStringField",
		"attention" => "SearchStringField",
		"availableOffline" => "SearchBooleanField",
		"category" => "SearchMultiSelectField",
		"city" => "SearchStringField",
		"comments" => "SearchStringField",
		"company" => "SearchMultiSelectField",
		"contactRole" => "SearchMultiSelectField",
		"contactSource" => "SearchMultiSelectField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"dateCreated" => "SearchDateField",
		"email" => "SearchStringField",
		"employer" => "SearchStringField",
		"entityId" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fax" => "SearchStringField",
		"firstName" => "SearchStringField",
		"giveAccess" => "SearchBooleanField",
		"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
		"group" => "SearchMultiSelectField",
		"hasDuplicates" => "SearchBooleanField",
		"image" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDefaultBilling" => "SearchBooleanField",
		"isDefaultShipping" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isPrivate" => "SearchBooleanField",
		"language" => "SearchEnumMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"lastName" => "SearchStringField",
		"level" => "SearchEnumMultiSelectField",
		"middleName" => "SearchStringField",
		"owner" => "SearchMultiSelectField",
		"permission" => "SearchEnumMultiSelectField",
		"phone" => "SearchStringField",
		"phoneticName" => "SearchStringField",
		"salutation" => "SearchStringField",
		"state" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"title" => "SearchStringField",
		"type" => "SearchEnumMultiSelectField",
		"zipCode" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

