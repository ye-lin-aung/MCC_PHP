<h1>Login</h1><br>	
	<?php if (isset($_SESSION['login_error'])): ?>
		<?php foreach($_SESSION['login_error'] as $error): ?>
			<div class="alert alert-danger" role="alert"><?php echo $error ?></div>
		<?php endforeach; ?>
	<?php endif; ?>

	<form action="auth.php" method="POST">
		
		
		<div class="form-group">
			<label for="email">Email Address</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
		</div>
		


		
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" id="password" name="password" placeholder="Password">
		</div>
		

		<div class="radio-inline">
			<label>
				<input type="radio" name="role" id="optionsRadios1" value="option1" checked>
				Admin
			</label>
		</div>
		<div class="radio-inline">
			<label>
				<input type="radio" name="role" id="optionsRadios2" value="option2">
				Student
			</label>
		</div>
		<div class="radio-inline">
			<label>
				<input type="radio" name="role" id="optionsRadios3" value="option3">
				Employee
			</label>
		</div>
		<div class="form-group">
			<button type="submit"  id="btn_submit" class="btn btn-primary">Login</button>
		</div>


</form>