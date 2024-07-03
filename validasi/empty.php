<?php
    // empty hampir mirip seperti isset
    // tetapi dia akan mengecek varibel yang di anggap kosong
    // misalnya username,email user dll itu menggunakan empty

    $username = 'fairuz';
    $password = 'admind123';

    if(empty($username)){// dibaca jika vrb kosong
        echo 'username belum di isi';
    }

    if(empty($password)){
        echo 'anda belm mengisi password';
    }
?>