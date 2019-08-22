<?php

  $name = $_POST['name'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];
  $pro = $_POST['pro'];

  $photo= $_FILES['photo']['name'];

  $phototempname = $_FILES['photo']['tmp_name'];

  move_uploaded_file($phototempname,$photo);

  //echo $name . " " . $dob . " " . $email . " " . $pro ;
  $con = mysql_connect("localhost","root","");

  mysql_select_db("tennis",$con);

  $sql = "insert into player values ('','$name','$dob','$photo','$email','$pro');";

  //echo $sql ;

  $result = mysql_query($sql , $con);
  
  if($result){
      header("Location:listreader.php");
  }else{
      echo "Insert failure";
  }

?>