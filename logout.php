<? php 

require('dbconnect.php');
session_start();
session_destroy();
header("Location: /signin.php");


?>