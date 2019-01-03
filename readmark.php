<?php
require_once('database-connection.php');

$id=$_GET['id'];
$op="UPDATE msg SET status=2 WHERE id=$id";
mysqli_query($database_connection, $op);
header('location: view_all_msg.php');


?>
