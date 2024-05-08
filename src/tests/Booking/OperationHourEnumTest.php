<?php
namespace Booking;

use Freightera\Common\Booking\OperationHourEnum;
use PHPUnit\Framework\TestCase;

class OperationHourEnumTest extends TestCase
{
	public function testLabels()
	{
		$this->assertNotEmpty(OperationHourEnum::labels());
	}
}
