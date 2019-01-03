<?php
require_once('database-connection.php');
$first_title= $_POST['title'];
$first_title_span= $_POST['price'];
$second_title= $_POST['times'];

if(!isset($_POST['pic'])){
  $upload=$_FILES['pic'];
  $after=explode('.',$upload['name']);
  $exten=$after[1];
  $al_format=array('jpg','jpeg','JPG','png','png');
  if(in_array($exten,$al_format)){
    if($upload['size']<=50000000)
    {
      $query = "INSERT INTO testimonial (name, position,contend)VALUES ('$first_title', '$first_title_span', '$second_title')";
    $result = mysqli_query($database_connection, $query);

      $id=mysqli_insert_id($database_connection);
      $filenew=mysqli_insert_id($database_connection).'.'.$exten;
      $newfilelocation='test-pic/'.$filenew;
        move_uploaded_file($upload['tmp_name'],$newfilelocation);
        $query2="UPDATE testimonial SET pic='$filenew' WHERE id=$id";
        mysqli_query($database_connection,$query2);

       header('location: testimonial.php');

    }else
    {
     echo "Your image size is more than mb";
    }

  }else
  {
  echo "Your image format is not supported";
  }

}else{
  echo "plz give pic";
}




 ?>
