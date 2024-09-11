<!-- Syntax dasar php -->
 <!-- 
Nama: Yahya Ilham Riyadi
NIM : 24060122130069
 -->

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntax Dasar PHP</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Tabel Nilai Mahasiswa</h1>


    <?php
    $array_mhs = array(
        'Abdul' => array(89,90,54),
        'Budi' => array(98, 65, 74),
        'Nina' => array(67, 56, 84)
    );

    // fungsi rata-rata
    function hitung_rataan($array) {
        $total = 0;
        $jumlah_nilai = count($array);
        
        foreach ($array as $nilai) {
            $total += $nilai;
        }
        
        return $total / $jumlah_nilai;
    }

    // print tabel mhs
    function print_mhs($array_mhs) {
        echo "<table>";
        echo "<tr>
                <th>Nama</th>
                <th>Nilai 1</th>
                <th>Nilai 2</th>
                <th>Nilai 3</th>
                <th>Rata-rata</th>
              </tr>";

        foreach ($array_mhs as $nama => $nilai) {
            $rata2 = hitung_rataan($nilai);
            echo "<tr>";
            echo "<td>$nama</td>";
            foreach ($nilai as $n) {
                echo "<td>$n</td>";
            }
            echo "<td>" . $rata2 . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }

    // Panggil fungsi untuk menampilkan tabel mahasiswa
    print_mhs($array_mhs);

    ?>
</body>
</html>

