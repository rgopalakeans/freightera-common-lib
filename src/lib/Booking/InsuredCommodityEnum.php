<?php

namespace Freightera\Common\Booking;

use Freightera\Common\Helpers\Enum;

class InsuredCommodityEnum extends Enum
{
    public const AIRCRAFT_PARTS = 'aircraft_parts';
    public const BEVERAGES_ALCOHOLIC_NO_TEMP_CONTROL = 'beverages_alcoholic_no_temp_control';
    public const BEVERAGES_NON_ALCOHOLIC_NO_TEMP_CONTROL = 'beverages_non_alcoholic_no_temp_control';
    public const BUILDING_MATERIALS = 'building_materials';
    public const CHEMICALS = 'chemicals';
    public const CLOTHING = 'clothing';
    public const ELECTRONICS_APPLIANCES = 'electronics_appliances';
    public const FLOWERS = 'flowers';
    public const FOODSTUFF_NO_TEMP_CONTROL = 'foodstuff_no_temp_control';
    public const FRUITS_AND_VEGETABLES = 'fruits_and_vegetables';
    public const FUEL_AND_PETROLEUM_BASED_ITEMS = 'fuel_and_petroleum_based_items';
    public const GLASS = 'glass';
    public const HOUSEHOLD_GOODS = 'household_goods';
    public const LEATHER_PRODUCTS = 'leather_products';
    public const LIVESTOCK = 'livestock';
    public const MACHINERY = 'machinery';
    public const MEDICAL_EQUIPMENT_AND_SUPPLIES = 'medical_equipment_and_supplies';
    public const METALS = 'metals';
    public const MINERALS = 'minerals';
    public const PACKAGING_MATERIALS = 'packaging_materials';
    public const PAPER_PRODUCTS = 'paper_products';
    public const PERSONAL_CARE = 'personal_care';
    public const PHARMACEUTICALS_NUTRACEUTICALS = 'pharmaceuticals_nutraceuticals';
    public const PLASTICS_AND_RUBBERS = 'plastics_and_rubbers';
    public const SPORTING_EQUIPMENT = 'sporting_equipment';
    public const TEXTILES = 'textiles';
    public const VEHICLE_VEHICLE_PARTS = 'vehicle_vehicle_parts';
    public const VESSEL_VESSEL_PARTS = 'vessel_vessel_parts';
    public const WEAPONS_NON_FIREARM_PARTS_AND_ACCESSORIES = 'weapons_non_firearm_parts_and_accessories';
    public const WOOD_MATERIALS = 'wood_materials';
    public const MISCELLANEOUS = 'miscellaneous';

	private function __construct()
	{
	}
}
