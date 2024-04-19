<?php
require_once __DIR__ . './Production.php';
class Movie extends Production {
    private $profits;
    private $duration;

    //CONSTRUCT 
    public function __construct($title, $lang, $vote, $genres, $profits, $duration) {
        parent::__construct($title, $lang, $vote, $genres);
        $this->profits = $profits;
        $this->duration = $duration;
    }
    //SETTERS
    public function setValue($property, $val){
        $this->$property= $val;
    }
    //GETTERS
    public function getValue($val, $property){
        return $this->$val = $property;
    }
    public function getProfits() {
        return $this->profits;
    }
    public function getDuration() {
        return $this->duration;
    }
}

