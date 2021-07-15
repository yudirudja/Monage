<?php

$mysqli = new mysqli('localhost', 'root', '', 'projectAkhir') or die('database connection failed!');
mysqli_select_db($mysqli,'projectAkhir');

$outcome = $_POST['outcome'];
$id = $_GET['id'];

$sql = "SELECT sum(outcome) as totalOutcome from outcome ";

$sql1 = "UPDATE outcome SET outcome='".$_POST['outcome']."', note='".$_POST['note']."' WHERE id='".$_POST['id']."'";


$result = mysqli_query($mysqli,$sql1);


header('Location: http://localhost:8080/Monage/home.php');