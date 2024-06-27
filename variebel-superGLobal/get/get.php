<?php
    //get adalah mengirimkan suatu data yang akan di
    // tunjukan di browser
    
    //cara membuat get:
    // -bisa melalui lik localhost nya langsung
    //  http://localhost:3000/variebel-superGLobal/get.php?umur=12
    //    nama = 'fairuz' ==> key dan value
    //  
    // - atau bisa buat di vscode langsung
    // $_GET['nama'] = 'fairyz ';
    // $_GET['kelas'] = 'x';
    // var_dump($_GET);
    // echo($_GET);

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
        <li>
            <a href="./dataGet.php?nama<?php echo $dts['nama']?>&?kelas<?php 
            echo $dts['kelas']?>&umur<?php echo $dts['umur']?>"> 
            <?php echo $dts['nama'] ?>
        </a>
        </li>
        <?php } ?>
    </ul>
</body>
</html>

<!-- <a href="./dataGet.php?nama<?php echo $dts['nama']?>">  -->
<!-- berfungsi untuk mentransfer data dari file get ke dataget -->

