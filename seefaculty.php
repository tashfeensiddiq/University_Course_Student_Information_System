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

        

 
 <form action="" method="post" ><br/>
 put course id to see faculty:<input type="text" name="search"/><br/>
 <!--password:<input type="password" name="password"/><br/>-->
 <input type="submit" name="submit" value="search">
  </form>
<?php

     require('dbconnect.php');
session_start();
if(isset($_POST['search'])){
  $search = $_POST['search'];
  //$password = $_POST['password'];
  
 
 
        $sql= "SELECT * FROM `faculty` where course_id='$search';"; 
     $result = mysqli_query($con,$sql);
        echo "<table border='1'>
     <tr>
       <th><h2>NAME</h2></th>
       <th><h2>COURSE ID</h2></th>
       <th><h2>INITIAL</h2></th>
       <!--<th><h2>links</h2></th>-->
       <!--<th><h2>course_id</h2></th>-->
       <!--<th><h2>exam_date</h2></th>-->
     </tr>";
     while($row = mysqli_fetch_array($result)){
     echo "<tr>";
     echo "<td>"."<h2>".$row['name']."</h2>"."</td>";
     echo "<td>"."<h2>".$row['course_id']."</h2>"."</td>";
     
     echo "<td>"."<h2>".$row['initial']."</h2>"."</td>";
     
     echo "</tr>";
 }
 echo "</table>";
     
}

?>
</body>
</html>