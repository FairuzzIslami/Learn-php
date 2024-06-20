<?php
    //array adalah suatu nilai varibel yg memiliki banyak 
    // nilai, contoh
    // $nama = [1,2,3,4,5,6,7,8,899,0,10]


    // NB: - dan di dalam array terdapat index dan item
    //     - index di dalam array itu di mulai dari 0-sampe index terakhir
    //     - item di array itu berawal dari 1 sampai item yang terakhir


    $namaSiswa = ['fairuz','damar','manshur','asep'];
    //     index =  0        1        2         3
    //     item  =  1        2        3         4

    //menampilakan array
    var_dump($namaSiswa);
    echo "<br>";
    print_r($namaSiswa);
    echo $namaSiswa; //echo gak bisa meng output banyak data, bisa nya hanya 1 data , dan akan meng kases nama variabelnya
    echo $namaSiswa[1] // jika meng akses 1 nilai bisa

?>