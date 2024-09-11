<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
        $array_mhs = array(
            'Abdul' => array(89,90,54),
            'Budi' => array(78,60,64),
            'Nina' => array(67,56,84),
            'Budi' => array(87,69,50),
            'Budi' => array(98,65,74)
        );

        function print_mhs(){
            global $array_mhs;
                
            foreach ($array_mhs as $nama => $nilai) {
                // Nilai
                $nilaiHtml = '';
                foreach ($nilai as $n) {
                    $nilaiHtml .= "<td>$n</td>";
                }

                // Rata
                $rata = hitung_rata($nilai);
                
                // Print
                echo "<tr>
                    <td>$nama</td>
                    $nilaiHtml
                    <td>$rata</td>
                </tr>";
            }  
        }

        function hitung_rata($nilai){
            $sum = 0;

            foreach ($nilai as $n) {
                $sum += $n;
            };

            return $sum / count($nilai);
        }
    ?>

    <div class="container m-auto mt-4 col-md-8">
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Nilai 1</th>
                    <th>Nilai 2</th>
                    <th>Nilai 3</th>
                    <th>rata2</th>
                </tr>
            </thead>
    
            <tbody>
                <?php print_mhs(); ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>