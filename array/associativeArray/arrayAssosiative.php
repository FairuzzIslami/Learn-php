<?php 
    //assosiative array adalah
    //suatu array yang memiliki key untuk 
    // mendeklarasikan suatu nilai tertentu
    //penulisan  [key ==> value/nilai]

    // 1 siswa
    $siswa2 = 
    [
        'nama' => 'fairuz',
        'kelas' => 'x',
        'jurusam' => 'rpl',
        'sekolah' => 'barkab'
    ];
    var_dump($siswa2['kelas']);


    //2 siswa
    $siswa = [
        [
            'nama' => 'fairuz',
            'kelas' => 'x',
            'jurusam' => 'rpl',
            'sekolah' => 'barkab'
        ],
        [
            'nama' => 'denki',
            'kelas' => 'x',
            'jurusam' => 'tmi',
            'sekolah' => 'gajos'
        ]
    ];
    var_dump($siswa[1]['nama'])
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar nama siswa sekolah</h1>
    <!-- array yang tunggal -->
    <ul>
        <?php foreach($siswa2 as $student){?>
        <li><?php echo $student ?></li>
        <?php } ?>
    </ul>
    
    <!-- array dalam array -->
    <ul>
        <?php foreach($siswa as $student){?>
            <?php foreach($student as $value){?>
            <li><?php echo $value ?></li>
            <?php } ?>
        <?php } ?>
    </ul>
</body>
</html>