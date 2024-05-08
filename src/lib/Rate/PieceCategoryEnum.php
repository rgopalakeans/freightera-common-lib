<?php

namespace Freightera\Common\Rate;

use Freightera\Common\Helpers\Enum;

final class PieceCategoryEnum extends Enum
{
    public const SKIDS = 'skids';
    public const PIECES = 'pieces';
    public const CARTONS = 'cartons';
    public const BUNDLES = 'bundles';
    public const CRATE = 'crate';
    public const TOTES = 'totes';

	protected const _LABELS = [
		self::SKIDS => 'Pallets',
		self::PIECES => 'Pieces',
		self::CARTONS => 'Boxes',
		self::BUNDLES => 'Bundles',
		self::CRATE => 'Crate',
		self::TOTES => 'Totes',
	];

	private function __construct()
	{
	}
}
