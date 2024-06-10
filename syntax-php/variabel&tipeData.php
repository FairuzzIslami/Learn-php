<?php
    //cara membuat variabel di php menggunakan $variabel
    //perbedaan kutip '' dan ""
    // '' hanya menampilkan string tanpa mengecek di dalamnya ada varibel/tdk
    // "" ini dia menampilkna dan mengecek di dalam nya ada variabel/tidak
    // itu di sebut INTERPORASI!!!!
    $nama = "fairuz";  // string
    $umur = 12;        // number
    $anak = true;      // bolean
    
    echo "hallo nama saya $nama dan saya ber umur $umur tahun <br>";// "" mengecek
    echo 'hallo nama adik saya adalah $nama' //'' tidak di cek
?>
