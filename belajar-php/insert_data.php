<?php
    include "koneksi.php";

    $sql = "INSERT INTO user
    (
        id,
        nama,
        role,
        availability,
        age,
        location,
        years_experience,
        email
    ) VALUE 
    (
        '1',
        'Arkademy',
        'front end developer',
        'full time',
        '20',
        'malang',
        '2',
        'user@arkademy.com'
    )";

    if($koneksi->query($sql) == TRUE){
        echo "insert data telah berhasil";
    } else {
        echo "insert data gagal";
    }
?>