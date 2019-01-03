<?php
require_once('database-connection.php');
$first_title_span= $_POST['headword'];
$second_title= $_POST['title'];
$second_title_span = $_POST['mytext'];

$bannerQuery = "INSERT INTO contact (head, title,contend) VALUES ('$first_title_span', '$second_title','$second_title_span')";

$result = mysqli_query($database_connection, $bannerQuery);
header('location: contact.php');




 ?>
