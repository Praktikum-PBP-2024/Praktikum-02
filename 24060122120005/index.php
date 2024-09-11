<!-- Nama : Aditya Haidar Faishal -->
<!-- NIM  : 24060122120005        -->
<!-- Lab  : PBP D2                -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel rata-rata Nilai</title>
</head>
<body>

<span>Nama_____: Aditya Haidar Faishal</span> </br>
<span>Nim______: 24060122120005</span> </br>
<span>Tanggal___: 10 September 2024</span> </br>
<span>Deskripsi__: Membuat tabel hitung rata-rata</span> </br>

<?php

// Fungsi untuk menghitung rata-rata
function hitung_rata($array) {
    $total = 0;
    $jumlah = count($array);
    
    // Menjumlahkan seluruh nilai
    foreach ($array as $nilai) {
        $total += $nilai;
    }
    
    // Menghitung rata-rata
    $rata_rata = $total / $jumlah;
    
    return $rata_rata;
}

// Fungsi untuk mencetak data mahasiswa dalam bentuk tabel
function print_mhs($array_mhs) {
    echo "<table border='1'>";
    echo "<tr>
            <th>Nama</th>
            <th>Nilai 1</th>
            <th>Nilai 2</th>
            <th>Nilai 3</th>
            <th>Rata-rata</th>
          </tr>";

    foreach ($array_mhs as $nama => $nilai) {
        echo "<tr>";
        echo "<td>" . $nama . "</td>";
        
        // Menampilkan nilai
        for ($i = 0; $i < count($nilai); $i++) {
            echo "<td>" . $nilai[$i] . "</td>";
        }
        
        // Menghitung rata-rata dengan menggunakan fungsi hitung_rata
        $rata_rata = hitung_rata($nilai);
        echo "<td>" . $rata_rata . "</td>";
        
        echo "</tr>";
    }

    echo "</table>";
}

// Array mahasiswa dengan nilai dari modul
$array_mhs = array(
    'Abdul' => array(89, 90, 54),
    'Budi' => array(98, 65, 74),
    'Nina' => array(67, 56, 84)
);

// Memanggil fungsi print_mhs untuk menampilkan tabel
print_mhs($array_mhs);

?>
</body>
</html>
