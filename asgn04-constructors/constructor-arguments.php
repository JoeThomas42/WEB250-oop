<?php

class Bird {
  public $commonName;
  public $latinName;

  public function __construct(array $args = []) {
    $this->commonName = $args['commonName'] ?? 'Unknown';
    $this->latinName = $args['latinName'] ?? 'Unknown';
  }

  public function display() {
    echo "Common name: {$this->commonName}<br>";
    echo "Latin name: {$this->latinName}<br>";
  }
}

$bird1 = new Bird([
  'commonName' => 'Acadian Flycatcher',
  'latinName' => 'Empidonax Virescens'
]);

// Instance 2
$bird2 = new Bird([
  'commonName' => 'Eastern Towhee',
  'latinName' => 'Throyothorus Ludovicianus'
]);

$bird1->display();
echo "<hr>";
$bird2->display();
