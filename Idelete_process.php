<?php

$mysqli = new mysqli('localhost', 'root', '', 'projectAkhir') or die('database connection failed!');


$income = $_POST['income'];
$note = $_POST['note'];

$id = $_GET['id'];

$sql = "DELETE FROM income where id = '" .$id."'";

$mysqli->query($sql);
$mysqli->close();
header('Location: http://localhost:8080/Monage/incomeRecord.php');