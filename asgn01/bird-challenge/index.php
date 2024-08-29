<?php

class Bird {
    public $commonName;
    public $food = "bugs";
    public $nestPlacement = "tree";
    public $conservationLevel;
    private $song;
    private $canFly;

    // Constructor to initialize properties including song and canFly
    public function __construct($commonName, $food, $nestPlacement, $conservationLevel, $song, $canFly) {
        $this->commonName = $commonName;
        $this->food = $food;
        $this->nestPlacement = $nestPlacement;
        $this->conservationLevel = $conservationLevel;
        $this->song = $song;
        $this->canFly = $canFly;
    }

    // Method to return the bird's song
    public function song() {
        return $this->song;
    }

    // Method to return the bird's flight ability
    public function canFly() {
        return $this->canFly;
    }

    // Method to display bird information
    public function displayInfo() {
        echo "Common Name: " . $this->commonName . "<br>";
        echo "Food: " . $this->food . "<br>";
        echo "Nest Placement: " . $this->nestPlacement . "<br>";
        echo "Conservation Level: " . $this->conservationLevel . "<br>";
    }
}

// New Instance
$bird1 = new Bird(
    "Eastern Towhee", 
    "seeds, fruits, insects, spiders", 
    "Ground", 
    "Low", 
    "drink-your-tea!", 
    "This bird can fly"
);

// Display information
$bird1->displayInfo();

// Display song and flight ability
echo "Song: " . $bird1->song() . "<br>";
echo "Can Fly: " . $bird1->canFly() . "<br>";

?>
