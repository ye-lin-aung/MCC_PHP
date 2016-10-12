
	<div class="container">
		<div class="row">
			<h1 class="col-xs-7 col-xs-offset-2  col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">Admin Login</h1><br>
		</div>
	</br>
	<?php if (isset($_SESSION['admin_login_error'])): ?>
		<?php foreach($_SESSION['admin_login_error'] as $error): ?>
			<div class="alert alert-danger col-xs-7 col-xs-offset-2  col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3" role="alert"><?php echo $error ?></div>
		<?php endforeach; ?>
	<?php endif; ?>

	<form action="auth.php" method="POST">
		
		<div class="row">
			<div class="form-group col-xs-7 col-xs-offset-2  col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
				<label for="email">Email Address</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
			</div>
		</div>


		<div class="row">
			<div class="form-group col-xs-7 col-xs-offset-2  col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Password">
			</div>
		</div>

	<div class="row">
			<div class="form-group col-xs-7 col-xs-offset-2  col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
				<button type="submit" disabled id="btn_submit" class="btn btn-primary">Submit</button>
			</div>


		</form>
	</div>

<!-- 
</body>
</html> -->

