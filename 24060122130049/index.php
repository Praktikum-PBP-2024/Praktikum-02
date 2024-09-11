<!-- Syakira Nada Nirwana -->
<!-- 24060122130049 -->
<!-- Lab D2 PBP -->

<?php
function hitung_rata($array){
    $total = 0;
    foreach($array as $nilai){
        $total += $nilai;
    }
    return $total / count($array);
}

function print_mhs($array_mhs){
    echo '<table border="1">';
    echo 
    '<tr>
        <th>Nama</th>
        <th>Nilai 1</th>
        <th>Nilai 2</th>
        <th>Nilai 3</th>
        <th>Rata2</th>
    </tr>';

    foreach($array_mhs as $nama => $nilai){
        echo '<tr>';
        echo '<td>'.$nama.'</td>';
        echo '<td>'.$nilai[0].'</td>';
        echo '<td>'.$nilai[1].'</td>';
        echo '<td>'.$nilai[2].'</td>';
        echo '<td>'.hitung_rata($nilai).'</td>';
        echo '</tr>';
    }
    echo '</table>';
}

$array_mhs = array(
  'Abdul' => array(89, 90, 54),
	'Budi' => array(78, 60, 64),
	'Nina' => array(67, 56, 84),
	'Budi' => array(87, 69, 50),
	'Budi' => array(98, 65, 74)
);

print_mhs($array_mhs);
?>
