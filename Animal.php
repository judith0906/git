<?php
class Animal{

    public $name;
    public $species;

    public function __construct($name, $species)
    {
        $this->name = $name;
        $this->species = $species;
    }

    public function getInfo()
    {
        return "Name: " . $this->name . ", Species: " . $this->species;
    }
}
?>