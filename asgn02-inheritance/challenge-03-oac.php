<?php

class bicycle {

  public $brand;
  public $model;
  public $year;
  public $description = 'Used bicycle';
  private $weightInKg = 0.0;
  protected $wheels = 2;

  public function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  public function wheels() {
    $wheel_string = $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels";
    return "It has " . $wheel_string . ".";
  }

  public function weightInKg() {
    return $this->weightInKg . ' kg';
  }

  public function setWeightInKg($value) {
    $this->weightInKg = floatval($value);
  }

  public function weightInLbs() {
    $weightInLbs = floatval($this->weightInKg) * 2.2046226218;
    return $weightInLbs . ' lbs';
  }

  public function set_weightInLbs($value) {
    $this->weightInKg = floatval($value) / 2.2046226218;
  }

}

class unicycle extends bicycle {
  protected $wheels = 1;

}

$trek = new bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';

$uni = new unicycle;

echo "Bicycle: " . $trek->wheels() . "<br>";
echo "Unicycle: " . $uni->wheels() . "<br><br>";

echo "Set weight using kg<br>";
$trek->setWeightInKg(1);
echo $trek->weightInKg() . "<br>";
echo $trek->weightInLbs() . "<br><br>";

echo "Set weight using lbs<br>";
$trek->set_weightInLbs(2);
echo $trek->weightInKg() . "<br>";
echo $trek->weightInLbs() . "<br><br>";
