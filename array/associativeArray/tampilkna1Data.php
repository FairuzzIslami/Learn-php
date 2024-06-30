<?php

    $dataSiswa = [
        [
            'nama' => 'fairuz',
            'kelas' =>  10,
            'umur' => 16
        ],
        [
            'nama' => 'damar',
            'kelas' =>  11,
            'umur' => 17
        ]
    ];
    //cara menampilkannya
    var_dump($dataSiswa['kelas'])


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>data siswa</h1>
    <ul>
        <?php foreach($dataSiswa as $dts){ ?>
        <li><?php echo $dts['nama'] ?></li>
        <?php } ?>
    </ul>
</body>
</html>