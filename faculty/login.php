<html>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<?php
require('dbconnect.php');
session_start();


// If form submitted, insert values into the database.
if (isset($_POST['submit'])){
        // removes backslashes
  $initial = stripslashes($_REQUEST['initial']);
        //escapes special characters in a string
  $initial = mysqli_real_escape_string($con,$initial);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($con,$password);
  //Checking is user existing in the database or not
        $query = "SELECT * FROM `faculty` WHERE initial='$initial'
and password='$password'";
  $result = mysqli_query($con,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['initial'] = $initial;

      
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

<input type="text" name="initial" placeholder="initial" required />

<input type="password" name="password" placeholder="password" required />
<input name="submit" type="submit" value="Login" />
</form>
</div>

</body>
</html>