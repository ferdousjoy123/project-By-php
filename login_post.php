<?php
session_start();
require_once('database-connection.php');
$name=$_POST['name'];
$pass=$_POST['pass'];
$regis_query="SELECT count(*) as total FROM registration WHERE name='$name' and password='$pass'";
$op=mysqli_query($database_connection,$regis_query);
 $after_assoc=mysqli_fetch_assoc($op);
 if($after_assoc['total']==1){
     $_SESSION['log']="yes";
 header('location: Ferdous-Joy.php');
}else
{
  echo "your email or password do not match";
}


 ?>
