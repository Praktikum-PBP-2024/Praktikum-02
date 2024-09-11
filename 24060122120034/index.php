<?php

$array_mhs = array('Abdul' => array(89,90,54),
 'Budi' => array(78,60,64),
 'Nina' => array(67,56,84),
 'Budi' => array(87,69,50),
 'Budi' => array(98,65,74)
);

function hitung_rata($array) {
    $jumlah = array_sum($array);
    $jumlah_elemen = count($array);
    return $jumlah / $jumlah_elemen;
}

function print_mhs($array_mhs) {
    echo "<table border='1'>";
    echo "<tr>
    <th>Nama</th>
    <th>Nilai 1</th>
    <th>Nilai 2</th>
    <th>Nilai 3</th>
    <th>Rata2</th>
    </tr>";

    foreach ($array_mhs as $nama => $nilai) {
        echo "<tr>";
        echo "<td>$nama</td>";
        foreach ($nilai as $nilai_individu) {
            echo "<td>$nilai_individu</td>";
        }

        $rata = hitung_rata($nilai);
        echo "<td>" . number_format($rata, 2) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}

print_mhs($array_mhs);