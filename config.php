<?php 
$koneksi = mysqli_connect("localhost", "ucp2pkw_taufiqfathoni", "fathoni123", "ucp2pkw_databukuwak");

if(mysqli_connect_errno()){
    echo "Koneksi database gagal. Pesan error : ".mysqli_connect_error();
}
?>