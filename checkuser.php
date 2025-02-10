<?php include 'includes/conn.php' ?>

<?php

// Get data from FORM
$email = $_POST['email'];
$password = $_POST['password'];
$hashedPass = md5($password);

// Database queries

$q = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$hashedPass' ";
$result = $conn->query($q);
$user = $result->fetch_assoc();

if ($result->num_rows == 1) {
    session_start();
    $_SESSION['user'] = $user;
    header("refresh: 0; url= index.php");

} else {
    echo "<h3>Email / Password is incorrect</h3>";
    header("refresh: 2; url= login.php");
}
