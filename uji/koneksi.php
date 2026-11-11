<?php
    $koneksi = mysqLi_connect("localhost","root","","parkir");

    if (mysqLi_connect_errno()){
        echo "Koneksi Database Gagal : " . mysqLi_connect_errno();
    }

?>