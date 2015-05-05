<?php

namespace Classes;

class Recipe
{
    private $name;
    private $description;
    private $ingredients;
    private $procedure;

    function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
        $this->ingredients = array();
        $this->procedure = array();
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setIngredients($ingredients)
    {
        foreach ($ingredients as $ingredient) {
            preg_match('/(\d*\s?\d\/\d||\d*)\s(\w*)\s([\w\s]*)/', $ingredient, $matches);
            $this->ingredients[] = array(
                    'amount' => $matches[1],
                    'unit' => $matches[2],
                    'ingredient' => $matches[3]
                );
        }
    }

    public function setProcedure($procedure)
    {
        $this->procedure = $procedure;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function getProcedure()
    {
        return $this->procedure;
    }

}