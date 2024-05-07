<?php

namespace Hostingde\API\classes\resource;

use Hostingde\API\classes\GenericObject;

class Network extends GenericObject {
	public $id;
	public $accountId;
	public $dataCenter;
	public $tag;
	public $addressFilterMode;
	public $networkType;
	public $name;
	public $comments;
	public $productCode;
	public $paidUntil;
	public $renewOn;
	public $deletionScheduledFor;
	public $restorableUntil;
	public $addDate;
	public $lastChangeDate;
}
