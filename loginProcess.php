<?php

$mysqli = new mysqli('localhost', 'root', '', 'projectAkhir')
    or die('Database connection failed');
    mysqli_set_charset($mysqli, 'utf8');

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM user WHERE username = '$username'";
$result = $mysqli->query($sql);
$result1 = mysqli_query($mysqli, $sql);

if ($result->num_rows) {
    $user = $result->fetch_object();

    if (password_verify($password, $user->password)) {
        session_start();
        $row=mysqli_fetch_assoc($result1);

        $idUser=$row['idUser'];

        $_SESSION['Monage_signin'] = true;
        $_SESSION['idUser'] = $idUser;
        $_SESSION['username'] = $username;
        $_SESSION['fullname'] = $user->full_name;

        header('Location: home.php?idUser='. $row['idUser']);
    } else {
        echo 'invalid username/password';
        header('Location: http://localhost:8080/Monage/login.php?error=1');
    }
} else {
    header('Location: http://localhost:8080/Monage/login.php?error=1');
}
