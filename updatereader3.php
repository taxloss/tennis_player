<?php
  
  $rid=$_POST['rid'];
  $name = $_POST['name'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];
  $pro = $_POST['pro'];

  $con = mysql_connect("localhost","root","");

  mysql_select_db("tennis",$con);


  if(is_uploaded_file($_FILES['photo']['tmp_name'])){
       //echo "Have new photo";
        $photo= $_FILES['photo']['name'];

        $phototempname = $_FILES['photo']['tmp_name'];

        move_uploaded_file($phototempname,$photo);

        $sql= "Update player
             set name = '$name' ,
                  dob = '$dob',
                  email ='$email',
                  pro = '$pro',
                  photo = '$photo'
                  where rid = '$rid';
               ";
  }else{
      //echo "No new photo" ;
        $sql= "Update player 
             set name = '$name' ,
                  dob = '$dob',
                  email ='$email',
                  pro = '$pro'
                  where rid = '$rid';
               ";
  }
   
  $result = mysql_query($sql , $con);
  
  if($result){
      header("Location:updatereader.php");
  }else{
      echo "Update failure";
  }


  ?>