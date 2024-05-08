<?php

namespace Freightera\Common\Rate;

use Freightera\Common\Helpers\Enum;
use RuntimeException;

final class SpecialHandlingPickupEnum extends Enum
{
	public const LIMITED_ACCESS = 'Limited_Access';
	public const INSIDE = 'Inside';
	public const JIGGER_PALLET_JACK = 'Jigger_PalletJack';
	public const TAILGATE = 'Tailgate';
	public const STRAIGHT_TRUCK = 'ST';
	public const TRADE_SHOW = 'TradeShow';
    public const PEER_PASS_FEE = 'PPF';

	protected const _LABELS = [
		self::LIMITED_ACCESS => 'Limited Access*',
		self::INSIDE => 'Inside Pickup (Ground Floor)',
		self::JIGGER_PALLET_JACK => 'Jigger / Pallet Jack',
		self::TAILGATE => 'Tailgate / Liftgate',
		self::STRAIGHT_TRUCK => 'Straight Truck',
		self::TRADE_SHOW => 'Trade Show',
        self::PEER_PASS_FEE => 'Peer pass fee',
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
                    self::INSIDE,
                    self::JIGGER_PALLET_JACK,
                    self::TAILGATE,
                    self::STRAIGHT_TRUCK,
                    self::TRADE_SHOW,
                    self::PEER_PASS_FEE,
                ];
			case LocationTypeEnum::BUSINESS_NO_DOCK:
                return [
                    self::LIMITED_ACCESS,
                    self::INSIDE,
                    self::JIGGER_PALLET_JACK,
                    self::TAILGATE,
                    self::STRAIGHT_TRUCK,
                    self::TRADE_SHOW,
                    self::PEER_PASS_FEE,
                ];
			case LocationTypeEnum::RESIDENTIAL:
				return [
					self::INSIDE,
					self::JIGGER_PALLET_JACK,
					self::TAILGATE,
                    self::STRAIGHT_TRUCK,
                    self::PEER_PASS_FEE,
				];
			case LocationTypeEnum::CONSTRUCTION_SITE:
				return [
                    self::JIGGER_PALLET_JACK,
					self::TAILGATE,
					self::STRAIGHT_TRUCK,
                    self::PEER_PASS_FEE,
				];
			case LocationTypeEnum::CARRIER_TERMINAL:
				return [
                    self::PEER_PASS_FEE,
                ];
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
