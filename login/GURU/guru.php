<?php
session_start();
if($_SESSION['role']!="guru"){
    header('location: ../login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>selamat datang  <?=$_SESSION['username']?></p>
</body>
</html>