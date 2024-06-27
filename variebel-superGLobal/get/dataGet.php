<?php
    // mengecek data nama ada atau tidak
    if (!isset($_GET['nama']) || !isset($_GET['kelas'])|| !isset($_GET['umur'])) {
        //redicert
        //mindahin halaman ke halamn lain
        header('location: get.php');
        exit;
    }
        // FUNGSI INI, JIKA TIDAK ADA DATA MAKA DIA 
        //AKAN MIDAHKAN HALAMAN KE HALAMAN LAIN

    //NB:
    // !isset() yg blm di bikin
    // isset()yg sudah di bikin
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>nama = <?php echo $_GET['nama']?> </li>
        <li>Umur = <?php echo $_GET['kelas']?></li>
        <li>kelas =<?php echo $_GET['umur']?></li>
    </ul>
    <a href="./get.php">Kembali ke halaman</a>
</body>
</html>