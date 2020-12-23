<?php 
require ("config.php");
include_once("header.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/police.css">

</head>


<body>

<style>
.container{
  margin-top:-3%;
display: flex;
  flex-direction: row;
  background-color: #EDE8E8;
  height:5%;
}
.container>img{
  
  margin: 10px;
  display:inline-block;
}

</style>
<div class="col-1">
</div>
<div class="col-11">
<marquee direction="left" class="container">
<img src="pix/c1.jpg" width="30%" ></img>
<img src="pix/c2.jpeg" width=35%" ></img>
<img src="pix/c3.jpeg" width="35%" ></img>
<img src="pix/c4.jpeg" width="35%"></img>
<img src="pix/c5.jpeg" width="35%"></img>
<img src="pix/c6.jpeg" width="35%"></img>
<img src="pix/c7.jpeg" width="35%"></img>
<img src="pix/c8.jpeg" width="35%"></img>
</marquee>




    <?php 
    include_once("bottom.php")
    ?>
</div>
<div class="col-1"></col>
</body>
</html>