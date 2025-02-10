<?php include 'includes/functions.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/conn.php' ?>

<div class="container">
	<h1 class="text-center my-5">Register Your Data</h1>

	<form class="w-50 mx-auto my-3" action="insertuser.php" method="post">
		<div class="mb-3">
			<label class="form-label">User Name</label>
			<input name="user_name" type="text" class="form-control" aria-describedby="emailHelp">
		</div>
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Password</label>
			<input name="password" type="password" class="form-control" id="exampleInputPassword1">
		</div>
		<button type="submit" class="btn btn-primary w-100 my-2">Register</button>
		<p>You have account - <a href="login.php">Login here</a></p>
	</form>
</div>

<?php include 'includes/footer.php' ?>