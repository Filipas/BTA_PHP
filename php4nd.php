<?php

$zmones = [
["vardas" => "Jonas", "lytis" => "V"],
["vardas" => "Ona", "lytis" => "M"],
["vardas" => "Petras", "lytis" => "V"],
["vardas" => "Marytė", "lytis" => "M"],
["vardas" => "Eglė", "lytis" => "M"]
];


// var_dump ($zmones[0] ["lytis"]);


for($i = 0; $i < count($zmones); $i++) {
    for($j = 0; $j < count($zmones); $j++) { 
        if ($zmones[$i]['lytis'] == "V" && $zmones[$j]['lytis'] == "M") {
            echo $zmones[$i]['vardas'] .' '. $zmones[$j]['vardas']. '<br>';
        }
    };
};

