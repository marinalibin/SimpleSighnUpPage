<?php
//these are defined as constants
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mealsonwheels');
//define('DB_NAME','productdemo');
	
global $con;
	  $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS, DB_NAME);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
?>
