<?php 
session_start();
if(strlen($_SESSION['id'])==0){
	header('location:applypage.php');
}
else{
require_once('config.php');
include_once("headerlogin.php");

?>

<!doctype html>
<html>
<body>
<style>
input{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}
.container {
  padding: 130px;
}

</style>
<div class="col-1"></div>
<div class="col-11">
<?php



if(isset($_POST['add'])){

	$Employee = $_POST['eid'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$address = $_POST['adr'];
    $state = $_POST['state'];
    $gender = $_POST['gender'];
    $nationality = $_POST['ntn'];
    $primary = $_POST['npri'];
    $secondary = $_POST['nscd'];
    $tertiary = $_POST['nint'];
    $pcert = $_POST['pcert'];
    $scert = $_POST['scert'];
    $tcert = $_POST['tcert'];
    $demp = $_POST['demp'];
    $memp = $_POST['memp'];
    $yemp = $_POST['yemp'];
    $rank = $_POST['rank'];
    $level = $_POST['level'];
	
	mysqli_query($con,"INSERT INTO pass(eid,fname,lname,adr,state,gender,ntn,npri,nscd,nint,pcert,scert,,tcert,demp,memp,yemp,rank,level) 
	VALUES('$Employee','$fname','$lname','$address','$state','$gender','$nationality','$primary','$secondary','$tertiary','$pcert','$scert','$tcert','$demp','$memp','$yemp','$rank','$level')") or die('UNABLE TO ADD DETAILS');

	header('location:index.php');

?>
<center><h2>APPLICATION PORTAL</h2></center>
<div class="container">
	<form action="application.php" method="post">
   
	  <div class="form-group">
	    <label for="employee">Employee id</label><br>
	    <input type="text" name="eid" required class="form-control">
	    
	  
	  <div class="form-group">
	    <label for="fname">First  name</label><br>
	    <input type="text" name="fname" required id="phone" >
	  </div>
	  </div>
		<div class="form-group">
		    <label for="lname">Last name</label><br>
		    <input type="text" name="lname" required class="form-control" id="address" aria-describedby="addHelp" placeholder="Enter Address">
		    
		</div>
        <div class="form-group">
			<label for="gender">Gender</label><br>
			<input type="text" name="gender" required class="form-control" id="rent" placeholder="Enter Rent">
		</div>
		<div class="form-group">
			<label for="adr">Address</label><br>
			<input type="text" name="adr" required class="form-control" id="rent" placeholder="Enter Rent">
		</div>
		<div class="form-group">
			<label for="state">State of origin</label><br>
			<input type="text" name="state" required class="form-control">
		</div>
        <div class="form-group">
			<label for="ntn">Nationality</label><br>
			<input type="text" name="ntn" required class="form-control">
		</div>
        <div class="form-group">
			<label for="primary">Name of Primary School</label><br>
			<input type="text" name="npri" required class="form-control">
		</div>
        <div class="form-group">
			<label for="Secondary">Name of Secondary School</label><br>
			<input type="text" name="nscd" required class="form-control">
		</div>
        <div class="form-group">
			<label for="Tertiary">Name of Tertiary School</label><br>
			<input type="text" name="nint" required class="form-control">
		</div>
        
        <div class="form-group">
			<label for="pcert">Name Of Primary Certificate</label><br>
			<input type="text" name="pcert" required class="form-control">
		</div>
        <div class="form-group">
			<label for="scert">Name Of Secondary Certificate</label><br>
			<input type="text" name="scert" required class="form-control">
		</div>
        <div class="form-group">
			<label for="tcert">Name Of Tertiary Certificate</label><br>
			<input type="text" name="tcert" required class="form-control">
		</div>
        <div class="form-group">
			<label for="demp">Day employed</label><br>
			<input type="text" name="demp" required class="form-control">
		</div>
        <div class="form-group">
			<label for="memp">Month employed</label><br>
			<input type="text" name="memp" required class="form-control">
		</div>
        <div class="form-group">
			<label for="yemp">Year employed</label><br>
			<input type="text" name="yemp" required class="form-control">
		</div>
        <div class="form-group">
			<label for="rank">Rank</label><br>
			<input type="text" name="rank" required class="form-control">
		</div>
        <div class="form-group">
			<label for="level">Level</label><br>
			<input type="text" name="level" required class="form-control">
		</div>
        

		
	  <button type="submit" name="add" class="btn btn-primary">Submit</button>
	</form>
</div>
    <?php include_once('bottom.php')?>
    </div>
    <div class="col-1"></div>

    
    </body>
    </html>

<?php } ?>