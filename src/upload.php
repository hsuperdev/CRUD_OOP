<?php

  if(isset($_FILES['avatar'])){
      $errors= array();
      $file_name = $_FILES['avatar']['name']; //avartar.jpg
      $file_size =$_FILES['avatar']['size']; //

      $file_tmp =$_FILES['avatar']['tmp_name'];

      $file_type=$_FILES['avatar']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['avatar']['name']))); //extension picture
      $extensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }

      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }

?>
