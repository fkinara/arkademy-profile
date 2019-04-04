<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "profilee";
    $koneksi = new mysqli($host, $username, $password, $db);

    if ($koneksi->connect_error){
        die ("koneksi ke database gagal");
    } 
?>