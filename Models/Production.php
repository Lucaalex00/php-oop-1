<?php
class Production{
    public $title;
    public $lang;
    public $vote;

    //Constructor
    public function __construct($title, $lang, $vote){
        $this->title=$title;
        $this->lang=$lang;
        $this->vote=$vote;
    }

    //GET PROPERTIES
    public function getTitle(){
        return $this->title;
    }
     public function getLang(){
        return $this->lang;
    }
     public function getVote(){
        return $this->vote;
    }
};