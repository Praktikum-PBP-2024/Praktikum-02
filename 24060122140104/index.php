<html>
<head>
	<title>Hello World</title>
</head>
<body>
<?php
    $array_mhs = array(
        'Abdul' => array(89,90,54),
        'Budi' => array(78, 60, 64),
        'Nina' => array(67, 56, 84),
        'Budi' => array(87, 69, 50),
        'Budi' => array(98, 65, 74)
    );

    function print_mhs(&$array_mhs){
        echo "<table border=\"1\">";
        echo "<tr>
        <td>Nama</td>
        <td>Nilai 1</td>
        <td>Nilai 2</td>
        <td>Nilai 3</td>
        <td>Rata2</td>
        </tr>";

        foreach ($array_mhs as $key => $value){
            echo "<tr>
            <td>".$key."</td>
            <td>".$value[0]."</td>
            <td>".$value[1]."</td>
            <td>".$value[2]."</td>
            <td>".hitung_rata($value)."</td>
            </tr>";
        }
        echo "</table>";
    }

    function hitung_rata(&$array){
        $n = sizeof($array);
        $sum = 0;
        for ($i=0; $i<$n; $i++){
            $sum += $array[$i];
        }
        return $sum/$n;
    }

    print_mhs($array_mhs);

?>
</body>
</html>
