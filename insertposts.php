<?php
include 'includes/islogin.php';
include 'includes/conn.php';
include 'includes/functions.php';


$userid = $_SESSION['user']['id'];
$title = $_POST['title'];


if ($_FILES['image']['error'] == 0) {
  $image = uploadImage('image');
  $q = "INSERT INTO `posts`(`title`, `image`, `userid`) VALUES ('$title','$image',$userid)";

} else {
  $q = "INSERT INTO `posts`(`title`, `userid`) VALUES ('$title',$userid)";
}

$result = $conn->query($q);


if ($result) {
  header("Location: index.php");
}