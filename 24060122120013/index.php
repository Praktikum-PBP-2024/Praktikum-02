<!-- Nama : Rania 
     NIM : 24060122120013 
     Lab D2 PBP  -->

<?php
//Fungsi untuk menghitung rata-rata nilai mahasiswa
function hitung_rata($array) {
    $n = sizeof($array);
    $total = 0;

    for ($i = 0; $i < $n; $i++) {
        $total = $total + $array[$i];
    }

    $rata = $total / $n;
    return $rata;
}

//Data array mahasiswa adalah sebagai berikut:
$array_mhs = array(
    'Abdul' => array(89, 90, 54),
    'Budi' => array(78, 60, 64),
    'Nina' => array(67, 56, 84),
    'Budi' => array(87, 69, 50),
    'Budi' => array(98, 65, 74)
);

//Fungsi untuk mencetak tabel nilai mahasiswa
function print_mhs($array_mhs) {
    echo "<style>
            th, td {
                text-align: center;
            }
        </style>";
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nama</th><th>Nilai 1</th><th>Nilai 2</th><th>Nilai 3</th><th>Rata2</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    foreach ($array_mhs as $nama => $nilai) {
        $rata2 = hitung_rata($nilai);
        echo "<tr>";
        echo "<td>$nama</td>";  
        echo "<td>{$nilai[0]}</td>"; 
        echo "<td>{$nilai[1]}</td>"; 
        echo "<td>{$nilai[2]}</td>"; 
        echo "<td>$rata2</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
}

//Memanggil fungsi print_mhs untuk mencetak tabel
print_mhs($array_mhs);
?>
