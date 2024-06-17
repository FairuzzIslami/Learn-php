<?php
    // berguna untuk menampilkna tanggal 
    // menggunakan format tertentu
    // dan date harus di isi sebuah parameter minimal 1 parameter agar gak eror
    // parameter date:
    // -d ==> tanggal
    // -m/M ==> bulan
    // -l ==> hari
    // -y ==> tahun
    echo date('l, M-d-y');


    $hari = new DateTime();
    echo $hari->format('y'); // tahun
    echo $hari->format('m'); // bulan
    echo $hari->format('l'); // hari
    echo $hari->format('d'); // tanggal
    echo $hari->format('h'); // waktu 
?>