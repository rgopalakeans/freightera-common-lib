<?php

namespace Freightera\Common\Rate;

use Freightera\Common\Helpers\Enum;

final class LaneTypeEnum extends Enum
{
    public const LTL = 'LTL';
	public const FTL = 'FTL';
	public const FLATBED = 'FLATBED';
	public const PARCEL = 'PARCEL';
	public const CONTAINER = 'CONTAINER';

	private function __construct()
	{
	}
}
