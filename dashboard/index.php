<?php
session_start();
if(!isset($_SESSION["user"])) header("Location: /login");
else{
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Hai <?php echo $_SESSION["user"]["nama"]?></h2>
<h3>klik <a href="/logout.php">disini</a> untuk logout</h3>

</body>
</html>

<?php
}
?>