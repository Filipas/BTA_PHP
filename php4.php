<?php
/*
if ($i == 0):
    $nulis++;
elseif ($i % 2 == 0):
    $lyginiai++;
else:
    $nelyginiai++;
endif;

'</br>';



function kintamojoTipas($variable) {
   $type = gettype ($variable);
    switch ($type) {
    case ('string'):
        echo "Šis kintamasis yra string: " . $variable;
        break;
    case ('integer'):
        echo "Šis kintamasis yra integer: " . $variable;
        break;
    case ('boolean'):
        echo "Šis kintamasis yra string: " . $variable;
        break;
    case ('boolean'):
        echo "Šis kintamasis yra string: " . $variable;
        break;    
        default :
        echo 'Nera tipo';
}
}
echo kintamojoTipas('labas');


//Būdas su for

$array = [
    4, 2, 2, 0, 1, 2, 3, -1, -2
];

function lygArNe($array) {
$sum = 0;
    for ($i=0; $i < count ($array) ; $i++) { 
        if ($array[$i] % 2 == 0) {
        $sum += $array[$i];
} else {
     break;
}
}
return $sum;   
};

echo lygArNe ($array);

'</br'>
//Būdas su foreach

function lygarnelyg ($param) {
    $sum = 0;
    foreach ($param as $value) {
        if ($value % 2 != 0) {
            break;
        }

        $sum += $value;
    }
    return $sum;
}

echo lyginiuSuma($array);


$array = [
    1, 2, -5, -6, 4, 7
];

function lyginiaiPradzioje ($array) {
    foreach ($array as $value) {
        if ($value < 0) {
            continue;
        }
        else
        array_splice ($array, 0, $value);
        return $array;

    }
}

var_dump (lyginiaiPradzioje($array));
*/

define ("br" '</br>');


