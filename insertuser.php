<?php include 'includes/conn.php' ?>

<?php

// Get data from FORM
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashedPass = md5($password);

// Insert query
$q = "INSERT INTO users(`user_name`, `email`, `password`)
      VALUES('$user_name', '$email', '$hashedPass')";
$result = $conn->query($q);

// Select query
$q = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$hashedPass'";
$result2 = $conn->query($q);
$user = $result2->fetch_assoc();

// Login
if ($result2->num_rows == 1) {
  session_start();
  $_SESSION['user'] = $user;
}


if ($result) {
  header('Location: index.php');
}
