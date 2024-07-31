<?php
    $conn = mysqli_connect('localhost','root','','project_db');



    // mengecek tombol sumbit sudah terkoneksi atau tidak
    if(!isset($_POST['submit'])){
        var_dump($_POST);
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];

        //mengambil/query insert data
        $query = "INSERT INTO datasiswa VALUE
                ('','$nis','$nama','$kelas','$jurusan')";
                
        mysqli_query($conn,$query);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        tambahkan data siswa baru
    </h1>
    <form action="" method="post">
        <label for="nis">NIS:</label><br>
        <input type="text" name="nis" id="nis"><br>

        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" id="nama"><br>

        <label for="kelas">Kelas:</label><br>
        <input type="text" name="kelas" id="kelas"><br>

        <label for="jurusan">Jurusan:</label><br>
        <input type="text" name="jurusan" id="jurusan"><br>

        <button type="submit">Sumbit</button>
    </form>
</body>
</html>