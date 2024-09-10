<!-- 
nama : Muhammad Fakhrell Andreaz
nim : 24060122140042
tugas : praktikum 2 
-->

<?php
 
function hitung_rata($arr) {
    
    $n = sizeof($arr);
    $rt = 0;

	for ($i = 0; $i < $n; $i++){
        $rt = $rt + $arr[$i];
    }

    return $rt/$n;
}

function print_mhs($array_mhs) {

    $l = sizeof($array_mhs['Abdul']);

    echo "<table> <tr>";
    echo "<td> nama </td>";
    for ($i = 1; $i <= $l; $i++) {
        echo '<td> nilai ' .$i. '</td>';
    }

    echo "<td> Rata2 </td>";
    echo "</tr>";


    foreach($array_mhs as $nama => $nilai){
        echo "<tr><td>" .$nama. "</td>";

        for ($i = 0; $i < $l; $i++) {
            echo "<td>" .$nilai[$i]. "</td>";
        }
        $rata = hitung_rata($array_mhs[$nama]);
        echo "<td>" .$rata. "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

$array_mhs = array(
	'Abdul' => array(89,90,54),
	'Budi' => array(78, 60, 64),
	'Nina' => array(67, 56, 84),
	'Budi' => array(87, 69, 50),
	'Budi' => array(98, 65, 74)
);

print_mhs($array_mhs);

