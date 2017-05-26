<?php
error_reporting(~E_ALL);
session_start();
 $dbname=$_SESSION['dbname'];   
 
	 mysql_connect("localhost","root","");

mysql_select_db("$dbname"); 
 

?>






