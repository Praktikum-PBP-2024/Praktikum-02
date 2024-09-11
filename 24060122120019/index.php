<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>

    <h2>Data Nilai Mahasiswa</h2>

    <?php
    // Fungsi untuk menghitung rata-rata nilai
    function hitung_rata($array) {
        $total = array_sum($array); // Menjumlahkan semua elemen dalam array
        $jumlah_nilai = count($array); // Menghitung jumlah elemen dalam array
        return $total / $jumlah_nilai; // Mengembalikan hasil rata-rata
    }

    // Fungsi untuk mencetak data mahasiswa dalam bentuk tabel
    function print_mhs($array_mhs) {
        echo "<table border='1' cellpadding='10' cellspacing='0'>";
        echo "<tr><th>Nama</th><th>Nilai 1</th><th>Nilai 2</th><th>Nilai 3</th><th>Rata2</th></tr>";
        
        foreach ($array_mhs as $nama => $nilai) {
            echo "<tr>";
            echo "<td>$nama</td>";
            echo "<td>{$nilai[0]}</td>";
            echo "<td>{$nilai[1]}</td>";
            echo "<td>{$nilai[2]}</td>";
            
            // Menggunakan fungsi hitung_rata untuk mendapatkan nilai rata-rata
            $rata2 = hitung_rata($nilai);
            echo "<td>" . number_format($rata2, 2) . "</td>"; // Format 2 angka desimal
            echo "</tr>";
        }
        
        echo "</table>";
    }

    // Array data mahasiswa
    $array_mhs = array(
        'Abdul' => array(89, 90, 54),
        'Budi' => array(98, 65, 74),
        'Nina' => array(67, 56, 84)
    );

    // Memanggil fungsi untuk mencetak data mahasiswa
    print_mhs($array_mhs);
    ?>

</body>
</html>
