<?php

namespace Freightera\Common\Helpers;

/** Mock an enum for compatibility with PHP older versions */
abstract class Enum
{
	protected const _LABELS = [];

	public static function values(): array
	{
		$r = new \ReflectionClass(get_called_class());
		$values = [];
		foreach ($r->getConstants() as $key => $value) {
			if (mb_substr($key, 0, 1) !== '_') {
				$values[] = $value;
			}
		}
		return $values;
	}

	public static function commaSeparatedValues(): string
	{
		return join(',', self::values());
	}

	public static function labels(): array
	{
		$labels = static::_LABELS;
		foreach (self::values() as $value) {
			$label = static::_LABELS[$value] ?? null;
			if (is_null($label)) {
				$label = ucfirst(str_replace('_', ' ', $value));
			}
			$labels[$value] = $label;
		}
		return $labels;
	}

	public static function labelOf($value): string
	{
		$labels = self::labels();
		return $labels[$value];
	}
}
