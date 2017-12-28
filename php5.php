<?php 

/*
$mokiniai = [

    ["vardas" => "Jonas", "pazymiai" => [

        "lietuviu" => [4, 8, 6, 7], "anglu" => [6, 7, 8],
        "matematika" => [3, 5, 4]
        ]
    ],

    ["vardas" => "Ona", "pazymiai" => [

        "lietuviu" => [10, 9, 10], "anglu" => [9, 8, 10],
        "matematika" => [10, 10, 9, 9]
        ]
    ]

];



foreach ($mokiniai as $value) {
    echo '</br></br>'. $value ['vardas'] . '</br></br>';
        $bendrasVidurkis = 0;

    foreach ($value['pazymiai'] as $key => $value) {
        echo '</br>' . $key;
            $vid = 0;


        foreach ($value as $pazymys) {
            echo ' ' . $pazymys . '';
                $vid += $pazymys;
        }

    }
}


class Zmogus 
{
    public $vardas;
    public $pavarde;

    function pilnasVardas () {
        echo $this->vardas . ' ' . $this->pavarde;
    }
}

$jonas = new Zmogus;

$jonas ->vardas = 'Jonas';
$jonas ->pavarde = "Jonaitis";

'<br>';

$jonas->pilnasVardas();

var_dump ($jonas);



class automobilis 
{
    public $marke;
    public $modelis;

    function autoPavadinimas () {
        echo $this->marke . ' ' . $this->modelis;
    }
}


$auto = new automobilis;

$auto->marke ="Audi";
$auto->modelis ="A3";

$auto->autoPavadinimas();
*/

// class automobilis 
// {
//     public $marke;
//     public $modelis;

// function __construct($marke, $modelis){
//     $this->marke=$marke;
//     $this->modelis=$modelis;
// }


//     function autoPavadinimas () {
//         echo $this->marke . ' ' . $this->modelis;
//     }
// }


// $auto = new automobilis("Audi", "A3"); //daro tą patį, tik su skliaustais (iš construct))

// $auto->autoPavadinimas();

// //reikia paduoti tik duomenys be $, nes sukuriame objektą viduje.
// $automobiliai = [
//     new automobilis("Audi", "A3"),
//     new automobilis("Audi", "A5"),
//     new automobilis("Audi", "A4")


// ];

// foreach ($automobiliai as $value) {
//     $auto->autoPavadinimas();
//     echo '<br>';
// }


// //extends, kai reikia papildyti esančią klasę. Šiuo atveju, savininkas papildo automobilis papildoma reikšme - kuro tipu.

// class savininkas extends automobilis {
//     public $kuras;

//     function __construct($kuras, $marke, $modelis) {
//         parent::__construct($marke, $modelis);
//         $this->kuras=$kuras;
//     }

// function kuroInfo ()
// {
//     echo $this->kuras . ' ' . $this->autoPavadinimas ();
// }
// }

// $info3 = new savininkas ( "Benzinas", "Audi", "A3");
// $info3->kuroInfo();






class Mokinys 
{
    public $vardas;
    public $pavarde;

    function __construct($vardas, $pavarde){
        $this->vardas=$vardas;
        $this->pavarde=$pavarde;
    }

    function pilnasvardas () {
        echo $this->vardas . ' ' . $this->pavarde;
    }
}


$mok = new Mokinys ("Vardenis", "Pavardenis"); 
$mok->pilnasvardas();


$mokiniai = [
    new Mokinys("Vardenis", "Pavardenis"),
    new Mokinys("Vardenis", "Pavardenis"),
    new Mokinys("Vardenis", "Pavardenis")


];

foreach ($mokiniai as $value) {
    $mok->pilnasvardas();
    echo '<br>';
}