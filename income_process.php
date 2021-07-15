<?php

$mysqli = new mysqli('localhost', 'root', '', 'projectAkhir') or die('database connection failed!');


$income = $_POST['income'];
$note = $_POST['note'];

if (empty($income)) {
	header('location: income.php?error=1');
}

$sql = "INSERT INTO income (date, income,  note) VALUE (now(), '$income', '$note')";

$mysqli->query($sql);
$mysqli->close();
header('Location: http://localhost:8080/Monage/home.php');