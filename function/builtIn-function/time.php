<?php
    // unix time / epoch
    //menampilkna setk yang berlalu
    // kisaran dari tahun 1970 samapi sekarang

    // kegunaan time bisa untuk :
    // -membuat suatu diskon harian 
    //  - pembelian harian 
    //  -mengetahui umur
    //   - dll
    echo time();
    echo date('l',time() + 60*60*24*1); // 1 hari nanti
    //                     // waktu*detik*hari

    echo date('l',time() - 60*60*24*1) // 1 hari kemarin
?>