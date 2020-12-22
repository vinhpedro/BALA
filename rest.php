
<html>
<head>
<title>insurance company</title>
<style type="text/css">
.holder{
		width:100%;
		margin:auto;
		background:linear-gradient(red 5%,black 100%);
		color:white;
}
.header{
		background:linear-gradient(black 5%,red 100%);
		/color:white;
		width:100%;
		text-align:center;
		padding:10px;
}
.write-up{
		background:linear-gradient(red 5%,black 100%);
		background:black;
		color:white;
		text-align:center;
		padding:10px;
}
input[type="submit"]{
		background:linear-gradient(red 5%,black 100%);
		border-radius:30px;
		width:120px;
		color:white;
}
input[type="submit"]:hover{
		background:linear-gradient(black 5%,red 100%);
		color:white;
		width:120px;
}
legend{
		background:black;
		color:white;
		padding:5px;
}
fieldset{
		text-align:left;
}
a{
	color:white;
}
</style>
</head>
<body><br />
		<div class="holder">
			<div class="header"><br />
		<h1>NIGERIAN POLICE COLLEGE</h1>
		<img src="nigeria.jpg" width="100" height="100" align="left"></img>
			<img src="police.jpeg" width="100" height="100" align="right"></img>
			</div>
			<div class="write-up">
			KADUNA STATE
			</div><hr />
			<center><marquee width="50%" direction="right">welcome to police recruitment</marquee><marquee width="50%" direction="left">welcome to police recruitment</marquee>
			<br /><hr />
			<table>
				<tr>
					<td><a href="menu.php"><input type="submit" name="new" value="return"></a></td>
				</tr>
			</table><hr />
			<br /><br /><br />
			
			<table 	width="100%"cellpadding="10">
			<tr align="center" style="background:linear-gradient(black 5%,red 100%);color:white;">
			<td colspan="13" >individual records</td>
			</tr>
			<tr style="background:linear-gradient(red 5%,black 100%);color:white;padding:10px;" align="center">
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
	<th>GENDER</th>
        <th>STATE</th>
        <th>NATIONALITY</th>
        <th>DAY EMPLOYED</th>
        <th>MONTH EMPLOYED</th>
        <th>YEAR EMPLOYED</th>
        <th>LEVEL</th>
        <th>RANK</th>
      </tr>
			<tr align="center" style="color:white;padding:10px;">
				<td><?php
	$id=$_GET['id'];
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$in="SELECT * FROM pass WHERE id=$id";
	$query=mysql_query($in);
	$rows=mysql_fetch_array($query);
		echo $rows['fname']."<br />";
	?></td>
				<td><?php
	$id=$_GET['id'];
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$in="SELECT * FROM pass WHERE id=$id";
	$query=mysql_query($in);
	$rows=mysql_fetch_array($query);
		echo $rows['lname']."<br />";
	?></td>		<td><?php
	$id=$_GET['id'];
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$in="SELECT * FROM pass WHERE id=$id";
	$query=mysql_query($in);
	$rows=mysql_fetch_array($query);
		echo $rows['gender']."<br />";
	?></td>		<td><?php
	$id=$_GET['id'];
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$in="SELECT * FROM pass WHERE id=$id";
	$query=mysql_query($in);
	$rows=mysql_fetch_array($query);
		echo $rows['state']."<br />";
	?></td>		<td><?php
	$id=$_GET['id'];
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$in="SELECT * FROM pass WHERE id=$id";
	$query=mysql_query($in);
	$rows=mysql_fetch_array($query);
		echo $rows['ntn']."<br />";
	?></td>		<td><?php
	$id=$_GET['id'];
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$in="SELECT * FROM pass WHERE id=$id";
	$query=mysql_query($in);
	$rows=mysql_fetch_array($query);
		echo $rows['demp']."<br />";
	?></td>		<td><?php
	$id=$_GET['id'];
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$in="SELECT * FROM pass WHERE id=$id";
	$query=mysql_query($in);
	$rows=mysql_fetch_array($query);
		echo $rows['memp']."<br />";
	?></td>		<td><?php
	$id=$_GET['id'];
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$in="SELECT * FROM pass WHERE id=$id";
	$query=mysql_query($in);
	$rows=mysql_fetch_array($query);
		echo $rows['yemp']."<br />";
	?></td>		<td><?php
	$id=$_GET['id'];
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$in="SELECT * FROM pass WHERE id=$id";
	$query=mysql_query($in);
	$rows=mysql_fetch_array($query);
		echo $rows['level']."<br />";
	?></td>		<td><?php
	$id=$_GET['id'];
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$in="SELECT * FROM pass WHERE id=$id";
	$query=mysql_query($in);
	$rows=mysql_fetch_array($query);
		echo $rows['rank']."<br />";
	?></td>					</tr>
			</table>
			<br />
			<br /><hr />
			<table align="center" cellpadding="10" width="600">
	
			</table>
			
						<br /><br /><hr />
			<hr />
			copyright &copy; mary 2019
		</center>
		</div>
</body>
</html>