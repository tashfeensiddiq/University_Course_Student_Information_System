<!DOCTYPE>
<html>

    <link rel="stylesheet" href="adminstyle.css">



<body>
      <a class="mobile">MENU</a>


    <div id="container">

        <div class="sidebar">
            <ul id="nav">
                <li>
                    <span>
          
        </span>
                    <a class="selected" href="adminindex.php">Show Details</a>
                </li>
                <li>
                    <span>
         </span><a href="insertall.php">INSERT ALL</a>
                </li>
                                <li>
                    <span>
         </span><a href="delete.php">DELETE ALL</a>
                </li>
                                <li>
                    <span>
        </span><a href="updateall.php">UPDATE EXAM DATE</a>
                </li>
                <li>
                    <span>
        </span><a href="result.php">RESULT</a>
                </li>
                <li>
                    <span>
        </span><a href="seeresult.php">SEE RESULT</a>
                </li>

                <li>
                    <span>
        </span><a href="updaterequest.php">APPROVE COURSE</a>
                </li>
                <li>
                    <span>
        </span><a href="insertfaculty.php">INSERT FACULTY</a>
                </li>

                <li>
                    <span>
        </span><a href="seefaculty.php">SHOW FACULTY</a>
                </li>

                <li>
                    <span>
          
        </span>
                    <a class="selected" href="seerequest.php">REQUEST</a>
                </li>
                


            </ul>

        </div>

        <div class="content">
            <h1>Dashboard</h1>
            <p>GET DETAILS</p>

<form action="result.php" method="post" enctype="multipart/form-data">
<table align="center" width="700" broder="2" bgcolor="orange">
<tr>
<td align="center" colspan="8"><h2>Insert Here</h2></td>
</tr>
<tr>
<td align="right"><b>Course Name:</b> </td>
<td><input type="text" name="course_id" size="60" required /></td>
</tr>

<tr>
<td align="right"><b>ID:</b> </td>
<td><input type="text" name="id" size="60" required /></td>
</tr>


<tr>
<td align="right"><b>E Mail:</b> </td>
<td><input type="text" name="userEmail" size="60" required /></td>
</tr>


<tr>
<td align="right"><b>Result:</b> </td>
<td><input type="text" name="result" size="60" required /></td>
</tr>



<tr align="center">
<td colspan="8"><input type="submit" name="submit" value="Insert" /></td>
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
 $course_id=$_POST['course_id'];
 $id=$_POST['id'];
  $userEmail=$_POST['userEmail'];
 $result=$_POST['result'];
 $sql="INSERT INTO `result`(`course_id`, `id`, `userEmail`, `result`) VALUES ('$course_id', '$id', '$userEmail', '$result');";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}

?>
