<?php

namespace Classes;

class Converter
{

	/**
	 *	Fluid Ingredient Conversions
	 *	=================================================================================
	 */

	public function gal_to_liter($gal)
	{
		$liter = 3.8;

		if (is_numeric($gal)) {
			return number_format($gal * $liter, 2, '.', '');
		}

		if (preg_match('/(\d*)\s?(\d+)\/(\d+)/', $gal, $matches)) {
			return number_format(($matches[1] * $liter) + (($matches[2] / $matches[3]) * $liter), 2, '.', '');
		}

		return false;	
	}

	public function gal_to_oz($gal)
	{
		$oz = 128;

		if (is_numeric($gal)) {
			return number_format($gal * $oz, 2, '.', '');
		}

		if (preg_match('/(\d*)\s?(\d+)\/(\d+)/', $gal, $matches)) {
			return number_format(($matches[1] * $oz) + (($matches[2] / $matches[3]) * $oz), 2, '.', '');
		}

		return false;	
	}

	public function cup_to_oz($cup)
	{
		$oz = 8;

		if (is_numeric($cup)) {
			return number_format($cup * $oz, 2, '.', '');
		}

		if (preg_match('/(\d*)\s?(\d+)\/(\d+)/', $cup, $matches)) {
			return number_format(($matches[1] * $oz) + (($matches[2] / $matches[3]) * $oz), 2, '.', '');
		}

		return false;		
	}

	public function cup_to_g($cup)
	{
		$g = 230;

		if (is_numeric($cup)) {
			return number_format($cup * $g, 2, '.', '');
		}

		if (preg_match('/(\d*)\s?(\d+)\/(\d+)/', $cup, $matches)) {
			return number_format(($matches[1] * $g) + (($matches[2] / $matches[3]) * $g), 2, '.', '');
		}

		return false;
	}

	public function cup_to_ml($cup)
	{
		$ml = 240;

		if (is_numeric($cup)) {
			return number_format($cup * $ml, 2, '.', '');
		}

		if (preg_match('/(\d*)\s?(\d+)\/(\d+)/', $cup, $matches)) {
			return number_format(($matches[1] * $ml) + (($matches[2] / $matches[3]) * $ml), 2, '.', '');
		}

		return false;
	}

	public function oz_to_tbsp($oz)
	{
		$tbsp = 2;

		if (is_numeric($oz)) {
			return number_format($oz * $tbsp, 2, '.', '');
		}

		if (preg_match('/(\d*)\s?(\d+)\/(\d+)/', $oz, $matches)) {
			return number_format(($matches[1] * $tbsp) + (($matches[2] / $matches[3]) * $tbsp), 2, '.', '');
		}

		return false;
	}

	public function tbsp_to_tsp($tbsp)
	{
		$tsp = 3;

		if (is_numeric($tbsp)) {
			return number_format($tbsp * $tsp, 2, '.', '');
		}

		if (preg_match('/(\d*)\s?(\d+)\/(\d+)/', $tbsp, $matches)) {
			$whole_number = $matches[1] * $tsp;
			$numerator = $matches[2] * $tsp;
			$denominator = $matches[3];

			if ($numerator > $denominator) {
				$whole_number += floor($numerator/$denominator);
				$numerator = floor($numerator/$denominator);
			}

			return $whole_number . ' ' . $numerator .'/'.$denominator;
		}

		return false;
	}

	public function tsp_to_ml($tsp)
	{
		$ml = 5;

		if (is_numeric($tsp)) {
			return number_format($tsp * $ml, 2, '.', '');
		}

		if (preg_match('/(\d*)\s?(\d+)\/(\d+)/', $tsp, $matches)) {
			return number_format(($matches[1] * $ml) + (($matches[2] / $matches[3]) * $ml), 2, '.', '');
		}

		return false;
	}

	/**
	 *	Dry Ingredient Conversions
	 *	=================================================================================
	 */

	public function oz_to_g($oz)
	{
		$g = 30;

		if (is_numeric($oz)) {
			return number_format($oz * $g, 2, '.', '');
		}

		if (preg_match('/(\d*)\s?(\d+)\/(\d+)/', $oz, $matches)) {
			return number_format(($matches[1] * $g) + (($matches[2] / $matches[3]) * $g), 2, '.', '');
		}

		return false;
	}

	public function lb_to_g($lb)
	{
		$g = 454;

		if (is_numeric($lb)) {
			return number_format($lb * $g, 2, '.', '');
		}

		if (preg_match('/(\d*)\s?(\d+)\/(\d+)/', $lb, $matches)) {
			return number_format(($matches[1] * $g) + (($matches[2] / $matches[3]) * $g), 2, '.', '');
		}

		return false;
	}

	public function lb_to_oz($lb)
	{
		$oz = 16;

		if (is_numeric($lb)) {
			return number_format($lb * $oz, 2, '.', '');
		}

		if (preg_match('/(\d*)\s?(\d+)\/(\d+)/', $lb, $matches)) {
			return number_format(($matches[1] * $oz) + (($matches[2] / $matches[3]) * $oz), 2, '.', '');
		}

		return false;
	}

	public function kg_to_lb($kg)
	{
		$lb = 2.2;

		if (is_numeric($kg)) {
			return number_format($kg * $lb, 2, '.', '');
		}

		if (preg_match('/(\d*)\s?(\d+)\/(\d+)/', $kg, $matches)) {
			return number_format(($matches[1] * $lb) + (($matches[2] / $matches[3]) * $lb), 2, '.', '');
		}

		return false;
	}
}