<!-- 
NAMA   : DIMAS YUDHA SAPUTRA
NIM    : 24060122120025
LAB    : D2
MATERI : SINTAKS DASAR PHP
TANGGAL: 07/09/2024
-->

<?php
	//fungsi untuk menghitung nilai rata-rata elemen array
	function hitung_rata($array){
		$n_nilai = 0;
		$jumlah_nilai_mhs = 0;
		foreach($array as $nilaimhs) {
			$jumlah_nilai_mhs += $nilaimhs;
			$n_nilai++;
		}
		// echo "nilai : $n_nilai <br />";
		$rata2 = ($jumlah_nilai_mhs) / ($n_nilai);
		return $rata2;
	}

	// fungsi untuk menampilkan data mahasiswa yang ada pada array_mhs
	function print_mhs($array_mhs){
		echo '<table border="1">';
		echo '<tr>
		<td>Nama</td>
		<td>Nilai 1</td>
		<td>Nilai 2</td>
		<td>Nilai 3</td>
		<td>Rata2</td>
		</tr>';
		foreach ($array_mhs as $nama => $nilai){
			$rata2 = hitung_rata($nilai);
			echo '<tr>';
            echo '<td>'.$nama.'</td>';
            echo '<td>'.$nilai[0].'</td>';
            echo '<td>'.$nilai[1].'</td>';
            echo '<td>'.$nilai[2].'</td>';
            echo '<td>'.$rata2.'</td>';
       		echo '</tr>';
		}
		echo '<table>';
	}

	//inputan data mahasiswa
	$array_mhs = array(
		'Abdul' => array(89, 90, 54),
		'Budi' => array(78, 60, 64),
		'Nina' => array(67, 56, 84),
		'Budi' => array(87, 69, 50),
		'Budi' => array(98, 65, 74)
	);

	// main 
	print_mhs($array_mhs);
?>