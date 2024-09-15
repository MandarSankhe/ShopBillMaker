<?php
//session_start();


//  8980277 Mandar Sankhe
//  8961944 Susmi Rani
//  8969031 Dhruvinkumar Jayani
$host="localhost:3306";
$username="root";
$pass="";
$db="thenormalizers_computershop";
 
$conn=mysqli_connect($host,$username,$pass,$db);
if(!$conn){
	die("Database connection error");
}
 
 
?>