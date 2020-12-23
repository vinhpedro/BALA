<?php 
require ("config.php");
include_once("header.php");

?>
<!doctype html>
<html>

			<table>
				<tr><form action="" method="POST">
					<td><a href="menu.php"><input type="button" name="new" value="return"></a></td>
				</tr></form>
			</table><hr />
			<br /><br /><br />
			
			
			<?php

$host="localhost";
$user="root";
$pw="";
$db="lamma";

$conn=new mysqli($host, $user, $pw,$db);
if($conn->connect_error){
    die("UNABLE TO CONNECT".$conn->connect_error);
}


$sql=("SELECT id,fname,lname,gender,state,ntn,demp,memp,yemp,level,rank FROM pass");
$result=$conn->query($sql);

if($result->num_rows>0){
	echo "<table>";
	echo "<tr><th>Employee id</th>
<th>First name</th>
<th>Last name</th>
<th>Gender</th>
<th>State</th>
<th>Nationality</th>
<th>Day employed</th>
<th>Month employed</th>
<th>Year employed</th>
<th>Level</th>
<th>Rank</th></tr>";
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row['id']."</td><td>".$row['fname']."</td><td>".$row['lname']."</td><td>".$row['gender']."</td><td>".$row['state']."</td><td>".$row['ntn']."</td><td>".$row['demp']."</td><td>".$row['memp']."</td><td>".$row['yemp']."</td><td>".$row['level']."</td><td>".$row['rank']."</td></tr>";
		echo "</table>";
    }
}else{
    echo "0 records returned";
}
?> 

			</table>
			<br />
			<br /><hr />
			<table align="center" cellpadding="10" width="600">
	
			</table>
			
						<br /><br />
			<?php 
    include_once("bottom.php")
    ?>
		</div>
</body>
</html>