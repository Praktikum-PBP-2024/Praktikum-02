<?php

function hitungRata ($array_nilai){
    $total = 0;
    foreach ($array_nilai as $nilai){
        $total = $nilai + $total;
    }

    return $total/sizeof($array_nilai);

}

function printList ($array_nilai){

    foreach ($array_nilai as $nilai){
        echo '<td>'.$nilai.'</td>';
    }
    echo '<td>' .hitungRata($array_nilai). '</td>';

}

function print_mhs ($array_mhs){
    echo '<table border = " 1 "> ';
    echo '<tr>
    <td>Nama</td>
    <td>Nilai 1</td>
    <td>Nilai 2</td>
    <td>Nilai 3</td>
    <td>Rata-Rata</td>
    </tr>';

    foreach ($array_mhs as $mhs => $nilai){
        echo '<tr>';
        echo '<td>'.$mhs.'</td>';
        printList($nilai);
    
        echo '</tr>';
    }

}

$array_mhs = array(
	'Abdul' => array(89,90,54),
	'Budi' => array(78, 60, 64),
	'Nina' => array(67, 56, 84),
	'Budi' => array(87, 69, 50),
	'Budi' => array(98, 65, 74)
);


print_mhs($array_mhs);


