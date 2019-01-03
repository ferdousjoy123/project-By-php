<?php
session_start();
require_once('database-connection.php');
$first_title= $_POST['name'];
$first_title_span= $_POST['email'];
$second_title= $_POST['phn'];
$second_title_span = $_POST['msg'];


$bannerQuery = "INSERT INTO msg(name, email, phn, message)VALUES ('$first_title', '$first_title_span', '$second_title','$second_title_span')";

$result = mysqli_query($database_connection, $bannerQuery);
$_SESSION['msg']='ok';
header('location: Ferdous-joy.php');




 ?>
