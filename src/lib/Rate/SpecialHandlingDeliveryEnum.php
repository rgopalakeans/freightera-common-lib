<?php

namespace Freightera\Common\Rate;

use Freightera\Common\Helpers\Enum;
use RuntimeException;

final class SpecialHandlingDeliveryEnum extends Enum
{
	public const LIMITED_ACCESS = 'Limited_Access';
	public const AMAZON = 'Amazon';
	public const APPOINTMENT_TIME = 'AppointmentTime';
	public const INSIDE = 'Inside';
	public const JIGGER_PALLET_JACK = 'Jigger_PalletJack';
	public const TAILGATE = 'Tailgate';
	public const STRAIGHT_TRUCK = 'ST';
	public const TRADE_SHOW = 'TradeShow';

	protected const _LABELS = [
		self::LIMITED_ACCESS => 'Limited Access*',
		self::AMAZON => 'Amazon',
		self::APPOINTMENT_TIME => 'Delivery by Appointment',
		self::INSIDE => 'Inside Delivery (Ground Floor)',
		self::JIGGER_PALLET_JACK => 'Jigger / Pallet Jack',
		self::TAILGATE => 'Tailgate / Liftgate',
		self::STRAIGHT_TRUCK => 'Straight Truck',
		self::TRADE_SHOW => 'Trade Show',
	];

	private function __construct()
	{
	}

	private static function valuesByLocationTypeForLTL(string $locationType): array
	{
		switch ($locationType) {
			case LocationTypeEnum::BUSINESS:
				return [
                    self::LIMITED_ACCESS,
                    self::AMAZON,
                    self::APPOINTMENT_TIME,
                    self::INSIDE,
                    self::TAILGATE,
                    self::JIGGER_PALLET_JACK,
                    self::STRAIGHT_TRUCK,
                    self::TRADE_SHOW,
                ];
			case LocationTypeEnum::BUSINESS_NO_DOCK:
                return [
                    self::LIMITED_ACCESS,
                    self::AMAZON,
                    self::APPOINTMENT_TIME,
                    self::INSIDE,
                    self::JIGGER_PALLET_JACK,
                    self::TAILGATE,
                    self::STRAIGHT_TRUCK,
                    self::TRADE_SHOW,
                ];
			case LocationTypeEnum::RESIDENTIAL:
				return [
					self::APPOINTMENT_TIME,
					self::INSIDE,
					self::JIGGER_PALLET_JACK,
					self::TAILGATE,
					self::STRAIGHT_TRUCK,
				];
			case LocationTypeEnum::CONSTRUCTION_SITE:
				return [
					self::APPOINTMENT_TIME,
					self::JIGGER_PALLET_JACK,
					self::TAILGATE,
					self::STRAIGHT_TRUCK,
				];
			case LocationTypeEnum::CARRIER_TERMINAL:
			default:
                return [];
		}
	}
	public static function valuesByLaneAndLocationType(string $laneType, string $locationType): array
	{
		switch ($laneType) {
			case LaneTypeEnum::LTL:
				return self::valuesByLocationTypeForLTL($locationType);
			default:
				return [];
		}
	}
}
