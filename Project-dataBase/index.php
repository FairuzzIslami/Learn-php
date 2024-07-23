<?php
    //koneksi php ke database
    $connect_db = mysqli_connect('localhost','root','','project_db');
    

    // mengambil/query data dari table 'datasiswa'
    // NB: -JIKA INGIN MENGECEK TERSAMBUNG ATAU TIDAK 
    //       GUNAKAN VAR_DUMP() / if()
    $result = mysqli_query($connect_db,'SELECT * FROM datasiswa');
    var_dump($result)

    //mengambil(fect) isi data datasiswa dari variabel $result
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
            <th>Edit</th>
            <th>nis</th>
            <th>nama</th>
            <th>kelas</th>
            <th>jurusan</th>
        </tr>
        <tr>
            <td>1</td>
            <td><a href="">rename</a> / <a href="">delete</a></td>
            <td>0693069</td>
            <td>Fairuz aqila islami</td>
            <td>10</td>
            <td>RPL</td>
        </tr>
        <tr>
            <td>2</td>
            <td><a href="">rename</a> / <a href="">delete</a></td>
            <td>0923423</td>
            <td>Damar artha</td>
            <td>10</td>
            <td>TMI</td>
        </tr>
        <tr>
            <td>3</td>
            <td><a href="">rename</a> / <a href="">delete</a></td>
            <td>0923542</td>
            <td>Salsa bila aufa isalmi</td>
            <td>10</td>
            <td>Farmasi</td>
        </tr>
        <tr>
            <td>4</td>
            <td><a href="">rename</a> / <a href="">delete</a></td>
            <td>09423435</td>
            <td>Achmad nobe</td>
            <td>10</td>
            <td>RPL</td>
        </tr>
        <tr>
            <td>5</td>
            <td><a href="">rename</a> / <a href="">delete</a></td>
            <td>06593275923</td>
            <td>Muhammad Iqbal Wicak sono</td>
            <td>10</td>
            <td>TKR</td>
        </tr>
    </table>
</body>
</html>