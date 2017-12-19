<?php

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



/*




<?php

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
*/