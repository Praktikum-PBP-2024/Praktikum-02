<?php
/*Menghitung rata rata*/
function hitung_rata($array) {
    $total = array_sum($array);         // menjumlahkan nilai
    $rata = $total / sizeof($array);    // menghitung rata-rata
    return $rata;
}

/*Menampilkan data mahasiswa*/
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
        echo "<tr>
                <td>$nama</td>
                <td>{$nilai[0]}</td>
                <td>{$nilai[1]}</td>
                <td>{$nilai[2]}</td>";
        $rata2 = hitung_rata($nilai);
        echo "<td>$rata2</td>";
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
?>
