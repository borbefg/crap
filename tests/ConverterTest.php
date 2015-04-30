<?php

use Classes\Converter;



class ConverterTest extends PHPUnit_Framework_TestCase
{
	private $converter;

	function __construct()
	{
		$this->converter = new Converter;
	}

	/**
	 *	Fluid Ingredient Conversions
	 *	=================================================================================
	 */

	public function testGallonsToLiters()
	{
		$this->assertFalse($this->converter->gal_to_liter('galL'));
		$this->assertEquals(3.8, $this->converter->gal_to_liter(1));
		$this->assertEquals(11.4, $this->converter->gal_to_liter(3));
		$this->assertNotEquals(31.8, $this->converter->gal_to_liter(8.5));
	}

	public function testGallonsToOunce()
	{
		$this->assertFalse($this->converter->gal_to_oz('galoz'));
		$this->assertEquals(128, $this->converter->gal_to_oz(1));
		$this->assertEquals(64, $this->converter->gal_to_oz(0.5));
		$this->assertEquals(64, $this->converter->gal_to_oz('1/2'));
		$this->assertEquals(192, $this->converter->gal_to_oz('1 1/2'));
		$this->assertNotEquals('1GB', $this->converter->gal_to_oz(8));
	}

	public function testCupsToOunce()
	{
		$this->assertFalse($this->converter->cup_to_oz('cupoz'));
		$this->assertEquals(8, $this->converter->cup_to_oz(1));
		$this->assertEquals(2, $this->converter->cup_to_oz(0.25));
		$this->assertEquals(2, $this->converter->cup_to_oz('1/4'));
		$this->assertEquals(12, $this->converter->cup_to_oz('1 1/2'));
		$this->assertNotEquals('Coke Sakto', $this->converter->cup_to_oz(16));
	}

	public function testCupsToGrams()
	{
		$this->assertFalse($this->converter->cup_to_g('cupg'));
		$this->assertEquals(230, $this->converter->cup_to_g(1));
		$this->assertEquals(345, $this->converter->cup_to_g('1 1/2'));
		$this->assertTrue($this->converter->cup_to_g(0.5) == $this->converter->cup_to_g('1/2'));
	}

	public function testCupsToMililiters()
	{
		$this->assertFalse($this->converter->cup_to_ml('cupmL'));
		$this->assertEquals(240, $this->converter->cup_to_ml(1));
		$this->assertEquals(360, $this->converter->cup_to_ml('1 1/2'));
		$this->assertTrue($this->converter->cup_to_ml(0.5) == $this->converter->cup_to_ml('1/2'));
	}

	public function testOunceToTablespoons()
	{
		$this->assertFalse($this->converter->oz_to_tbsp('oztbsp'));
		$this->assertEquals(2, $this->converter->oz_to_tbsp(1));
		$this->assertEquals(3, $this->converter->oz_to_tbsp('1 1/2'));
		$this->assertTrue($this->converter->oz_to_tbsp(0.5) == $this->converter->oz_to_tbsp('1/2'));
	}

	public function testTablespoonsToTeaspoons()
	{
		$this->assertFalse($this->converter->tbsp_to_tsp('tbsptsp'));
		$this->assertEquals(3, $this->converter->tbsp_to_tsp(1));
		$this->assertEquals('4 1/2', $this->converter->tbsp_to_tsp('1 1/2'));
		$this->assertEquals('1 1/2', $this->converter->tbsp_to_tsp('1/2'));
	}

	public function testTeaspoonsToMililiters()
	{
		$this->assertFalse($this->converter->tsp_to_ml('tspml'));
		$this->assertEquals(5, $this->converter->tsp_to_ml(1));
		$this->assertEquals(7.5, $this->converter->tsp_to_ml('1 1/2'));
		$this->assertTrue($this->converter->tsp_to_ml(0.5) == $this->converter->tsp_to_ml('1/2'));
	}

	/**
	 *	Dry Ingredient Conversions
	 *	=================================================================================
	 */

	public function testOunceToGrams()
	{
		$this->assertFalse($this->converter->oz_to_g('ozg'));
		$this->assertEquals(30, $this->converter->oz_to_g(1));
		$this->assertEquals(45, $this->converter->oz_to_g('1 1/2'));
		$this->assertTrue($this->converter->oz_to_g(0.5) == $this->converter->oz_to_g('1/2'));
	}

	public function testPoundsToGrams()
	{
		$this->assertFalse($this->converter->lb_to_g('lbsg'));
		$this->assertEquals(454, $this->converter->lb_to_g(1));
		$this->assertEquals(681, $this->converter->lb_to_g('1 1/2'));
		$this->assertTrue($this->converter->lb_to_g(0.5) == $this->converter->lb_to_g('1/2'));
	}

	public function testPoundsToOunce()
	{
		$this->assertFalse($this->converter->lb_to_oz('lboz'));
		$this->assertEquals(16, $this->converter->lb_to_oz(1));
		$this->assertEquals(24, $this->converter->lb_to_oz('1 1/2'));
		$this->assertTrue($this->converter->lb_to_oz(0.5) == $this->converter->lb_to_oz('1/2'));
	}

	public function testKilogramsToPounds()
	{
		$this->assertFalse($this->converter->kg_to_lb('kgld'));
		$this->assertEquals(2.2, $this->converter->kg_to_lb(1));
		$this->assertEquals(3.3, $this->converter->kg_to_lb('1 1/2'));
		$this->assertTrue($this->converter->kg_to_lb(0.5) == $this->converter->kg_to_lb('1/2'));
	}

}