<?php session_start(); ?>
<?php ?>
<html>
<head></head>
<body>
	<?php if (isset($_SESSION['email'])):  ?>
		<?php echo $_SESSION['email'] ?>

	<?php else:  header("Location:../home.php"); ?>

	<?php endif; ?>


</body>

</html>
