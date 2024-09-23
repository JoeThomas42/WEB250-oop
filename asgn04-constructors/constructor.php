<?php

class Bird {
  public $commonName;
  public $latinName;

  public function __construct($commonName, $latinName) {
    $this->commonName = $commonName;
    $this->latinName = $latinName;
  }

  public function display() {
    echo "Common name: {$this->commonName}<br>";
    echo "Latin name: {$this->latinName}<br>";
  }
}

$bird1 = new Bird (
  "Robin",
  "Turdus Migratorius"
);

$bird2 = new Bird (
  "Eastern Towhee",
  "Pipilo Erythrophthalmus"
);

$bird1->display();
print "<hr>";
$bird2->display();
