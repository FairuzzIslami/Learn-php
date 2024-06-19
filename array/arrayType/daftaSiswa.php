<?php
    $siswa = ['fairuz','rpl','10'];
    $siswa2 = ['damar','tkr',12]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar siswa</h1>
    <ul>
        <?php foreach($siswa as $s){?>
        <li><?php  echo $s?></li>
        <?php }  ?>
    </ul>
    <ul>
        <li><?php echo $siswa2[0]?></li>
        <li><?php echo $siswa2[1]?></li>
        <li><?php echo $siswa2[2]?></li>
    </ul>
</body>
</html>