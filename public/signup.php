<?php
require_once('config.php');
include_once('header.php');
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


<form action="" method="POST">
  <div class="imgcontainer">
    <img src="nig.gif" alt="Avatar" class="avatar">
  </div>
  <center><h2>REGISTRATION</h2></center>


  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="signup">REGISTER</button>
    
  </div>

 
</form>
<?php
if(isset($_POST['signup'])){
    $username=$_POST['username'];
    $pw=$_POST['password'];
    $insert="INSERT INTO staff VALUES(NULL,'{$username}','{$pw}')";
    $insertit=mysqli_query($conn,$insert);

    if(!insertit){
        echo '<script>alert("there was an error")</script>';
    }else{
       header('location:signupwelcome.php');

    }
}


include_once('bottom.php')
?>
</div>
<div class="col-1"></div>