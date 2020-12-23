<?php
$server="localhost";
$user="root";
$pw="";
$db="lamma";
$conn=new mysqli($server,$user,$pw,$db);
if($conn->connect_error){
	die("unable to connect".$conn->connect_error);
}
?>