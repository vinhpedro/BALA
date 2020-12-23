<?php session_start(); ?>
<html>
<head>
<title>web page</title>
<style type="text/css">
.header{
}
a{
	text-decoration:none;
	color:green;
	/font-weight:bold;
}
#write-up{
	text-align:justify;
	/text-shadow:yellow 2px 2px;
	text-transform:capitalize;
}
/input[type="text"]{
	border-right:outset yellow 4px;
	border-left:outset yellow 4px;
}
.footer{
	text-transform:capitalize;
	text-align:center;
	color:yellow;
	clear:both;
}
#drop:first-letter{
	float:left;
	line-height:3px;
	color:green;
	padding:2px;
	font-size:50px;
}
.frm{
	width:75%;
	text-transform:capitalize;
	margin:auto;
}
.guide{
	background:green;
	text-align:center;
	padding:5px;
	color:white;
}
h2{
	background:green;
	color:white;
}
.menu{
	width:22%;
	float:right;
}
input[type="submit"]{
	width:150px;
}

#src{
	background:yellow;
}
#srch{
	width:80%;
	margin:auto;
}
.success{
	width:50%;
	text-align:center;
	margin:auto;
}
#top{
	background:gold;
	color:black;
	padding:10px;
}
#hold{
	/background:url(lm.jpg);
	/color:green;
	font-size:18px;
}
#more{
	color:blue;
}
#more:hover{
	text-decoration:underline;
}
</style>
</head>
<body>
<div class="header">
<img src="police.jpg" width="100%">
</div>
<table border="0" align="center">
	<tr>
		<td>&nbsp; <a href="report.php"><img src="police.jpg" width="50" height="50"></a></td>

	</tr>
</table><hr />
<table align='center' cellspacing='2' cellpadding='10' id='hold'>

<tr id='top' align='center'>
	<td>S/N</td>
	<td>Personal id</td>
	<td>First name</td>
	<td>Last name</td>
	<td>Other name</td>
	<td>State deployed</td>
	<td>Location</td>
	<td>Department</td>
	<td>Designation</td>
	<td>Remark</td>
</tr>
<tr align='center'>
	<td>
<span>
<?php
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$out="SELECT * FROM pass";
	$query=mysql_query($out);
	$rows=0;
	do{
	echo $rows['id'].'<br />';
	}while($rows=mysql_fetch_array($query));
?>
</span>
</td>

	<td>
<span>
<?php
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$out="SELECT * FROM pass";
	$query=mysql_query($out);
	$rows=0;
	do{
	echo $rows['eid'].'<br />';
	}while($rows=mysql_fetch_array($query));
?>
</span>
</td>

	
	<td>
<span>
<?php
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$out="SELECT * FROM pass";
	$query=mysql_query($out);
	$rows=0;
	do{
	echo $rows['fname'].'<br />';
	}while($rows=mysql_fetch_array($query));
?>
</span>
</td>

	<td>
<span>
<?php
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$out="SELECT * FROM pass";
	$query=mysql_query($out);
	$rows=0;
	do{
	echo $rows['lname'].'<br />';
	}while($rows=mysql_fetch_array($query));
?>
</span>

</td>

	<td>
<span>
<?php
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$out="SELECT * FROM pass";
	$query=mysql_query($out);
	$rows=0;
	do{
	echo $rows['gender'].'<br />';
	}while($rows=mysql_fetch_array($query));
?>
</span>

</td>



<td>
<span>
<?php
$con=mysql_connect("localhost","root","");
$sql=mysql_select_db("lamma");
$out="SELECT * FROM pass";
$query=mysql_query($out);
$rows=0;
do{
echo $rows['state'].'<br />';
}while($rows=mysql_fetch_array($query));
?>
</span>
</td>

	<td>
<span>
<?php
$con=mysql_connect("localhost","root","");
$sql=mysql_select_db("lamma");
$out="SELECT * FROM pass";
$query=mysql_query($out);
$rows=0;
do{
echo $rows['ntn'].'<br />';
}while($rows=mysql_fetch_array($query));
?>
</span>
</td>


	<td>
<span>
<?php
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$out="SELECT * FROM pass";
	$query=mysql_query($out);
	$rows=0;
	do{
	echo $rows['demp'].'<br />';
	}while($rows=mysql_fetch_array($query));
?>
</span>

</td>



	<td>
<span>
<?php
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$out="SELECT * FROM pass";
	$query=mysql_query($out);
	$rows=0;
	do{
	echo $rows['memp'].'<br />';
	}while($rows=mysql_fetch_array($query));
?>
</span>

</td>
	<td>
<span>
<?php
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$out="SELECT * FROM pass";
	$query=mysql_query($out);
	$rows=0;
	do{
	echo $rows['yemp'].'<br />';
	}while($rows=mysql_fetch_array($query));
?>
</span>

</td>
	<td>
<span>
<?php
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$out="SELECT * FROM pass";
	$query=mysql_query($out);
	$rows=0;
	do{
	echo $rows['level'].'<br />';
	}while($rows=mysql_fetch_array($query));
?>
</span>

</td>
	<td>
<span>
<?php
	$con=mysql_connect("localhost","root","");
	$sql=mysql_select_db("lamma",$con);
	$out="SELECT * FROM pass";
	$query=mysql_query($out);
	$rows=0;
	do{
	echo $rows['rank'].'<br />';
	}while($rows=mysql_fetch_array($query));
?>
</span>

</td>









</tr>

</table>
</body>
</html>