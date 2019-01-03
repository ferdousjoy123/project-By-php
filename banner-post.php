<?php
require_once('database-connection.php');
$first_title= $_POST['first_title'];
$first_title_span= $_POST['first_title_span'];
$second_title= $_POST['second_title'];
$second_title_span = $_POST['second_title_span'];

$bannerQuery = "INSERT INTO banner(firsthead, firstheadspan,secondhead, secondheadspan) VALUES ('$first_title', '$first_title_span', '$second_title','$second_title_span')";

$result = mysqli_query($database_connection, $bannerQuery);
header('location: banner.php');




 ?>
