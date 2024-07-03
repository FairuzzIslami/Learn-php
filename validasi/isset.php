<?php
    //kegunaan isset adalah untuk mengecek suatu variabel
    // yang memiliki suatu nilai dan akan menghasilkan true or false
    // isset($variabel) = ketika suatu variebl sudah di buat kita akan lakukan sesuatu
    // !isset(variabel) = ketika variabel blm di buat kita lakukan sesuatu
    $angka = 1;
    if(isset($angka)){
        if($angka > 5){
            echo 'kelebihan wak';
        }else{
            echo 'angkanya kurang pak';
        }
    }

    // ketika blm di buat 
    if(!isset($umur)){
        if($umur == 10){
            echo 'blm di buat woi';
        }else{
            echo 'wes gok';
        }
    }
    $umur = 10;

    
?>