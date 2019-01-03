<?php
require_once('database-connection.php');
$id=$_GET['id'];
$qurt="DELETE from msg WHERE id=$id";
mysqli_query($database_connection,$qurt);
header('location: view_all_msg.php')


?>
