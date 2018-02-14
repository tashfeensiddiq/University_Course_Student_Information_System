<html>
<head>
	<meta charset="utf-8"/> 
	 <!--<title> This is my firstst webpage </title>-->
</head>


<body>
<body background="back.png">
<h2>WELCOME STUDENTS<h2/>

 
 
 <form action="" method="post" ><br/>

 <!--password:<input type="password" name="password"/><br/>-->
 <input type="submit" name="search" value="search">
  </form>
<?php

	 require('dbconnect.php');
session_start();


if(isset($_POST['search'])){
  $search = $_POST['search'];
  //$password = $_POST['password'];
 
 $mail = $_SESSION['userEmail'];
 		
     	$sql= "SELECT users.userName, users.id, users.userEmail, result.result, result.course_id
FROM users
INNER JOIN result ON users.id = result.id;"; 
     $result = mysqli_query($con,$sql);
 

     	echo "<table border='1'>
     <tr>
	   <th><h2>ID</h2></th>
	   <th><h2>Student Name</h2></th>
	   <th><h2>Course ID</h2></th>
	   <th><h2>Course Email</h2></th>
	   <th><h2>Result</h2></th>
	   <!--<th><h2>links</h2></th>-->
	   <!--<th><h2>course_id</h2></th>-->
	   <!--<th><h2>exam_date</h2></th>-->
	 </tr>";
	 while($row = mysqli_fetch_array($result)){
	 echo "<tr>";

	 echo "<td>"."<h2>".$row['id']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['userName']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['course_id']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['userEmail']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['result']."</h2>"."</td>";
	 
	 echo "</tr>";
 }

	 echo "</table>";
}

?>

</body>
</html>