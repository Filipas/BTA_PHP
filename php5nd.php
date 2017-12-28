<?php

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


class trimestras extends Mokinys {
    public $dalykas;
    public $pazymys;

    function __construct($dalykas, $pazymys, $vardas, $pavarde) {
        parent::__construct($vardas, $pavarde);
        $this->dalykas=$dalykas;
        $this->pazymys=$pazymys;
    }

function trimestrassupaz ()
{
    echo $this->pilnasvardas () . ' ' . $this->dalykas . ' ' . $this->pazymys;
}
}


// $info = new trimestras ("Lietuvių", "9", "Vardenis", "Pavardenis");
// $info->trimestrassupaz();


$mokmasyvas = [
    new trimestras("Lietuvių", "9", "Vardenis", "Pavardenis"),
    new trimestras("Lietuvių", "7", "Vardenis1", "Pavardenis1"),
    new trimestras("Lietuvių", "8", "Vardenis2", "Pavardenis2"),
    new trimestras("Lietuvių", "6", "Vardenis3", "Pavardenis3")
];



function object_to_array($data)
{
    if (is_array($data) || is_object($data))
    {
        $result = array();
        foreach ($data as $key => $value)
        {
            $result[$key] = object_to_array($value);
        }
        return $result;
    }
    return $data;
}

$galutinis = (object_to_array($mokmasyvas));

$pazymys = array();

foreach ($galutinis as $key => $row)
{
    $pazymys[$key] = $row['pazymys'];
}

array_multisort($pazymys, SORT_ASC, $galutinis);



// asort($galutinis);

// echo "<pre>";
// print_r ($galutinis);
// echo "</pre>";


echo "<table table border=1>";
echo "<caption>Trimestras</caption>";

  foreach ($galutinis as $row) {
    echo '<thead>';
    foreach ($row as $key=>$item) {
      echo "<th>{$key}</th>";
    }
    echo '</thead>';
    break;
  }

// echo "<thead><tr><th>Dalykas</th><th> Pazymys <th>Vardas</th><th>Pavarde</th></tr></thead>"; //th bold
// echo "<tfoot><tr><td>Dalykas</td><td> Pazymys <td>Vardas</td><td>Pavarde</td></tr></tfoot>"; //td ne bold

  foreach ($galutinis as $row) {
    echo '<tr>';
    foreach ($row as $item) {
      echo "<td>{$item}</td>";
    }
    echo '</tr>';
  }

echo "</table>";


//BANDYMAI

// echo build_table($galutinis);

// echo "<table border=1>";
// foreach($galutinis as $values)
// {
// implode($values);
// echo "<tr><td>";
// echo "$values";
// echo "</td></tr>";
// }


//    function build_table($array){
    
//     $html = '<table>';
//     $html .= '<tr>';

//     foreach($array[0] as $key=>$value){
//             $html .= '<th>' . htmlspecialchars($key) . '</th>';
            
//         }
//     $html .= '</tr>';

//     foreach( $array as $key=>$value){
//         $html .= '<tr>';
//         foreach($value as $key2=>$value2){
//             $html .= '<td>' . htmlspecialchars($value2) . '</td>';
//         }
//         $html .= '</tr>';
//     }

//     $html .= '</table>';
//     return $html;
// }


// echo build_table($galutinis);
?>