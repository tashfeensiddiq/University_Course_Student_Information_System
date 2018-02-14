<head>
    <meta charset="UTF-8">
    <title>Admin Panel css html</title>




    <link rel="stylesheet" href="side.css">




</head>

<body>

    <div id="header">
<h1>TEACHER DASHBOARD</h1>

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
                    <a class="selected" href="seeresult.php">SEE RESULT</a>
                </li>


            </ul>



        </div>

        <div class="content">
            <h1>Dashboard</h1>
            <p>GET DETAILS</p>


 
 <form action="" method="post" ><br/>

 <!--password:<input type="password" name="password"/><br/>-->
 <input type="submit" name="search" value="SHOW RESULT">
  </form>
<?php

	 require('dbconnect.php');
session_start();


if(isset($_POST['search'])){
  $search = $_POST['search'];
  //$password = $_POST['password'];
 
 $initial = $_SESSION['initial'];
 		
     	$sql= "SELECT course_id FROM `faculty` where initial='$initial';"; 
     $result = mysqli_query($con,$sql);
 
echo $initial;

     	echo "<table border='1'>
     <tr>
	   <th><h2>COURSE ID</h2></th>
	   <!--<th><h2>links</h2></th>-->
	   <!--<th><h2>course_id</h2></th>-->
	   <!--<th><h2>exam_date</h2></th>-->
	 </tr>";
	 while($row = mysqli_fetch_array($result)){
	 echo "<tr>";
	 
	 echo "<td>"."<h2>".$row['course_id']."</h2>"."</td>";
	 
	 echo "</tr>";
 }
 echo "</table>";
	 
}

elseif (condition) {
	# code...
}

?>
</body>
</html>