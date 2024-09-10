<?php
$nama = "Rona Realita Najma";
$NIM = "24060122140124";
$Lab = "D2";
$Deskripsi = "TUGAS 2 PRAKTIKUM";

echo "Nama      : " . $nama . "<br>";
echo "Umur      : " . $NIM . "<br>";
echo "Lab       : " . $Lab . "<br>";
echo "Deskripsi : " . $Deskripsi . "<br><br>";

function hitung_rata($array) {
    $total = array_sum($array); 
    $jumlah_elmt = count($array);
    $avg = $total / $jumlah_elmt;
    return $avg;
}

function print_mhs($array_mhs) {
    echo "<table border='1' cellpadding='5'>";
    echo "<tr>
            <th>Nama</th>
            <th>Nilai 1</th>
            <th>Nilai 2</th>
            <th>Nilai 3</th>
            <th>Rata2</th>
          </tr>";


    foreach ($array_mhs as $nama => $nilai) {
        $avg = hitung_rata($nilai);

        echo "<tr>
                <td>$nama</td>
                <td>{$nilai[0]}</td>
                <td>{$nilai[1]}</td>
                <td>{$nilai[2]}</td>
                <td>$avg</td>
              </tr>";
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
