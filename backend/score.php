<?php

class Score {
    private $name;
    private $score;

    public function __construct($name, $score){
        $this->name = $name;
        $this->score = $score;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setScore($score){
        $this->score = $score;
    }

    public function getScore(){
        return $this->score;
    }
}