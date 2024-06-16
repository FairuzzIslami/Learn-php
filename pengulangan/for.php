<?php
    echo "hello world <br>";
    // for adalah pengulangan syntax pada bahasa pemrogramanan 
    // yang mengulangkan suatu nilai yang tertera 
    // penulisan for :
    // for(varibel,kondisi,+/-)
    // + = maju kondisi
    // - = mundur kondisi 

    for($i = 0; $i <= 10 ; $i++){
        echo "hello saya index ke " . $i . "<br>";
    }

    // untuk yang ++
    // dari yang terkecil ke besar
    $nilai = 30;
    for($j = 0 ; $j < $nilai ; $j++){
        echo "nilai saya adalah". $j."<br>";
    }


    // untuk yang --- 
    // dari terbesar ke rendah 
    for($x = 10 ; $x >= 1; $x--){
        echo "nama saya fairuz" . $x . "<br>";
    }
?>