<?php

namespace Freightera\Common\Rate;

use Freightera\Common\Helpers\Enum;
use RuntimeException;

final class LocationTypeEnum extends Enum
{
	public const PORT = 'port';
	public const RAIL_YARD = 'rail_yard';
    public const BUSINESS = 'business';
    public const BUSINESS_FORKLIFT = 'business_forklift';
	public const BUSINESS_NO_DOCK = 'business_no_dock';
	public const RESIDENTIAL = 'residential';
	public const CONSTRUCTION_SITE = 'construction_site';
	public const CARRIER_TERMINAL = 'carrier_terminal';

	private function __construct()
	{
	}

	public static function valuesByLaneType(string $laneType): array
	{
		switch ($laneType) {
			case LaneTypeEnum::LTL:
			case LaneTypeEnum::FLATBED:
				return [
					self::BUSINESS,
					self::BUSINESS_FORKLIFT,
					self::BUSINESS_NO_DOCK,
					self::RESIDENTIAL,
					self::CARRIER_TERMINAL,
				];
			case LaneTypeEnum::FTL:
				return [
					self::BUSINESS
				];
			case LaneTypeEnum::PARCEL:
				return [
					self::BUSINESS,
					self::RESIDENTIAL,
				];
			case LaneTypeEnum::CONTAINER:
				return [
					self::PORT,
					self::RAIL_YARD,
					self::BUSINESS,
					self::BUSINESS_NO_DOCK,
					self::RESIDENTIAL,
					self::CONSTRUCTION_SITE,
					self::CARRIER_TERMINAL,
				];
			default:
				return [];
		}
	}

	protected const _LABELS = [
		self::PORT => 'Port',
		self::RAIL_YARD => 'Rail yard',
		self::BUSINESS => 'Business with Dock',
		self::BUSINESS_FORKLIFT => 'Business with Forklift',
		self::BUSINESS_NO_DOCK => 'Business without Dock or Forklift',
		self::RESIDENTIAL => 'Residential Area or Home Business',
		self::CONSTRUCTION_SITE => 'Construction Site',
		self::CARRIER_TERMINAL => 'Carrier Terminal',
	];
}
