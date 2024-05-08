<?php
namespace Rate;

use Freightera\Common\Rate\LaneTypeEnum;
use Freightera\Common\Rate\LocationTypeEnum;
use Freightera\Common\Rate\SpecialHandlingDeliveryEnum;
use PHPUnit\Framework\TestCase;

class SpecialHandlingDeliveryEnumTest extends TestCase
{
	public function locationTypeDataProvider(): array
	{
		return [
			[
				'laneType' => LaneTypeEnum::LTL,
				'locationType' => LocationTypeEnum::BUSINESS,
				'expected' => [
					SpecialHandlingDeliveryEnum::LIMITED_ACCESS,
					SpecialHandlingDeliveryEnum::AMAZON,
					SpecialHandlingDeliveryEnum::APPOINTMENT_TIME,
					SpecialHandlingDeliveryEnum::INSIDE,
					SpecialHandlingDeliveryEnum::JIGGER_PALLET_JACK,
					SpecialHandlingDeliveryEnum::STRAIGHT_TRUCK,
					SpecialHandlingDeliveryEnum::TRADE_SHOW,
				]
			],
			[
				'laneType' => LaneTypeEnum::LTL,
				'locationType' => LocationTypeEnum::BUSINESS_NO_DOCK,
				'expected' => [
					SpecialHandlingDeliveryEnum::LIMITED_ACCESS,
					SpecialHandlingDeliveryEnum::AMAZON,
					SpecialHandlingDeliveryEnum::APPOINTMENT_TIME,
					SpecialHandlingDeliveryEnum::INSIDE,
					SpecialHandlingDeliveryEnum::JIGGER_PALLET_JACK,
					SpecialHandlingDeliveryEnum::TAILGATE,
					SpecialHandlingDeliveryEnum::STRAIGHT_TRUCK,
					SpecialHandlingDeliveryEnum::TRADE_SHOW,
				]
			],
			[
				'laneType' => LaneTypeEnum::LTL,
				'locationType' => LocationTypeEnum::RESIDENTIAL,
				'expected' => [
					SpecialHandlingDeliveryEnum::APPOINTMENT_TIME,
					SpecialHandlingDeliveryEnum::INSIDE,
					SpecialHandlingDeliveryEnum::JIGGER_PALLET_JACK,
					SpecialHandlingDeliveryEnum::TAILGATE,
					SpecialHandlingDeliveryEnum::STRAIGHT_TRUCK,
				]
			],
			[
				'laneType' => LaneTypeEnum::LTL,
				'locationType' => LocationTypeEnum::CONSTRUCTION_SITE,
				'expected' => [
					SpecialHandlingDeliveryEnum::APPOINTMENT_TIME,
					SpecialHandlingDeliveryEnum::JIGGER_PALLET_JACK,
					SpecialHandlingDeliveryEnum::TAILGATE,
					SpecialHandlingDeliveryEnum::STRAIGHT_TRUCK,
				]
			],
			[
				'laneType' => LaneTypeEnum::LTL,
				'locationType' => LocationTypeEnum::CARRIER_TERMINAL,
				'expected' => []
			]
		];
	}

	/**
	 * @dataProvider locationTypeDataProvider
	 */
	public function testValuesByLocationType(string $laneType, string $locationType, array $expected)
	{
		$this->assertEquals($expected, SpecialHandlingDeliveryEnum::valuesByLaneAndLocationType($laneType, $locationType));
	}
}
