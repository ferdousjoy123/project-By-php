<?php
require_once('database-connection.php');
$one=$_POST['logotext'];
$two=$_POST['contact'];
$th=$_POST['context'];
$fr=$_POST['email'];
$fi=$_POST['phn'];
$six=$_POST['link'];
$seve=$_POST['link1'];
$ei=$_POST['link2'];



//header('location: banner.php');
$upload_img=$_FILES['pic'];

$after_explode=explode('.',$upload_img['name']);
$allowed_format=array('jpg','png','jpeg');
$extension=$after_explode[1];
if(in_array($extension, $allowed_format)){
  if($upload_img['size']<=500000){
      $banner_info="INSERT INTO footer (logotext, contactTitle, adreess, email, phn, linktitle, link1, link2) VALUES ('$one','$two','$th','$fr','$fi','$six','$seve','$ei')";
       mysqli_query($database_connection, $banner_info);
      $new_file_name=mysqli_insert_id($database_connection).'.'.$extension;
      $new_file_location='foot-pic/'.$new_file_name;
      $id=mysqli_insert_id($database_connection);
      move_uploaded_file($upload_img['tmp_name'],$new_file_location);
      $update_query="UPDATE footer SET pic='$new_file_name' WHERE id=$id";
         mysqli_query($database_connection,$update_query);
         header('location: foot.php');

  }
  else{
       echo"your file size is more than 5mb";
  }

}else
{
echo"this format is not allowd";
}

//print_r($after_explode);

?>
