<?php
    include "koneksi.php";

    $sql = "CREATE DATABASE profilee";

    if($koneksi->query($sql) === TRUE){
        echo "database berhasil dibuat";
    } else {
        echo "database gagal dibuat";
    }
?>