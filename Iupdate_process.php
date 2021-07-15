<?php

$mysqli = new mysqli('localhost', 'root', '', 'projectAkhir') or die('database connection failed!');
mysqli_select_db($mysqli,'projectAkhir');

$income = $_POST['income'];
$id = $_GET['id'];

$sql = "SELECT sum(income) as totalIncome from income ";


$sql1 = "UPDATE income SET income='".$_POST['income']."', note='".$_POST['note']."' WHERE id='".$_POST['id']."'";


$result = mysqli_query($mysqli,$sql1);


header('Location: http://localhost:8080/Monage/home.php');