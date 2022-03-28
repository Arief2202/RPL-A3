<?php
$server = "localhost";
$user = "root";
$password = "Lupa121q";
$nama_database = "RPL-A3";

$koneksi = mysqli_connect($server, $user, $password, $nama_database);
if( !$koneksi ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>