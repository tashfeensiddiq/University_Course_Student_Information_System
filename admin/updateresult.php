<!DOCTYPE>
<html>
<body bgcolor="skyblue">
<form action="updateresult.php" method="post" enctype="multipart/form-data">
<table align="center" width="700" broder="2" bgcolor="orange">
<tr>
<td align="center" colspan="8"><h2>Update Here</h2></td>
</tr>
<tr>
<td align="right"><b>ID:</b> </td>
<td><input type="text" name="id" size="60" required /></td>
</tr>

<tr>
<td align="right"><b>User Email:</b> </td>
<td><input type="text" name="userEmail" size="60" required /></td>
</tr>

<tr align="center">
<td colspan="8"><input type="submit" name="submit" value="Update" /></td>
</tr>
</table>
</form>

<?php
require('dbconnect.php');
session_start();
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($_POST['submit'])){
 $id=$_POST['id'];
 $userEmail=$_POST['userEmail'];

 $sql="UPDATE `result` SET `userEmail`='$userEmail' WHERE `id`='$id';";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>