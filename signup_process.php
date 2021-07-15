<?php

$mysqli = new mysqli('localhost', 'root', '', 'projectAkhir') or die('database connection failed!');

$email = $_POST['Email'];
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = password_hash($_POST['PASSWORD'], PASSWORD_BCRYPT);

if (empty($email) || empty($fullname) || empty($username) || empty($password)) {
	header('location: signup.php?error=1');
}

$sql = "INSERT INTO user (Email, username, name, PASSWORD) VALUE ('$email', '$username', '$fullname', '$password')";

$mysqli->query($sql);
$mysqli->close();
header('Location: http://localhost:8080/Monage/login.php');