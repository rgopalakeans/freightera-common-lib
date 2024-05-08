<?php

namespace Freightera\Common\Booking;

use Freightera\Common\Helpers\Enum;

class CancellationReason extends Enum
{
    public const PRICE_TOO_HIGH = 'price_too_high';
    public const CUSTOMER_CANCELLED_ORDER = 'customer_cancelled_order';
    public const SHIPMENT_NOT_READY = 'shipment_not_ready';
    public const SLOW_CARRIER_PICKUP = 'slow_carrier_pickup';
    public const SLOW_CARRIER_DELIVERY = 'slow_carrier_delivery';
    public const EXTRA_CHARGES = 'extra_charges';
    public const PREFER_NOT_TO_SAY = 'prefer_not_to_say';

	protected const _LABELS = [
		self::PRICE_TOO_HIGH => 'Found a lower price',
		self::CUSTOMER_CANCELLED_ORDER => 'My customer cancelled their order',
		self::SHIPMENT_NOT_READY => 'Shipment is not ready for pickup',
		self::SLOW_CARRIER_PICKUP => 'Not satisfied with carrier pickup speed',
		self::SLOW_CARRIER_DELIVERY => 'Not satisfied with carrier delivery speed',
		self::EXTRA_CHARGES => 'Extra charges',
		self::PREFER_NOT_TO_SAY => 'Prefer not to say',
	];

	private function __construct()
	{
	}
}
