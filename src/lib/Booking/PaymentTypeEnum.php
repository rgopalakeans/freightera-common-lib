<?php

namespace Freightera\Common\Booking;

use Freightera\Common\Helpers\Enum;

class PaymentTypeEnum extends Enum
{
    public const CREDIT_CARD = 'credit_card';
    public const ETRANSFER = 'etransfer';
    public const EFT = 'eft';
    public const FREIGHTERA_CREDIT = 'freightera_credit';

	protected const _LABELS = [
		self::CREDIT_CARD => 'Credit Card',
		self::ETRANSFER => 'E-Transfer',
		self::EFT => 'EFT',
		self::FREIGHTERA_CREDIT => 'Freightera Credit',
	];

	private function __construct()
	{
	}
}
