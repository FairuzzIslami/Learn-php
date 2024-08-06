<?php
    require 'database.php';



    // mengecek tombol sumbit sudah terkoneksi atau tidak
    if(!isset($_POST['submit'])){

        // //cek data berhasil atau tidak
        if(add($_POST > 0)){
            echo "
            <script> alert('data berhasil di kirim') 
            document.location.href = 'index2.php'
            </script>
            ";
        }else{
            echo"
            <script> alert('data blm bisa di kirim') 
            document.location.href = 'index2.php'
            </script>
            ";
            echo'<br>';
            echo mysqli_errno($connect_db);
        }















        // $nis = $_POST['nis'];
        // $nama = $_POST['nama'];
        // $kelas = $_POST['kelas'];
        // $jurusan = $_POST['jurusan'];

        // //mengambil/query insert data
        // $query = "INSERT INTO datasiswa VALUE
        //         ('','$nis','$nama','$kelas','$jurusan')";
                
        // mysqli_query($conn,$query);



        // //cek data berhasil atau tidak
        // if(mysqli_affected_rows($conn) > 0){
        //     echo'data berhasil';
        // }else{
        //     echo'data tdk berhasil terkirim';
        //     echo'<br>';
        //     echo mysqli_error($conn);
        // }
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