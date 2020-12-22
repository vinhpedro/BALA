<?php
session_start();
if(strlen($_SESSION['id']) == 0){
  header('location:indexnolog.php');
}else{
  header('location:indexlogin.php');
}
?>