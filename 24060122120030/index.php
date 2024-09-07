<?php

// Fungsi untuk menghitung rata-rata dari array nilai
function hitung_rata($array) {
    $jumlah = array_sum($array);
    $total_nilai = count($array);
    $rata_rata = $jumlah / $total_nilai;
    return $rata_rata;
}

// Fungsi untuk mencetak data mahasiswa dalam tabel
function print_mhs($array_mhs) {
    echo '<table border="1">';
    echo '<tr>
            <td>No</td>
            <td>Nama</td>
            <td>Nilai 1</td>
            <td>Nilai 2</td>
            <td>Nilai 3</td>
            <td>Rata-rata</td>
          </tr>';

    $no = 1;
    foreach ($array_mhs as $nama => $nilai) {
        // Menghitung rata-rata menggunakan fungsi hitung_rata
        $rata_rata = hitung_rata($nilai);
        // Menampilkan data mahasiswa dalam tabel
        echo '<tr>';
        echo '<td>'.$no.'</td>';
        echo '<td>'.$nama.'</td>';
        echo '<td>'.$nilai[0].'</td>';
        echo '<td>'.$nilai[1].'</td>';
        echo '<td>'.$nilai[2].'</td>';
        echo '<td>'.number_format($rata_rata, 2).'</td>';
        echo '</tr>';
        $no++;
    }

    echo '</table>';
}

// Array mahasiswa dengan data yang diberikan
$array_mhs = array(
    'Abdul' => array(89, 90, 54),
    'Budi' => array(78, 60, 64),
    'Nina' => array(67, 56, 84),
    'Budi' => array(87, 69, 50),
    'Budi' => array(98, 65, 74)
);

// Memanggil fungsi untuk mencetak data mahasiswa dalam tabel
print_mhs($array_mhs);
