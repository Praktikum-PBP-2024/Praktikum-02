<!-- Nama   : Muflih Muhammad Imaduddin -->
<!-- NIM    : 24060122140103 -->

<?php
    $array_mhs = array(
        'Abdul' => array(89, 90, 54),
        'Budi' => array(78, 60, 64),
        'Nina' => array(67, 56, 84),
        'Budi' => array(87, 69, 50),
        'Budi' => array(98, 65, 74)
    );

    function hitung_rata($array) {
        $rata_rata = 0;
        foreach($array as $nilai) {
            $rata_rata += $nilai;
        }
        return $rata_rata / count($array);
    }

    function print_mhs($array_mhs) {
        foreach($array_mhs as $nama => $nilai) {
            echo "<tr>";
            echo "<td>".$nama."</td>";
            echo "<td>".$nilai[0]."</td>";
            echo "<td>".$nilai[1]."</td>";
            echo "<td>".$nilai[2]."</td>";
            echo "<td>".hitung_rata($nilai)."</td>";
            echo "</tr>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>Nilai 1</td>
            <td>Nilai 2</td>
            <td>Nilai 3</td>
            <td>Rata2</td>
        </tr>
        <?php
            print_mhs($array_mhs);
        ?>
    </table>
</body>
</html>
