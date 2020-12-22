<?php 
require ("config.php");
include_once("header.php");

?>
<!doctype html>
<html>
<head>
<title>insurance company</title>

			<table 	width="100%"cellpadding="10">
			<tr align="center" style="background:linear-gradient(black 5%,red 100%);color:white;">
			<td colspan="13" >COMPREHENSIVE LIST OF RECORDS</td>
			</tr>
			<tr style="background:linear-gradient(red 5%,black 100%);color:white;padding:10px;" align="center">
        <th>NAME OF PRIMARY SCHOOL</th>
        <th>NAME OF SECONDARY SCHOOL</th>
	<th>NAME OF TERTIARY SCHOOL</th>
        <th>PRIMARY CERTIFICATE</th>
        <th>SECONDARY CERTIFICATE</th>
        <th>TERTIARY CERTIFICATE</th>
      
      </tr>
			<tr align="center" style="color:white;padding:10px;">
				<td><?php
	$id=$_GET['id'];
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$in="SELECT * FROM pass WHERE id=$id";
	$query=mysql_query($in);
	$rows=mysql_fetch_array($query);
		echo $rows['npri']."<br />";
	?></td>
				<td><?php
	$id=$_GET['id'];
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$in="SELECT * FROM pass WHERE id=$id";
	$query=mysql_query($in);
	$rows=mysql_fetch_array($query);
		echo $rows['nscd']."<br />";
	?></td>		<td><?php
	$id=$_GET['id'];
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$in="SELECT * FROM pass WHERE id=$id";
	$query=mysql_query($in);
	$rows=mysql_fetch_array($query);
		echo $rows['nint']."<br />";
	?></td>		<td><?php
	$id=$_GET['id'];
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$in="SELECT * FROM pass WHERE id=$id";
	$query=mysql_query($in);
	$rows=mysql_fetch_array($query);
		echo $rows['pcert']."<br />";
	?></td>		<td><?php
	$id=$_GET['id'];
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$in="SELECT * FROM pass WHERE id=$id";
	$query=mysql_query($in);
	$rows=mysql_fetch_array($query);
		echo $rows['scert']."<br />";
	?></td>		<td><?php
	$id=$_GET['id'];
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$in="SELECT * FROM pass WHERE id=$id";
	$query=mysql_query($in);
	$rows=mysql_fetch_array($query);
		echo $rows['tcert']."<br />";
	?></td>			</tr>
			</table>
			<br />
			<br /><hr />
			<table align="center" cellpadding="10" width="600">
	
			</table>
			
						<br /><br /><hr />
			<hr />
			copyright &copy; Lawal mary 2019
		</center>
		</div>
</body>
</html>