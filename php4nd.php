<?php
/*
$zmones = [
["vardas" => "Jonas", "lytis" => "V"],
["vardas" => "Ona", "lytis" => "M"],
["vardas" => "Petras", "lytis" => "V"],
["vardas" => "Marytė", "lytis" => "M"],
["vardas" => "Eglė", "lytis" => "M"]
];


// var_dump ($zmones[0] ["lytis"]);

//1 užduotis

for($i = 0; $i < count($zmones); $i++) {
    for($j = 0; $j < count($zmones); $j++) { 
        if ($zmones[$i]['lytis'] == "V" && $zmones[$j]['lytis'] == "M") {
            echo $zmones[$i]['vardas'] .' '. $zmones[$j]['vardas']. '<br>';
        }
    };
};

*/

//2 užduotis

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


foreach ($mokiniai as $ind => $arr) {
    foreach ($arr["pazymiai"] as $dalykas => $pazymiai) {
            $vidurkiai[$arr["vardas"]][] = array_sum($pazymiai) / count($pazymiai);
    }
}

// print_r($vidurkiai);

foreach ($vidurkiai as $key => $value) {
    $vidurkis[$key] = array_sum($value)/count($value);
    // var_dump($value);
}

// var_dump ($vidurkis);
// for ($i=0; $i < count($vidurkis); $i++) { 
//     $vid = 0;
//     if (array_values($vidurkis[$i])[0] > $vid ) {
//       $vid[] = array_values($vidurkis[$i])[0];
//     } 
// }

$reiksme = 0;
$zmogus = "";
foreach ($vidurkis as $key => $value) {
        if ($reiksme < $value) {
            $reiksme = $value;
            $zmogus = $key;
        }
}

var_dump ($reiksme, $zmogus);

// echo round(max(array_values($vidurkis)), 1);

// $temp = array_values($vidurkis);

// for ($i=0; $i < count($temp); $i++) { 
//     $vid = 0;
//     if ($temp[$i] > $vid ) {
//       $vid = $temp[$i];
//     } 
// }

// echo $vid;

