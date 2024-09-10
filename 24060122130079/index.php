<!-- Nama: Sultan Alamsyah Borneo Arifin
 	 NIM: 24060122130079 -->
<?php
 $array_mhs = array(
	'Abdul' => array(89,90,54),
	'Budi' => array(78, 60, 64),
	'Nina' => array(67, 56, 84),
	'Budi' => array(87, 69, 50),
	'Budi' => array(98, 65, 74)
);

function hitung_rata($array){
	$ratarata = 0;
	$jumlah_elemen = count($array);
	 for ($i = 0; $i < $jumlah_elemen; $i++) { 
		$ratarata += $array[$i];
	 }
	return $ratarata / $jumlah_elemen;
}

function print_mhs($array_mhs){

	$first_hasil = reset($array_mhs); // Mendapatkan nilai pertama dari $array_mhs
    $jumlah_nilai = count($first_hasil); // Hitung jumlah elemen dari array $hasil pertama
	echo '<table border="1">';
	echo '<tr>
	<td>Nama</td>';
	
	for ($i = 1; $i <= $jumlah_nilai; $i++) { 
		echo'<td>Nilai '.$i.'</td>';
	}

	echo '<td>Rata - Rata</td>
	</tr>';

	foreach ($array_mhs as $nama => $hasil) {
		echo '<tr>';
		echo '<td>'.$nama.'</td>';
		for ($i = 0; $i < count($hasil); $i++) { 
			echo '<td>'.$hasil[$i].'</td>';
		}
		echo '<td>'.hitung_rata($hasil).'</td>';
	}
	 
	echo '</table>';

}
print_mhs($array_mhs);

