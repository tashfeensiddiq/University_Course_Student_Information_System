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



<form action="delete.php" method="post" enctype="multipart/form-data">
<table align="center" width="700" broder="2" bgcolor="red">
<tr>
<td align="center" colspan="8"><h2>Delete from  Here</h2></td>
</tr>
<tr>
<td align="right"><b>Enter the course ID you want to delete:</b> </td>
<td><input type="text" name="course_id" size="60" required /></td>
</tr>

<tr>
<td align="center">
<td colspan="8"><input type="submit" name="submit" value="Delete" /></td>
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

 $sql="DELETE FROM `course` WHERE course_id='$course_id';";
if ($con->query($sql) === TRUE) {
    echo " Deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>




