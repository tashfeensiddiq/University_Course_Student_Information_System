<html>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<?php
require('dbconnect.php');
session_start();


// If form submitted, insert values into the database.
if (isset($_POST['submit'])){
        // removes backslashes
	$user = stripslashes($_REQUEST['userEmail']);
        //escapes special characters in a string
	$userEmail = mysqli_real_escape_string($con,$user);
	$userPass = stripslashes($_REQUEST['userPass']);
	$userPass = mysqli_real_escape_string($con,$userPass);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE userEmail='$userEmail'
and userPass='$userPass'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['userEmail'] = $userEmail;

	    
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }
    
?>
<div class="login">
<h1>Log In</h1>
<form action="" method="post" name="login">

<input type="text" name="userEmail" placeholder="UserEmail" required />

<input type="password" name="userPass" placeholder="userPass" required />
<input name="submit" type="submit" value="Login" />


</form>
<button type="submit" onClick="location.href='signup.php'">submit</button>
</div>

</body>
</html>