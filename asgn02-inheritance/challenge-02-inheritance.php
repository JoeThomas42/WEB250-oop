<?php

class employee {

  public $fName;
  public $lName;
  public $isManager = false;

  function fullName() {
    return $this->fName . " " . $this->lName;
  }
}

class hourly extends employee {

  public $wage;
  public $hoursPerWeek;

  function getWeeklyPay() {
    return $this->wage * $this->hoursPerWeek;
  }
}

class manager extends employee {

  public $isManager = true;
  public $department;
  public $salary;

  function fullName() {
    return $this->fName . " " . $this->lName . " - Manager";
  }
}

// new hourly employee
$emp1 = new hourly;
$emp1->fName = 'Bob';
$emp1->lName = 'Bobster';
$emp1->wage = 20.00;
$emp1->hoursPerWeek = 40;

echo $emp1->fullName() . '<br>';
echo "$" . $emp1->getWeeklyPay() . ' per week ' . '<br><br>';

// new manager employee
$emp2 = new manager;
$emp2->fName = 'Rob';
$emp2->lName = 'Robington';
$emp2->department = 'Electronics';
$emp2->salary = 55000;

echo $emp2->fullName() . '<br>';
echo "$" . $emp2->salary . ' per year ' . '<br><br>';

// testing
echo get_parent_class($emp1) . '<br>';
echo get_parent_class($emp2) . '<br>';

if(is_subclass_of($emp1, 'employee')) {
  echo "emp1 is a subclass of employee.<br>";
}
if(is_subclass_of($emp2, 'employee')) {
  echo "emp2 is a subclass of employee.<br>";
}
