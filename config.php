<?php

    global $koneksi;

    $namaserver = "localhost";
    $username = "root";
    $password = "";
    $namadb = "login_db";

    $koneksi = mysqli_connect($namaserver, $username, $password, $namadb);

    if(!$koneksi) {
        die("Koneksi gagal".mysqli_connect_err());
    }

?>