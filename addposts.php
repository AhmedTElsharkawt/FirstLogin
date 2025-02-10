<?php include 'includes/islogin.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/nav.php' ?>
<?php include 'includes/conn.php' ?>


<div class="container">
	<h1 class="text-center my-3">Add New Post</h1>

	<form class="w-50 mx-auto my-3" action="insertposts.php" method="post" enctype="multipart/form-data">
		<div class="mb-3">
			<label for="title" class="form-label">title</label>
			<input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp">
		</div>
		<div class="mb-3">
			<label for="image" class="form-label">image</label>
			<input name="image" type="file" class="form-control" id="image">
		</div>
		<button type="submit" class="btn btn-primary w-100 my-2">Submit</button>
	</form>
</div>

<?php include 'includes/footer.php' ?>