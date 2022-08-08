<!DOCTYPE html>
<html>

<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<form class="form" action="traitement.php" method="POST">
		<h1 class="login-title">Login</h1>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<input type="email" class="login-input" name="email" placeholder="Email" />
		<input type="password" class="login-input" name="password" placeholder="Password" />
		<input type="submit" class="login-button" name="submit" value="Login" />
	</form>

</body>

</html>