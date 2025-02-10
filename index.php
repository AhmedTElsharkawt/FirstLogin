<?php
include 'includes/islogin.php';
include 'includes/conn.php';
include 'includes/header.php';
include 'includes/nav.php';

$userid = $_SESSION['user']['id'];

$q = "SELECT * FROM `posts` WHERE `userid` = $userid";

$result = $conn->query($q);
?>

<h1 class="text-center my-5">My Posts</h1>

<div class="container my-5">
  <div class="row">
    <?php
    foreach ($result as $r) { ?>
      <div class="col-md-4">
        <div class="card">
          <img src="<?= $r['image'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $r['title'] ?></h5>
          </div>
        </div>
      </div>
    <?php  
    } ?>

  </div>
</div>


<?php include 'includes/footer.php' ?>