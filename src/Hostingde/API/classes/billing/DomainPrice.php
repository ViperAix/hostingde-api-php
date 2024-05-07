<?php

namespace Hostingde\API\classes\billing;

use Hostingde\API\classes\GenericObject;

class DomainPrice extends GenericObject {
	public $create;
	public $createDuration;
	public $currency;
	public $domainSuffix;
	public $exchangeRatio;
	public $ownerChange;
	public $periodOfNotice;
	public $renew;
	public $renewDuration;
	public $restore;
	public $transfer;
	public $transferDuration;
	public $trusteeService;
	public $update;
	public $vatRate;
}
