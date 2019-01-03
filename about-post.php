<?php
require_once('database-connection.php');

$about_tittle=$_POST['headword'];
$banner_details=$_POST['title'];
$banner_text=$_POST['mytext'];


//header('location: banner.php');
$upload_img=$_FILES['pic'];

$after_explode=explode('.',$upload_img['name']);
$allowed_format=array('jpg','png','jpeg');
$extension=$after_explode[1];
if(in_array($extension, $allowed_format)){
  if($upload_img['size']<=500000){
      $banner_info="INSERT INTO about(subhead, title, mytext) VALUES (' $about_tittle','$banner_details','$banner_text')";
       mysqli_query($database_connection, $banner_info);
      $new_file_name=mysqli_insert_id($database_connection).'.'.$extension;
      $new_file_location='evt-pic/'.$new_file_name;
      $id=mysqli_insert_id($database_connection);
      move_uploaded_file($upload_img['tmp_name'],$new_file_location);
      $update_query="UPDATE about SET pic='$new_file_name' WHERE id=$id";
         mysqli_query($database_connection,$update_query);

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
