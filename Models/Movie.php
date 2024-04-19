<?php
require_once __DIR__ . './Production.php';
class Movie extends Production{
    public $profits;
    public $duration;

    //constructor
    public function __construct(int $profits, int $duration){
        $this->profits=$profits;
        $this->duration=$duration;
    }
    //SETTERS
    public function setValue($property, $val){
        $this->$property= $val;
    }
    //GETTERS
    public function getValue($val, $property){
        return $this->$val = $property;
    }
}

