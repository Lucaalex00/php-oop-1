<?php
require_once __DIR__ . './Production.php';
class TVserie extends Production {
    private $numSeasons;

    //CONSTRUCT 
    public function __construct($title, $lang, $vote, $genres, $numSeasons) {
        parent::__construct($title, $lang, $vote, $genres);
        $this->numSeasons = $numSeasons;
       
    }
    //SETTERS
    public function setValue($property, $val){
        $this->$property= $val;
    }
    //GETTERS
    public function getValue($val, $property){
        return $this->$val = $property;
    }
    public function getNumSeasons() {
        return $this->numSeasons;
    }
}

