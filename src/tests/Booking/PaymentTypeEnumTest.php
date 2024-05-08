<?php
namespace Booking;

use Freightera\Common\Booking\PaymentTypeEnum;
use PHPUnit\Framework\TestCase;

class PaymentTypeEnumTest extends TestCase
{
	public function testLabels()
	{
		$this->assertEquals([
			PaymentTypeEnum::CREDIT_CARD => 'Credit Card',
			PaymentTypeEnum::ETRANSFER => 'E-Transfer',
			PaymentTypeEnum::EFT => 'EFT',
			PaymentTypeEnum::FREIGHTERA_CREDIT => 'Freightera Credit',
		],
			PaymentTypeEnum::labels()
		);
	}
}
