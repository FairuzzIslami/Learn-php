<?php
    // funtion dalah suatu program yng mengerjakan program
    // tertentu yang yang letaknya di pisah dari program yang telah 
    //  di pakai oleh fungsi 
    function nama(){
        echo "fairuz aqila islami";
    }
    echo nama(); // cara menampilkna isi fungsi 

    function sapaan($nama,$waktu){
        $waktu = date("l",mktime(0,0,0,10,1,2007));
        return "selamat, $waktu mas $nama";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo nama() ?></h1>
    <h1><?php echo sapaan('fairuz','')?></h1>
</body>
</html>