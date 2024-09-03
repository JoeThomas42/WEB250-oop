<?php

class Bicycle {

	public $brand;
	public $model;
	public $year;
	public $description;
	public $weight_kg;

  // Using a constructor for easy object creation
	function __construct($brand, $model, $year, $weight_kg, $description = 'Used bicycle') {
    $this->brand = $brand;
    $this->model = $model;
    $this->year = $year;
    $this->weight_kg = $weight_kg;
    $this->description = $description;
	}

	function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
	}

	function weight_lbs() {
    return floatval($this->weight_kg) * 2.2046226218;
	}

	function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
	}

}

// New instances
$trek = new Bicycle(
  "Trek",
  "Emonda",
  "2017",
  1.0
);

$cd = new Bicycle(
  "Cannondale",
	"Synapse",
	"2016",
	8.0
);

// Display information
echo $trek->name() . "<br>";
echo $cd->name() . "<br>";

echo $trek->weight_kg . "<br>";
echo $trek->weight_lbs() . "<br>";

$trek->set_weight_lbs(2);
echo $trek->weight_kg . "<br>";
echo $trek->weight_lbs() . "<br>";
