<head>
    <meta charset="UTF-8">
    <title>Admin Panel css html</title>




    <link rel="stylesheet" href="side.css">




</head>

<body>

    <div id="header">
<h1>STUDENT DASHBOARD</h1>

    </div>


    <a class="mobile">MENU</a>


    <div id="container">

        <div class="sidebar">
            <ul id="nav">
                <li>
                    <span>
          
        </span>
                    <a class="selected" href="index.php">Show Details</a>
                </li>

                <li>
                    <span>
          
        </span>
                    <a class="selected" href="showcourse.php">Show Courses</a>
                </li>

                <li>
                    <span>
          
        </span>
                    <a class="selected" href="request.php">Request</a>
                </li>

                <li>
                    <span>
          
        </span>
                    <a class="selected" href="seefaculty.php">Show Faculty</a>
                </li>

                <li>
                    <span>
          
        </span>
                    <a class="selected" href="approved.php">My Courses</a>
                </li>
                

            </ul>

        </div>


        <div class="content">
            <h1>Dashboard</h1>
            <p>GET DETAILS</p>

        

<form action="request.php" method="post" enctype="multipart/form-data">
<table align="center" width="700" broder="2" bgcolor="orange">
<tr>
<td align="center" colspan="8"><h2>Insert Here</h2></td>
</tr>
<tr>
<td align="right"><b>Students's Name:</b> </td>
<td><input type="text" name="name" size="60" required /></td>
</tr>

<tr>
<td align="right"><b>ID:</b> </td>
<td><input type="text" name="id" size="60" required /></td>
</tr>

<tr>
<td align="right"><b>Course ID:</b> </td>
<td><input type="text" name="course_id" size="60" required /></td>
</tr>

<tr>
<td align="right"><b>Course Name:</b> </td>
<td><input type="text" name="course_name" size="60" required /></td>
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
 $id=$_POST['id'];
 $course_id=$_POST['course_id'];
 $course_name=$_POST['course_name'];

 $sql="INSERT INTO `request`(`name`, `id`, `course_id`, `course_name`) VALUES ('$name', '$id', '$course_id', '$course_name');";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}

?>
</body>
</html>