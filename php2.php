<?php
$vek1 = [5, 6, 10, 15];
$vek2 = [8, 5, 3, 25];

function skaliarineSandauga(array $var1, array $var2)
{
    $ats=0;
    for ($i=0; $i < count($var1) ; $i++) { 
        $ats += $var1[$i] * $var2[$i]; //$ats += sumuoja visus atsakymus į vieną kinramąjį 
    }
    return $ats;
}

$atsakymas = skaliarineSandauga($vek1, $vek2);
echo $atsakymas;


//Masyvai

array_push($vek1, 5); //prideda prie galo masyvo
var_dump($vek1);

array_unshift($vek1, 10); //pridėti priekį
var_dump ($vek1);

array_splice($vek1, 0, 1) // trinti iš pozicijos tikslios
;

//Pratimas


$duomenys = [
        [
            'Jonas',
            'Jonaitis',
            '39411548884'
        ]
];

$duomenys2 = [
        [
            'Ona',
            'Onaite',
            '4587789541'
        ]
];


var_dump($duomenys);
array_push($duomenys, $duomenys2[0]);


array_splice($duomenys, 1, 0, $duomenys2);
var_dump($duomenys);

array_unshift($duomenys, $duomenys2[0]);
var_dump($duomenys);


$masyvas = [

    1,
    1,
    1,
    1,
    9 => 1
];

$a =[
    10,
    20,
    30
];

$suma = 0;

foreach ($a as $value) {
    $suma += $value;
    }
'</br>';
// pratimas

$as = [
    '49001010123' => [
        'vardas' => 'Jonas',
        'pavarde' => 'Jonaitis',
        'data' => '1994-01-01'
    ], 
    '34502055584' => [
        'vardas' => 'Petras',
        'pavarde' => 'Petraitis',
        'data' => '1992-02-02'
    ],'69001010123' => [
        'vardas' => 'Ponas',
        'pavarde' => 'Ponaitis',
        'data' => '1994-01-01'
    ], 
    '54502055584' => [
        'vardas' => 'Metras',
        'pavarde' => 'Metraitis',
        'data' => '1992-02-02'
    ],
];


function updateArray (array $array){
foreach ($array as $key => $value) {
    if ($key[0] == 3) {
    unset($array [$key]);
}
return $array;
}

echo updateArray($as)

foreach ($array as $key => $value) {}
echo $value['vardas'] . '</br>'
}

updateArraty($a);



?>
