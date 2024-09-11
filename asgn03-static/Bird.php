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
        return $this->flying == "yes" ? "can fly" : "is stuck on the ground";
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
