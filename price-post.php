<?php
require_once('database-connection.php');
$first_title= $_POST['title'];
$first_title_span= $_POST['price'];
$second_title= $_POST['times'];
$second_title_span = $_POST['list'];
$second_title_span2= $_POST['status'];

$bannerQuery = "INSERT INTO price(title, price, length, list, status)VALUES ('$first_title', '$first_title_span', '$second_title','$second_title_span', '$second_title_span2')";

$result = mysqli_query($database_connection, $bannerQuery);
header('location: price.php');




 ?>
