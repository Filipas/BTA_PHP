<?php

class Radar {
    public $date;
    public $number;
    public $distance;
    public $time;
    public $speed;

function __construct($date, $number, $distance, $time){
    $this->date=$date;
    $this->number=$number;
    $this->distance=$distance;
    $this->time=$time;
}

// function radaras(){
//     echo $this->date . ' ' . $this->number . ' ' . $this->distance . ' ' . $this->time;
// }

function speedMeasure() {
    return $speed = (($this->distance / 1000) / ($this->time / 3600));
}

};

$automobiliai = [
    new Radar(new DateTime('2017-11-27'), 'AAA111', 1000, 20), 
    new Radar(new DateTime('2017-11-27'), 'AAA222', 1000, 25), 
    new Radar(new DateTime('2017-11-27'), 'AAA333', 1000, 30), 
    new Radar(new DateTime('2017-11-27'), 'AAA444', 1000, 40), 
];


foreach ($automobiliai as $value) {
            echo 'Automobilio numeris: ' . $value->number.' Greitis: '. $value->speedMeasure() . ' km/h' . '<br>';
        }
       
