<h1>Login</h1><br>	

		<?php if (isset($_SESSION['login_errors'])): ?>
		<?php foreach($_SESSION['login_errors'] as $error): ?>
			<div class="alert alert-danger" role="alert"><?php echo $error ?></div>
		<?php endforeach; ?>
		<?php endif; ?>

	<form action="../db/auth.php" method="POST">
		
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
				<input type="radio" name="role" id="optionsRadios1" value="admin" checked>
				Admin
			</label>
		</div>
		<div class="radio-inline">
			<label>
				<input type="radio" name="role" id="optionsRadios2" value="student">
				Student
			</label>
		</div>
		<div class="radio-inline">
			<label>
				<input type="radio" name="role" id="optionsRadios3" value="employee">
				Employee
			</label>
		</div>
		<div class="form-group">
			<button type="submit"  id="btn_submit" class="btn btn-primary">Login</button>
		</div>


</form>