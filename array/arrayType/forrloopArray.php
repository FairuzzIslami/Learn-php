<?php
    $angka = [1,2,3,4,56,7,8,99,0];
    for($i = 0 ; $i < count($angka) ; $i++){
        echo "hello bang";
    }

    //NB: COUNT ==> UNTUK MENGECEK JUMLAH ITEM YANG ADA DI ARRAY
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
<body>
    <!-- ada pengulangan aray dua antara forrloop dan foeach -->
    <!-- foor loop -->
    <?php for($i = 0 ; $i < count($angka) ; $i++){ ?>
        <div><?php echo $angka[$i]?></div>
    <?php } ?>
    <div class="c"></div>

    
    <!-- for each -->
    <?php foreach($angka as $a){ ?>
        <div><?php echo $a ?></div>
    <?php } ?>
</body>
</html>