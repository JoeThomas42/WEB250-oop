<?php

class Bird {
    protected $habitat;
    protected $food;
    protected $nesting = "tree";
    protected $conservation;
    protected $song = "chirp";
    protected $flying = "yes";

    public static $instanceCount = 0;
    public static $eggNum = 0;

    public function __construct() {
        self::$instanceCount++;
    }

    public static function create() {
        return new self();
    }

    public function canFly() {
        if ( $this->flying == "yes" ) {
            $flyingString = "can fly";
        } else {
            $flyingString = "is stuck on the ground";
        }
        return  $flyingString ;
    }
}

class YellowBelliedFlyCatcher extends Bird {
    public $name = "yellow-bellied flycatcher";
    public $diet = "mostly insects.";
    protected $song = "flat chilk";
}

class Kiwi extends Bird {
    public $name = "kiwi";
    public $diet = "omnivorous";
    protected $flying = "no";
}
