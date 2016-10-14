<?php session_start(); ?>
<?php ?>
<html>
<head></head>
<body>
	<?php if (isset($_SESSION['email'])):  ?>
		<?php echo $_SESSION['email'] ?>
		
	<?php else:  echo "Hello"; ?>

	<?php endif; ?>


</body>

</html>
