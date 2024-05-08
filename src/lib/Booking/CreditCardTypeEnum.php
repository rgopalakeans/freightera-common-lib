<?php

namespace Freightera\Common\Booking;

use Freightera\Common\Helpers\Enum;

class CreditCardTypeEnum extends Enum
{
    public const AMEX = 'amex';
    public const VISA = 'visa';
    public const MASTERCARD = 'mastercard';

	private function __construct()
	{
	}
}
