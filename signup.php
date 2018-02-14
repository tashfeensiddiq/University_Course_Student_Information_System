<!DOCTYPE>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<body bgcolor="skyblue">

<form action="signup.php" method="post" enctype="multipart/form-data">
<table align="center" width="700" broder="2" bgcolor="orange">
<tr>
<td align="center" colspan="8"><h2>Insert Here</h2></td>
</tr>
<tr>
<td align="right"><b>Student Name:</b> </td>
<td><input type="text" name="userName" size="60" required /></td>
</tr>

<tr>
<td align="right"><b>ID:</b> </td>
<td><input type="text" name="id" size="60" required /></td>
</tr>

<tr>
<td align="right"><b>Student Email:</b> </td>
<td><input type="text" name="userEmail" size="60" required /></td>
</tr>

<tr>
<td align="right"><b>Password:</b> </td>
<td><input type="text" name="userPass" size="60" required /></td>
</tr>

<tr align="center">

<td colspan="8"><input type="submit" name="submit" value="Insert" /></td>

</tr>
<tr align="center">
<td colspan="8">
	<a href="signin.php"><button>GO TO SIGNIN</button></a>
</td></tr>
</table>
</form>


<?php
$host="localhost";
$user="root";
$password="";
$db="cse_project";
$con=mysqli_connect($host,$user,$password,$db);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($_POST['submit'])){
 $userName=$_POST['userName'];
 $id=$_POST['id'];
 $userEmail=$_POST['userEmail'];
 $userPass=$_POST['userPass'];


 $sql="INSERT INTO `users`(`userName`, `id`, `userEmail`, `userPass`) VALUES ('$userName', '$id', '$userEmail', '$userPass');";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}

?>

