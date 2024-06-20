<?php
    $nilaiSiswa = [60,70,50,30,90,80];
    foreach($nilaiSiswa as $ns){
        echo $ns;
    }

    //NB: - menggunakan pengulangan array 
    //      foreach lebih mudah dari pada menggunakna for
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- for each -->
    <?php foreach($angka as $a){ ?>
        <div><?php echo $a ?></div>
    <?php } ?>
</body>
    <style>
        div{
            width: 300px;
            height: 300px;
            background-color: aqua;
            text-align: center;
            line-height: 300px;
            font-weight: bolder;
            font-size: 20px;
            margin: 5px;
            float: left;
        }
        .c{
            clear: both;
        }
    </style>
</html>