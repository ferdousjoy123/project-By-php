<?php
require_once('database-connection.php');
$head=$_POST['headword'];
$title=$_POST['title'];
$name=$_POST['name'];
$contend=$_POST['mytext'];

if(!empty($_FILES['pic']['name'])){
  $upload=$_FILES['pic'];
  $after=explode('.',$upload['name']);
  $exten=$after[1];
  $al_format=array('jpg','jpeg','JPG','png','png');
  if(in_array($exten,$al_format)){
    if($upload['size']<=50000000)
    {
      $query="INSERT INTO blog (head, title, name, contend) VALUES ('$head','$title','$name','$contend')";
        mysqli_query($database_connection,$query);
      $id=mysqli_insert_id($database_connection);
      $filenew=mysqli_insert_id($database_connection).'.'.$exten;
      $newfilelocation='blog-pic/'.$filenew;
        move_uploaded_file($upload['tmp_name'],$newfilelocation);
        $query2="UPDATE blog SET pic='$filenew' WHERE id=$id";
        mysqli_query($database_connection,$query2);
           header('location: blog.php');

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
