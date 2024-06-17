<?php
    //mktime
    // bisa membuat/memanipulasi detik sendiri
    //mktime(0,0,0,0,0,0)
    // jam,menit,detik,bulan,tanggal,tahun

    $tanggal_lahir = mktime(0,0,0,10,1,2007);
    echo date('l' ,$tanggal_lahir)
?>