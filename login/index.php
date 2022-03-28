<?php
include '../koneksi.php';

session_start();
if(isset($_SESSION["user"])) header("Location: /dashboard");
if(isset($_POST['email']) && isset($_POST['password'])){
    $sql = "SELECT * FROM `users` WHERE `email` LIKE '".$_POST['email']."'";
    $query = mysqli_query($koneksi, $sql);
    if($user = mysqli_fetch_array($query)){
        if(password_verify($_POST['password'], $user["password"])){
            $_SESSION["user"] = $user;
            header("Location: /dashboard");
        }
        else{
            echo '<script> alert("Username atau Password salah");</script>';
        }
    }
    else{
        echo '<script> alert("Username atau Password salah");</script>';
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' /> -->
    <link href="css/style.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <title>My Apps | Login</title>
</head>

<body>
    <div class="card-login">
        <div class="row" style="height:100%;">
            <div class="col bg-blue text-center">
                <div class="container left-container">
                    <h2 class="left-welcome">Selamat Datang</h2>
                    <img class="left-image" src="../img/undraw_programming_re_kg9v.svg">
                    <h6 class="left-appsname">My Apps 2k21</h6>
                </div>
            </div>
            <div class="col me-2">
                <div class="container">
                    <h2 class="text-center mt-4 mb-3">Login</h2>
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-outline-primary mt-3" style="width: 100%;">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>