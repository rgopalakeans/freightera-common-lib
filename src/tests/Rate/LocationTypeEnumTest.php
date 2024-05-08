<?php
namespace Rate;

use Freightera\Common\Rate\LaneTypeEnum;
use Freightera\Common\Rate\LocationTypeEnum;
use Freightera\Common\Rate\SpecialHandlingPickupEnum;
use PHPUnit\Framework\TestCase;

class LocationTypeEnumTest extends TestCase
{
	public function laneTypeDataProvider(): array
	{
		return [
			[
				'laneType' => LaneTypeEnum::LTL,
				'expected' => [
					LocationTypeEnum::BUSINESS,
					LocationTypeEnum::BUSINESS_NO_DOCK,
					LocationTypeEnum::RESIDENTIAL,
					LocationTypeEnum::CARRIER_TERMINAL,
				]
			],
			[
				'laneType' => LaneTypeEnum::FLATBED,
				'expected' => [
					LocationTypeEnum::BUSINESS,
					LocationTypeEnum::BUSINESS_NO_DOCK,
					LocationTypeEnum::RESIDENTIAL,
					LocationTypeEnum::CARRIER_TERMINAL,
				]
			],
			[
				'laneType' => LaneTypeEnum::FTL,
				'expected' => [
					LocationTypeEnum::BUSINESS,
				]
			],
			[
				'laneType' => LaneTypeEnum::PARCEL,
				'expected' => [
					LocationTypeEnum::BUSINESS,
					LocationTypeEnum::RESIDENTIAL,
				]
			],
			[
				'laneType' => LaneTypeEnum::CONTAINER,
				'expected' => [
					LocationTypeEnum::PORT,
					LocationTypeEnum::RAIL_YARD,
					LocationTypeEnum::BUSINESS,
					LocationTypeEnum::BUSINESS_NO_DOCK,
					LocationTypeEnum::RESIDENTIAL,
					LocationTypeEnum::CONSTRUCTION_SITE,
					LocationTypeEnum::CARRIER_TERMINAL,
				]
			],
		];
	}

	/**
	 * @dataProvider laneTypeDataProvider
	 */
	public function testValuesByLaneType(string $laneType, array $expected)
	{
		$this->assertEquals($expected, LocationTypeEnum::valuesByLaneType($laneType));
	}
}
