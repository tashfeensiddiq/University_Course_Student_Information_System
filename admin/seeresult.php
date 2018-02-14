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
            <p>GET DETAILS<p>
 <form action="seeresult.php" method="post" ><br/>
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
     	$sql_1= "SELECT * FROM `result` ;";
     	$result = mysqli_query($con,$sql_1); 
     	//echo'hi';
     	echo "<table border='1'>
     <tr>
	   <th><h2>COURSE ID</h2></th>
	   <th><h2>ID</h2></th>
	   <th><h2>RESULT</h2></th>
	   <!--<th><h2>links</h2></th>-->
	   <!--<th><h2>course_id</h2></th>-->
	   <!--<th><h2>exam_date</h2></th>-->
	 </tr>";
	 while($row = mysqli_fetch_array($result)){
	 echo "<tr>";
	 echo "<td>"."<h2>".$row['course_id']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['id']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['result']."</h2>"."</td>";
	 //echo "<td>"."<h2>".$row['course']."</h2>"."</td>";
	 //echo "<td>"."<h2>".$row['links']."</h2>"."</td>";
	 //echo "<td>"."<h2>".$row['course_id']."</h2>"."</td>";
	 //echo "<td>"."<h2>".$row['exam_date']."</h2>"."</td>";
	 
	 echo "</tr>";
 }
 echo "</table>";
     }else{
     	$sql= "SELECT * FROM `result` where id='$search';"; 
     $result = mysqli_query($con,$sql);
     	echo "<table border='1'>
     <tr>
	   <th><h2>ID</h2></th>
	   <th><h2>COURSE ID</h2></th>
	   <th><h2>RESULT</h2></th>
	   <!--<th><h2>links</h2></th>-->
	   <!--<th><h2>course_id</h2></th>-->
	   <!--<th><h2>exam_date</h2></th>-->
	 </tr>";
	 while($row = mysqli_fetch_array($result)){
	 echo "<tr>";
	 echo "<td>"."<h2>".$row['id']."</h2>"."</td>";
	 echo "<td>"."<h2>".$row['course_id']."</h2>"."</td>";
	 
	 echo "<td>"."<h2>".$row['result']."</h2>"."</td>";
	 
	 echo "</tr>";
 }
 echo "</table>";}
	 
}

?>
</body>
</html>