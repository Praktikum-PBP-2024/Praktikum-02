<?php
// Data mahasiswa
$array_mhs = array(
    'Abdul' => array(89, 90, 54),
    'Budi' => array(98, 65, 74),
    'Nina' => array(67, 56, 84),
    'Budi' => array(87, 60, 50),
    'Budi' => array(98, 65, 74)
);

//menghitung rata-rata
function hitung_rata($array) {
    $jumlah_nilai = 0;
	$banyak_data = count($array);
	foreach ($array as $nilai) {
		$jumlah_nilai = $jumlah_nilai + $nilai;
	}

	return $jumlah_nilai / $banyak_data;
}

//menampilkan data mahasiswa
function print_mhs($array_mhs) {
	echo "<h2>Data Mahasiswa</h2>";
    echo "<table border='1'>";
    echo "<tr>
			<th>Nama</th>
			<th>Nilai 1</th>
			<th>Nilai 2</th>
			<th>Nilai 3</th>
			<th>Rata2</th>
		</tr>";
    
    foreach($array_mhs as $nama => $nilai) {
        echo "<tr>";
        echo "<td>" . $nama . "</td>";
        echo "<td>" . $nilai[0] . "</td>";
        echo "<td>" . $nilai[1] . "</td>";
        echo "<td>" . $nilai[2] . "</td>";
        echo "<td>" . hitung_rata($nilai) . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
}

//memanggil fungsi print_mhs untuk menampilkan data
print_mhs($array_mhs);