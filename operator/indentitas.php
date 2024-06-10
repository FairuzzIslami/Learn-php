<?php
    // indentitas hampir mirip seperti opertor perbandingan 
    // tetapi dia tdk mengecek nilai juga mengecek jenis tipe data nya
    //contoh: ===,!===

    var_dump(10 == '10'); // hasilnya true karena gak mengecek tipe datanya
    var_dump(10 === '10') // hasilnya false
?>