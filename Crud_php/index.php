<?php
    //koneksi php ke database
    $connect_db = mysqli_connect('localhost','root','','project_db');
    

    // mengambil/query data dari table 'datasiswa'
    // NB: -JIKA INGIN MENGECEK TERSAMBUNG ATAU TIDAK 
    //       GUNAKAN VAR_DUMP() / if()
    $result = mysqli_query($connect_db,'SELECT * FROM datasiswa');
    

    //mengambil(fect) isi data datasiswa dari variabel $result
    // 4 cara
    // mysqli_fetch_row($result[3]);  #key nya angka
    //mysqli_fetch_row($result['id']); #make nama tabel 
    //mysqli_fetch_array($result[all]); #bisa angka bisa nama dan datanya doble  x
    //


    // for( $i = 0; $i <= 10; $i++ ){
    //     $result = mysqli_query($connect_db,'SELECT * FROM datasiswa');
    //     $fectData = mysqli_fetch_assoc($result);
    //     var_dump($fectData['nama']);
    // };


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My admind</title>
</head>
<body>
    <h1>DAFTAR SISWA SMK MUHAMMADIYAH 04 BOYOLALI</h1>
    <table border="1" cellpadding='10' cellspasing='0'>
        <tr>
            <th>No</th>
            <th>EDIT</th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>JURUSAN</th>
        </tr>
        <?php $i = 1;?>
        <?php while($row = mysqli_fetch_assoc($result)){?>
        <tr>
            <td><?php echo $i?></td>
            <td><a href="">rename</a> / <a href="">delete</a></td>
            <td><?php echo $row['nis']?></td>
            <td><?php echo $row['nama']?></td>
            <td><?php echo $row['jurusan']?></td>
            <td><?php echo $row['kelas']?></td>
        </tr>
        <!-- NB: -->
        <!-- karena di html nya ini memunculkan 1 row maka dia akan  -->
        <!-- menyesuikan databasenya -->
        <!-- jika di htmlnya menampilkan dua maka akan dobel memunculkannya -->
        <?php $i++ ?>
        <?php } ?>
    </table>
</body>
</html>