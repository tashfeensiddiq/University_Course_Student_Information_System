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

<form action="insertall.php" method="post" enctype="multipart/form-data">
<table align="center" width="700" broder="2" bgcolor="red">
<tr>
<td align="center" colspan="8"><h2>Insert Here</h2></td>
</tr>
<tr>
<td align="right"><b>Course Name:</b> </td>
<td><input type="text" name="name" size="60" required /></td>
</tr>

<tr>
<td align="right"><b>Course ID:</b> </td>
<td><input type="text" name="course_id" size="60" required /></td>
</tr>

<tr>
<td align="right"><b>Link:</b> </td>
<td><input type="text" name="link" size="60" required /></td>
</tr>

<tr>
<td align="right"><b>Books:</b> </td>
<td><input type="text" name="books" size="60" required /></td>
</tr>

<tr>
<td align="right"><b>Projects</b> </td>
<td><input type="text" name="project" size="60" required /></td>
</tr>

<tr>
<td align="right"><b>Descriptions</b> </td>
<td><input type="text" name="description" size="60" required /></td>
</tr>

<tr>
<td align="right"><b>Exam Date</b> </td>
<td><input type="text" name="exam_date" size="60" required /></td>
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
 $name=$_POST['name'];
 $course_id=$_POST['course_id'];
 $link=$_POST['link'];
 $books=$_POST['books'];
 $project=$_POST['project'];
 $description=$_POST['description'];
 $exam_date=$_POST['exam_date'];

 $sql="INSERT INTO `course`(`name`, `course_id`, `link`, `books`, `project`, `description`, `exam_date`) VALUES ('$name', '$course_id', '$link', '$books', '$project', '$description', '$exam_date');";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}

?>
