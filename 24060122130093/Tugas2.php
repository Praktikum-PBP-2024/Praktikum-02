<html>
    <head>
        <title>Tugas2</title>
    </head>
    <body>
        <?php
            $array_mhs = array(
                'Abdul' => array(89, 90, 54),
                'Budi' => array(78, 60, 64),
                'Nina' => array(67, 56, 84),
                'Budi' => array(87, 69, 50),
                'Budi' => array(98, 65, 74),
            );

            function hitung_rata($array) {
                $jml = 0;
                for ($i=0;$i<count($array);$i++){
                    $jml = $jml + $array[$i]; 
                }
                return $jml/count($array);
            }

            function print_mhs($array_mhs) {
                echo '<table border="1">';
                echo '<tr>
                        <td>Nama</td>
                        <td>Nilai 1</td>
                        <td>Nilai 2</td>
                        <td>Nilai 3</td>
                        <td>Rata-rata</td>
                    </tr>';
                foreach ($array_mhs as $nama => $nilai) {
                    echo '<tr>';
                        echo '<td>'.$nama.'</td>';
                    for ($i=0;$i<count($nilai);$i++){
                        echo '<td>'.$nilai[$i].'</td>';
                    }
                    echo '<td>'.hitung_rata($nilai).'</td>';
                    echo '</tr>';
                }
                echo '</table>';
            }
            print_mhs($array_mhs);
        ?>
    </body>
</html>
