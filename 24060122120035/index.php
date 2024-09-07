<!-- Nama : Abdul Majid -->
<!-- NIM  : 24060122120035 -->
<?php
function hitung_rata($array) {
    if (count($array) === 0) {
        return 0;
    }
    $total = array_sum($array);
    $jumlahElemen = count($array);
    $rataRata = $total / $jumlahElemen;
    return $rataRata;
}

function print_mhs($array) {
    echo '<table border="1" >';
    echo '<tr>';
    echo '<td>Nama</td>';
    
    $max_nilai_count = max(array_map('count', $array));
    for ($i = 1; $i <= $max_nilai_count; $i++) {
        echo '<td>Nilai ' . $i . '</td>';
    }
    echo '<td>Rata2</td>';
    echo '</tr>';
    
    foreach ($array as $key => $value) {
        echo '<tr>';
        echo '<td>' . $key . '</td>';
        
        for ($i = 0; $i < $max_nilai_count; $i++) {
            echo '<td>' . (isset($value[$i]) ? $value[$i] : '') . '</td>';
        }
        echo '<td>' .number_format(hitung_rata($value),2)  . '</td>';
        echo '</tr>';
    }
    
    echo '</table>';
}
$array_mhs = array(
    'Abdul' => array(89, 90, 68),
    'Budi' => array(78, 60, 64),
    'Nina' => array(67, 56, 84),
    'Cindy' => array(87, 69, 50 ),
    'Dedi' => array(98, 65, 74 ),
    'Edi' => array(98, 65, 74 )
);
print_mhs($array_mhs);


