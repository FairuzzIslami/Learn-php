<?php
    //menghubungkan index dan database 
    require 'database.php';

    
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