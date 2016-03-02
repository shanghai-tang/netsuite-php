<?php

namespace Fungku\NetSuite\Classes;

class RevRecTemplate extends Record {
	public $name;
	public $amortizationType;
	public $recurrenceType;
	public $recogIntervalSrc;
	public $amortizationPeriod;
	public $periodOffset;
	public $revRecOffset;
	public $initialAmount;
	public $isInactive;
	public $recurrenceList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"amortizationType" => "RevRecScheduleAmortizationType",
		"recurrenceType" => "RevRecScheduleRecurrenceType",
		"recogIntervalSrc" => "RevRecScheduleRecogIntervalSrc",
		"amortizationPeriod" => "integer",
		"periodOffset" => "integer",
		"revRecOffset" => "integer",
		"initialAmount" => "float",
		"isInactive" => "boolean",
		"recurrenceList" => "RevRecTemplateRecurrenceList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

