<?php

namespace Hostingde\API\classes\webhosting;

use Hostingde\API\classes\GenericObject;

class Webspace extends GenericObject {
	public $id;
	public $accountId;
	public $bundleId;
	public $name;
	public $webspaceName;
	public $productCode;
	public $storageQuota;
	public $storageUsed;
	public $storageQuotaUsedRatio;
	public $status;
	public $accesses = array();
	public $serverIpv4;
	public $serverIpv6;
	public $cronJobs = array();
	public $paidUntil;
	public $deletionScheduledFor;
	public $restorableUntil;
	public $addDate;
	public $lastChangeDate;
	public $includedPhpExecutionTime;
	public $includedPhpMemory;
	public $phpExecutionTime;
	public $phpMemory;
}
