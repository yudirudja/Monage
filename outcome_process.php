<?php

$mysqli = new mysqli('localhost', 'root', '', 'projectAkhir') or die('database connection failed!');


$outcome = $_POST['outcome'];
$note = $_POST['note'];

if (empty($outcome)) {
	header('location: outcome.php?error=1');
}

$sql = "INSERT INTO outcome (date, outcome, note) VALUE (now(), '$outcome', '$note')";

$mysqli->query($sql);
$mysqli->close();
header('Location: http://localhost:8080/Monage/home.php');