<?php
/*
$a = [
    'Jonas',
    'Petras',
    'Antanas',
    'Povilas'
];

for ($i=0; $i < 4; $i++) { 
    for ($j=$i; $j < 4 ; $j++) { 
        if ($j <= 2) {
            if ($i != $j+1 ) {
                echo $a[$i];
                echo " - ";
                echo $a[$j+1];
                echo '</br>';
            }
               
        }
    }  
}

'</br>';

//Visos poros

$a = [
    'Jonas',
    'Petras',
    'Antanas',
    'Povilas'
];

for ($i=0; $i < 4; $i++) { 
    for ($j=0; $j < 4 ; $j++) { 
        if ($j <= 2) {
            echo $a[$i];
            echo " - ";
            echo $a[$j+1];
            echo '</br>';   
        }
    }  
}


'</br>';
*/


$a = [
        [1, 3, 4], 
        [2, 5], 
        [2 => 3, 5 => 8], 
        [1, 1, 5 => 1]
];

$suma = 0;
$sumaMas = [];
foreach($a as $key1 => $aa) {
    foreach($aa as $key2 => $value) {
        $suma = $suma + $value;
    }
    $sumaMas[$key1] = $suma;
    $suma = 0;
}

var_dump ($sumaMas);