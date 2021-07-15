<?php

$mysqli = new mysqli('localhost', 'root', '', 'projectAkhir')
    or die('Database connection failed');
    mysqli_set_charset($mysqli, 'utf8');

$idUser = $_POST['idUser'];
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM user WHERE id = '$idUser'";
$result1 = mysqli_query($mysqli, $sql);
        $row=mysqli_fetch_assoc($result1);
        header('Location: income.php?id='. $row['idUser']);
