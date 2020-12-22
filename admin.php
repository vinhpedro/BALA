<?php 
require ("config.php");

?>

<!doctype html>
<html>
<body>
<?php


if(isset($_POST['login']))
{
$password=$_POST['password'];
$username=$_POST['username'];
$ret= mysqli_query($conn,"SELECT * FROM staff WHERE username='$username' AND password='$password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
	header("location:menu.php");
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
exit();
}
}
?>

<div class="col-1"></div>
<div class="col-11">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
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

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 10%;
  border-radius: 50%;
}

.container {
  padding: 130px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
</style>
</head>
<body>

<center><h2>ADMIN LOGIN</h2></center>

<form action="" method="POST">
  <div class="imgcontainer">
    <img src="nig.gif" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="login">Login</button>
    
  </div>

 
</form>



    </div>
    <div class="col-1"></div>
    </body>
    </html>