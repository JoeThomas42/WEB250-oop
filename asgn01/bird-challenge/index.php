<?php

class Bird {
    public $commonName;
    public $food = "bugs";
    public $nestPlacement = "tree";
    public $conservationLevel;
    public $song;
    public $canFly;

    // Constructor
    function __construct($commonName, $food, $nestPlacement, $conservationLevel, $song, $canFly) {
        $this->commonName = $commonName;
        $this->food = $food;
        $this->nestPlacement = $nestPlacement;
        $this->conservationLevel = $conservationLevel;
        $this->song = $song;
        $this->canFly = $canFly;
    }

    function song() {
        return $this->song;
    }

    function canFly() {
        return $this->canFly;
    }

    function displayInfo() {
        echo "<strong>Common Name:</strong> " . $this->commonName . "<br>";
        echo "<strong>Food:</strong> " . $this->food . "<br>";
        echo "<strong>Nest Placement:</strong> " . $this->nestPlacement . "<br>";
        echo "<strong>Conservation Level:</strong> " . $this->conservationLevel . "<br>";
    }
}

// New Instances
$bird1 = new Bird(
    "Eastern Towhee", 
    "seeds, fruits, insects, spiders", 
    "Ground", 
    "Low", 
    "drink-your-tea!", 
    "This bird can fly"
);

$bird2 = new Bird(
    "Indigo Bunting", 
    "seeds, berries, insects, bugs", 
    "roadsides, railroad right-of-wafields, edges of woods", 
    "Low", 
    "whatwhat!", 
    "This bird can fly"
);

// Display information
$bird1->displayInfo();
echo "<strong>Song:</strong> " . $bird1->song() . "<br>";
echo "<strong>Can Fly:</strong> " . $bird1->canFly() . "<br><br>";

$bird2->displayInfo();
echo "<strong>Song:</strong> " . $bird2->song() . "<br>";
echo "<strong>Can Fly:</strong> " . $bird2->canFly() . "<br><br>";
