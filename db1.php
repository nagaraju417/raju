<?php
 echo "jjl";
session_start();
echo  $dbname=$_SESSION['dbname'];   
 
	 mysql_connect("localhost","root","");

mysql_select_db("$dbname"); 

  
?>






