<?php
namespace Rate;

use Freightera\Common\Rate\LaneTypeEnum;
use Freightera\Common\Rate\LocationTypeEnum;
use Freightera\Common\Rate\SpecialHandlingPickupEnum;
use PHPUnit\Framework\TestCase;

class SpecialHandlingPickupEnumTest extends TestCase
{
	public function locationTypeDataProvider(): array
	{
		return [
			'LTL for Business' => [
				'laneType' => LaneTypeEnum::LTL,
				'locationType' => LocationTypeEnum::BUSINESS,
				'expected' => [
					SpecialHandlingPickupEnum::LIMITED_ACCESS,
					SpecialHandlingPickupEnum::INSIDE,
					SpecialHandlingPickupEnum::JIGGER_PALLET_JACK,
					SpecialHandlingPickupEnum::STRAIGHT_TRUCK,
					SpecialHandlingPickupEnum::TRADE_SHOW,
                    SpecialHandlingPickupEnum::PEER_PASS_FEE,
				]
			],
            'LTL for Business No Dock' => [
				'laneType' => LaneTypeEnum::LTL,
				'locationType' => LocationTypeEnum::BUSINESS_NO_DOCK,
				'expected' => [
					SpecialHandlingPickupEnum::LIMITED_ACCESS,
					SpecialHandlingPickupEnum::INSIDE,
					SpecialHandlingPickupEnum::JIGGER_PALLET_JACK,
					SpecialHandlingPickupEnum::TAILGATE,
					SpecialHandlingPickupEnum::STRAIGHT_TRUCK,
					SpecialHandlingPickupEnum::TRADE_SHOW,
                    SpecialHandlingPickupEnum::PEER_PASS_FEE,
				]
			],
            'LTL for Residential' => [
				'laneType' => LaneTypeEnum::LTL,
				'locationType' => LocationTypeEnum::RESIDENTIAL,
				'expected' => [
					SpecialHandlingPickupEnum::INSIDE,
					SpecialHandlingPickupEnum::JIGGER_PALLET_JACK,
					SpecialHandlingPickupEnum::TAILGATE,
					SpecialHandlingPickupEnum::STRAIGHT_TRUCK,
                    SpecialHandlingPickupEnum::PEER_PASS_FEE,
				]
			],
            'LTL for Construction Site' => [
				'laneType' => LaneTypeEnum::LTL,
				'locationType' => LocationTypeEnum::CONSTRUCTION_SITE,
				'expected' => [
					SpecialHandlingPickupEnum::JIGGER_PALLET_JACK,
					SpecialHandlingPickupEnum::TAILGATE,
					SpecialHandlingPickupEnum::STRAIGHT_TRUCK,
                    SpecialHandlingPickupEnum::PEER_PASS_FEE,
				]
			],
            'LTL for Carrier Terminal' => [
				'laneType' => LaneTypeEnum::LTL,
				'locationType' => LocationTypeEnum::CARRIER_TERMINAL,
				'expected' => [
                    SpecialHandlingPickupEnum::PEER_PASS_FEE,
                ]
			]
		];
	}

	/**
	 * @dataProvider locationTypeDataProvider
	 */
	public function testValuesByLocationType(string $laneType, string $locationType, array $expected)
	{
		$this->assertEquals($expected, SpecialHandlingPickupEnum::valuesByLaneAndLocationType($laneType, $locationType));
	}
}
