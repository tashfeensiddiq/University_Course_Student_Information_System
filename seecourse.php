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

        
<!DOCTYPE>
<html>

    <link rel="stylesheet" href="adminstyle.css">



<body>


        <div class="content">
            <h1>Dashboard</h1>
            <p>GET DETAILS</p>
 <form action="seecourse.php" method="post" ><br/>
 put id:<input type="text" name="search"/><br/>
 <!--password:<input type="password" name="password"/><br/>-->
 <input type="submit" name="submit" value="search">
  </form>
<?php

	 require('dbconnect.php');
session_start();
if(isset($_POST['search'])){
  $search = $_POST['search'];
  //$password = $_POST['password'];
 
     if($search=='all'){
     	$sql_1= "SELECT * FROM `request` ;";
     	$result = mysqli_query($con,$sql_1); 
     	//echo'hi';
     	echo "<table border='1'>
     <tr>
	   <th><h2>COURSE ID</h2></th>
	   <th><h2>ID</h2></th>
	   <th><h2>STATUS</h2></th>
	   <!--<th><h2>links</h2></th>-->
	   <!--<th><h2>course_id</h2></th>-->
	   <!--<th><h2>exam_date</h2></th>-->
	 </tr>";
	 while($row = mysqli_fetch_array($result)){
	 echo "<tr>";
	 echo "<td>"."<h2>".$row['course_id']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['id']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['status']."</h2>"."</td>";
	 //echo "<td>"."<h2>".$row['course']."</h2>"."</td>";
	 //echo "<td>"."<h2>".$row['links']."</h2>"."</td>";
	 //echo "<td>"."<h2>".$row['course_id']."</h2>"."</td>";
	 //echo "<td>"."<h2>".$row['exam_date']."</h2>"."</td>";
	 
	 echo "</tr>";
 }
 echo "</table>";
     }else{
     	$sql= "SELECT * FROM `request` where course_id='$search';"; 
     $result = mysqli_query($con,$sql);
     	echo "<table border='1'>
     <tr>
	   <th><h2>ID</h2></th>
	   <th><h2>COURSE ID</h2></th>
	   <th><h2>STATUS</h2></th>
	   <!--<th><h2>links</h2></th>-->
	   <!--<th><h2>course_id</h2></th>-->
	   <!--<th><h2>exam_date</h2></th>-->
	 </tr>";
	 while($row = mysqli_fetch_array($result)){
	 echo "<tr>";
	 echo "<td>"."<h2>".$row['id']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['course_id']."</h2>"."</td>";
	 
	 echo "<td>"."<h2>".$row['status']."</h2>"."</td>";
	 
	 echo "</tr>";
 }
 echo "</table>";}
	 
}

?>
</body>
</html>