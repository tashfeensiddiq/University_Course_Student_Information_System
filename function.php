<?php

 
require 'function.php';
session_start();

if (is_user())
	redirect('index.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>

	<link rel="stylesheet" type="text/css" href="css/pure-min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<div class="container">

		<h1>Sign Up</h1>
		<p>Already have an account? <a class="pure-button" href="signin.php">Login</a></p>

		<!-- error or success message will appear here -->
		<?php if (!empty($_GET['error'])): ?>
			<p class="status status-error pure-input-1"><?php echo $_GET['error']?></p>
		<?php endif ?>

		<?php if (!empty($_GET['success'])): ?>
			<p class="status status-success pure-input-1"><?php echo $_GET['success']?></p>
		<?php endif ?>

		<!-- signup form -->
		<form action="signup_post.php" class="pure-form pure-form-stacked" method="post">

			<fieldset class="pure-group">
				<input type="text" class="pure-input-1" name="username" placeholder="username">
				<input type="password" class="pure-input-1" name="password" placeholder="password">

				<input class="pure-button pure-button-primary pure-input-1" type="submit" value="Sign Up">
			</fieldset>

		</form>

	</div>
</body>
</html>