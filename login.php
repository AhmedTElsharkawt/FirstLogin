<?php include 'includes/header.php' ?>

<div class="container">
	<h1 class="text-center my-5">Login To Start Session</h1>

	<form class="w-50 mx-auto my-3" action="checkuser.php" method="post">
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Password</label>
			<input name="password" type="password" class="form-control" id="exampleInputPassword1">
		</div>
		<button type="submit" class="btn btn-primary w-100 my-2">Login</button>
		<p>Don't have account - <a href="register.php">Register here</a></p>
	</form>
</div>

<?php include 'includes/footer.php' ?>