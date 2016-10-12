<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/bootswatch.css">
</head>
<body>	
	<div class="container">
		<div class="row">
			<h1 class="col-xs-7 col-xs-offset-2  col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">Admin Register</h1><br>
		</div>
	</br>
	<?php if (isset($_SESSION['admin_errors'])): ?>
		<?php foreach($_SESSION['admin_errors'] as $error): ?>
			<div class="alert alert-danger col-xs-7 col-xs-offset-2  col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3" role="alert"><?php echo $error ?></div>
		<?php endforeach; ?>
	<?php endif; ?>
	<form action="reg.php"  id="form" method="POST">
		<div class="row">
			<div class="form-group col-xs-7 col-xs-offset-2  col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
				<label for="name" class>Name</label>
				<input type="text" required title="You need to add name" class="form-control" id="name" name="name" placeholder="Name">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-xs-7 col-xs-offset-2  col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
				<label for="email">Email Address</label>
				<input type="email" required title="This can't be blank" class="form-control" id="email" name="email" placeholder="Email Address">
			</div>
		</div>

		<div class="row">
			<div class="form-group col-xs-7 col-xs-offset-2  col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
				<label for="gender">Gender</label>
				<select class="form-control" name="gender">
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>
		</div>


		<div class="row">
			<div class="form-group col-xs-7 col-xs-offset-2  col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
				<label for="password">Password</label>
				<input type="password" pattern=".{8,}" required title="password must be atleast 8 words" class="form-control" id="password" name="password" placeholder="Password">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-xs-7 col-xs-offset-2  col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
				<label for="confirm">Confirm Password</label>
				<input type="password" pattern=".{8,}" required title="password must be atleast 8 words" class="form-control" id="confirm_password" placeholder="Password">
				<span id="err" style="color:#F44336;">The two passwords should be match</span>
			</div>
		</div>

		<div class="row">
			<div class="form-group col-xs-7 col-xs-offset-2  col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
				<label for="location">Location</label>
				<input type="text" class="form-control" id="location" name="location" placeholder="Location">
			</div>
		</div>

		<div class="row">
			<div class="form-group col-xs-7 col-xs-offset-2  col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
				<label for="skill">Skill</label>
				<input type="text" class="form-control" id="skill" name="skill" placeholder="Skills">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-xs-7 col-xs-offset-2  col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
				<label for="experience">Experience</label>
				<textarea type="text" class="form-control" id="experience" name="experience" placeholder="Experience"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-xs-7 col-xs-offset-2  col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
				<label for="description">Description</label>
				<textarea type="text" class="form-control" id="description" name="description" placeholder="Description"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-xs-7 col-xs-offset-2  col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
				<button type="submit" disabled id="btn_submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
	<script type="text/javascript" src="../javascript/jquery.js"></script>
	<script type="text/javascript" src="../javascript/learn.js"></script>
</body>
</html>

