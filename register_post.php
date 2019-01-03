<?php
require_once('database-connection.php');
$first_title= $_POST['name'];
$pass=$_POST['pass'];

$bannerQuery = "INSERT INTO registration (name,password)VALUES ('$first_title', '$pass')";

$result = mysqli_query($database_connection, $bannerQuery);

header('location: registraion.php');




 ?>
