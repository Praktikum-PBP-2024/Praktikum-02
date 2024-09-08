<?php

$array_mhs = array(
	'Abdul' => array(89,90,54),
	'Budi' => array(78, 60, 64),
	'Nina' => array(67, 56, 84),
	'Budi' => array(87, 69, 50),
	'Budi' => array(98, 65, 74)
);

function hitung_rata($array){
    $rata = 0;
    for ($i = 0; $i < count($array); $i++){
        $rata = $rata + $array[$i];
    }
    return $rata/count($array);
}

function print_mhs($array_mhs){
    echo '<table border="1">';
    echo '<tr>
    <td>Nama</td>
    <td>Nilai 1</td>
    <td>Nilai 2</td>
    <td>Nilai 3</td>
    <td>Nilai Rata2</td>
    </tr>';

    foreach ($array_mhs as $nama_mhs => $nilai){
        echo '<tr>';
        echo '<td>'.$nama_mhs.'</td>';

        for ($i = 0; $i < count($nilai); $i++){
            echo '<td>'.$nilai[$i].'</td>';
        }

        echo '<td>'.hitung_rata($nilai).'</td>';
        echo '</tr>';
    }

    echo '</table>';
}

print_mhs($array_mhs);
