<?php
    $koneksi = mysqLi_connect("localhost","root","","laundry");

    if (mysqLi_connect_errno()){
        echo "Koneksi Database Gagal : " . mysqLi_connect_errno();
    }

?>