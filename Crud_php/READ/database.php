<?php
    
    //koneksi php ke database
    $connect_db = mysqli_connect('localhost','root','','project_db');
    




    function query($query){
        // connect varibel db ke function
        global $connect_db;
        $result = mysqli_query($connect_db,$query);
        // wadah
        $rows = [];

        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }



    function add($data){
        global $connect_db;

        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];

        //mengambil/query insert data
        $query = "INSERT INTO datasiswa VALUE
                ('','$nis','$nama','$kelas','$jurusan')";
                
        mysqli_query($connect_db,$query);

        return mysqli_affected_rows($connect_db);
    }




    // mengambil/query data dari table 'datasiswa'
    // NB: -JIKA INGIN MENGECEK TERSAMBUNG ATAU TIDAK 
    //       GUNAKAN VAR_DUMP() / if()
    // $result = mysqli_query($connect_db,'SELECT * FROM datasiswa');

    //mengambil(fect) isi data datasiswa dari variabel $result
    // 4 cara
    // mysqli_fetch_row($result[3]);  #key nya angka
    //mysqli_fetch_assoct($result['id']); #make nama tabel 
    //mysqli_fetch_array($result[all]); #bisa angka bisa nama dan datanya doble  x
    //
?>