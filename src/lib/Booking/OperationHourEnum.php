<?php

namespace Freightera\Common\Booking;

use Freightera\Common\Helpers\Enum;

class OperationHourEnum extends Enum
{
    public const HR_12AM = '12AM';
    public const HR_1230AM = '1230AM';
    public const HR_1AM = '1AM';
    public const HR_130AM = '130AM';
    public const HR_2AM = '2AM';
    public const HR_230AM = '230AM';
    public const HR_3AM = '3AM';
    public const HR_330AM = '330AM';
    public const HR_4AM = '4AM';
    public const HR_430AM = '430AM';
    public const HR_5AM = '5AM';
    public const HR_530AM = '530AM';
    public const HR_6AM = '6AM';
    public const HR_630AM = '630AM';
    public const HR_7AM = '7AM';
    public const HR_730AM = '730AM';
    public const HR_8AM = '8AM';
    public const HR_830AM = '830AM';
    public const HR_9AM = '9AM';
    public const HR_930AM = '930AM';
    public const HR_10AM = '10AM';
    public const HR_1030AM = '1030AM';
    public const HR_11AM = '11AM';
    public const HR_1130AM = '1130AM';
    public const HR_12PM = '12PM';
    public const HR_1230PM = '1230PM';
    public const HR_1PM = '1PM';
    public const HR_130PM = '130PM';
    public const HR_2PM = '2PM';
    public const HR_230PM = '230PM';
    public const HR_3PM = '3PM';
    public const HR_330PM = '330PM';
    public const HR_4PM = '4PM';
    public const HR_430PM = '430PM';
    public const HR_5PM = '5PM';
    public const HR_530PM = '530PM';
    public const HR_6PM = '6PM';
    public const HR_630PM = '630PM';
    public const HR_7PM = '7PM';
    public const HR_730PM = '730PM';
    public const HR_8PM = '8PM';
    public const HR_830PM = '830PM';
    public const HR_9PM = '9PM';
    public const HR_930PM = '930PM';
    public const HR_10PM = '10PM';
    public const HR_1030PM = '1030PM';
    public const HR_11PM = '11PM';
    public const HR_1130PM = '1130PM';

	private function __construct()
	{
	}

	protected const _LABELS = [
		self::HR_12AM => '12:00 AM',
		self::HR_1230AM => '12:30 AM',
		self::HR_1AM => '1:00 AM',
		self::HR_130AM => '1:30 AM',
		self::HR_2AM => '2:00 AM',
		self::HR_230AM => '2:30 AM',
		self::HR_3AM => '3:00 AM',
		self::HR_330AM => '3:30 AM',
		self::HR_4AM => '4:00 AM',
		self::HR_430AM => '4:30 AM',
		self::HR_5AM => '5:00 AM',
		self::HR_530AM => '5:30 AM',
		self::HR_6AM => '6:00 AM',
		self::HR_630AM => '6:30 AM',
		self::HR_7AM => '7:00 AM',
		self::HR_730AM => '7:30 AM',
		self::HR_8AM => '8:00 AM',
		self::HR_830AM => '8:30 AM',
		self::HR_9AM => '9:00 AM',
		self::HR_930AM => '9:30 AM',
		self::HR_10AM => '10:00 AM',
		self::HR_1030AM => '10:30 AM',
		self::HR_11AM => '11:00 AM',
		self::HR_1130AM => '11:30 AM',
		self::HR_12PM => '12:00 PM',
		self::HR_1230PM => '12:30 PM',
		self::HR_1PM => '1:00 PM',
		self::HR_130PM => '1:30 PM',
		self::HR_2PM => '2:00 PM',
		self::HR_230PM => '2:30 PM',
		self::HR_3PM => '3:00 PM',
		self::HR_330PM => '3:30 PM',
		self::HR_4PM => '4:00 PM',
		self::HR_430PM => '4:30 PM',
		self::HR_5PM => '5:00 PM',
		self::HR_530PM => '5:30 PM',
		self::HR_6PM => '6:00 PM',
		self::HR_630PM => '6:30 PM',
		self::HR_7PM => '7:00 PM',
		self::HR_730PM => '7:30 PM',
		self::HR_8PM => '8:00 PM',
		self::HR_830PM => '8:30 PM',
		self::HR_9PM => '9:00 PM',
		self::HR_930PM => '9:30 PM',
		self::HR_10PM => '10:00 PM',
		self::HR_1030PM => '10:30 PM',
		self::HR_11PM => '11:00 PM',
		self::HR_1130PM => '11:30 PM',
	];
}
