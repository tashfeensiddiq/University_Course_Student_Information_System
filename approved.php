<!DOCTYPE>
<html>




    <link rel="stylesheet" href="side.css">




        <div class="content">
            <h1>Dashboard</h1>
            <p>GET DETAILS</p>
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
                    <a class="selected" href="seefaculty.php">My Courses</a>
                </li>
                

            </ul>

        </div>


 
 <form action="" method="post" ><br/>
 put YOUR ID TO SEE STATUS OF COURSE:<input type="text" name="search"/><br/>
 <!--password:<input type="password" name="password"/><br/>-->
 <input type="submit" name="submit" value="search">
  </form>
<?php

     require('dbconnect.php');
session_start();
if(isset($_POST['search'])){
  $search = $_POST['search'];
  //$password = $_POST['password'];
  
 
 
        $sql= "SELECT * FROM `request` where id='$search';"; 
     $result = mysqli_query($con,$sql);
        echo "<table border='1'>
     <tr>
       <th><h2>NAME</h2></th>
       <th><h2>COURSE ID</h2></th>
       <th><h2>STATUS</h2></th>
       <!--<th><h2>links</h2></th>-->
       <!--<th><h2>course_id</h2></th>-->
       <!--<th><h2>exam_date</h2></th>-->
     </tr>";
     while($row = mysqli_fetch_array($result)){
     echo "<tr>";
     echo "<td>"."<h2>".$row['name']."</h2>"."</td>";
     echo "<td>"."<h2>".$row['course_id']."</h2>"."</td>";
     
     echo "<td>"."<h2>".$row['status']."</h2>"."</td>";
     
     echo "</tr>";
 }
 echo "</table>";
     
}

?>
</body>
</html>