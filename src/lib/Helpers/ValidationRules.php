<?php

namespace Freightera\Common\Helpers;

use Closure;
use Freightera\Common\Rate\ProductClassUSAEnum;

final class ValidationRules
{
	public const PHONE_REGEX = "/^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$/";

	public const ALLOWED_EXTENSIONS = ['.png', '.jpg', '.doc', '.docx', '.pdf', '.xls', '.xlsx', '.tiff', '.csv'];
	// Laravel doc refer to https://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types
	public const ALLOWED_MIME_TYPES = ['png', 'jpg', 'jpeg', 'doc', 'docx', 'pdf', 'xls', 'xlsx', 'tif', 'tiff', 'csv'];

	private function __construct()
	{
	}

	public static function phone(string $phone, Closure $fail): void
	{
		if (preg_match(self::PHONE_REGEX, $phone) == false) {
			$fail('The :attribute is not a valid phone number');
		}
	}

	public static function productClassUSA(string $pickupCountry, string $destinationCountry, ?string $productClassUSA, Closure $fail): void
	{
		if (empty($productClassUSA)) {
			if (in_array('US', [$pickupCountry, $destinationCountry])) {
				$fail('The :attribute field is required when PickUp or Destination Country is US.');
			}
		} else {
			if (!is_string($productClassUSA)) {
				$fail('The :attribute field must be a string.');
			} elseif (!in_array($productClassUSA, ProductClassUSAEnum::values())) {
				$fail(sprintf('The :attribute field must be a valid value in %s.', ProductClassUSAEnum::commaSeparatedValues()));
			}
		}
	}

	public static function fileExtension(string $clientOriginalFileName, Closure $fail): void
	{
		$extension = strtolower(strrchr($clientOriginalFileName, '.'));
		if (!in_array($extension, self::ALLOWED_EXTENSIONS)) {
			$fail('The :attribute is not a valid extension. Only files with the following types extensions are allowed: ' . implode(', ', self::ALLOWED_EXTENSIONS));
		}
	}
}