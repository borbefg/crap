<?php

use Classes\Recipe;
use Faker\Factory;

class RecipeTest extends PHPUnit_Framework_TestCase
{
    private $recipe;
    private $faker;

    function __construct()
    {
        $this->faker = Faker\Factory::create();
        $this->recipe = new Recipe($this->faker->name, $this->faker->sentence);
    }

    public function testIngredients()
    {   
        $ingredients = $this->recipe->getIngredients();
        $this->assertInternalType('array', $ingredients);
        $this->assertEmpty($ingredients);

        $ingredients = [
            '1/2 cup ' . $this->faker->word,
            '1 1/2 cup ' . $this->faker->word,
            '2 tablespoon ' . $this->faker->word . ' ' . $this->faker->word,
            '30 grams ' . $this->faker->word
        ];
        $this->recipe->setIngredients($ingredients);

        $ingredients = $this->recipe->getIngredients();
        $this->assertNotEmpty($ingredients);
        $ingredients = $ingredients[3];
        $this->assertEquals('30', $ingredients['amount']);
        $this->assertEquals('grams', $ingredients['unit']);
    }

    public function testProcedure()
    {
        $procedure = $this->recipe->getProcedure();
        $this->assertInternalType('array', $procedure);
        $this->assertEmpty($procedure);

        $procedure = [
            $this->faker->sentence,
            $this->faker->sentence,
            $this->faker->sentence
        ];
        $this->recipe->setProcedure($procedure);

        $this->assertNotEmpty($this->recipe->getProcedure());
    }

}
