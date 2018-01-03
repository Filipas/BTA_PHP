<?php

class Mokinys 
{
    public $vardas;
    public $pavarde;
    public $gimimoData;
    public $data;
    public $resMetai;

    function __construct($vardas, $pavarde, $gimimoData){
        $this->vardas=$vardas;
        $this->pavarde=$pavarde;
        $this->gimimoData=$gimimoData;
    }

    function pilnasvardas () {
        return $this->vardas . ' ' . $this->pavarde;
    }
    function metai() {
        $data = new DateTime($this->gimimoData);
        $resMetai = date_diff($data, date_create());
        return $resMetai->y;
    }
}


$mokmasyvas = [
    new Mokinys("Vardenis", "Pavardenis", "2001-10-31"),
    new Mokinys("Vardenis1", "Pavardenis1", "1994-11-12"),
    new Mokinys("Vardenis2", "Pavardenis2", "1997-10-04"),
    new Mokinys("Vardenis3", "Pavardenis3", "1999-10-17")
];


echo '<table style="border: 1px solid black">';
echo '<tr>
       <th>Vardas Pavarde</th>
       <th>Metai</th>
       </tr>';
foreach ($mokmasyvas as $index) {
    if ($index->metai() >= 18) {
        echo '<tr>
            <td>'.$index->pilnasvardas().'</td>
            <td>'.$index->metai().'</td>
        </tr>';
    }
}
echo '</table>';
        
 ?>