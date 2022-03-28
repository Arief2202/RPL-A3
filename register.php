<?php
include 'koneksi.php';
if(isset($_GET['email']) && isset($_GET['password']) && isset($_GET['nama'])){
    $password = password_hash($_GET['password'], PASSWORD_DEFAULT);
    $sql = "INSERT INTO `users` (`id`, `email`, `password`, `nama`) VALUES (NULL, '".$_GET['email']."', '".$password."', '".$_GET['nama']."');";
    
    $status = mysqli_query($koneksi, $sql);
    if($status){
        echo '<script> alert("Database berhasil ditambahkan"); </script>';
    }
    else{        
        echo '<script> alert("Database Gagal ditambahkan"); </script>';
    }
}
?>