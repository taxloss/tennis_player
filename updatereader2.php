<?php
    $rid = $_GET['rid'];


    $con = mysql_connect("localhost","root","");

    mysql_select_db("tennis",$con);
   
    $sql="Select * from player where rid=$rid ";

    $result=mysql_query($sql,$con);

    $row= mysql_fetch_array($result);

    $rid = $row[0];
    $name = $row[1];
    $dob = $row[2];
    $photo=$row[3];
    $email = $row[4];
    $pro= $row[5];

    echo $rid . " " . $name . " " . $dob . " " . $email . " " . $pro ;
   

?>

<h1>Update the Player</h1>

<a href="menu.php">Back To Menu</a>

<p>
<form method="post" action="updatereader3.php" enctype="multipart/form-data">

   <input type = "hidden" name="rid" value = "<?php echo $rid ; ?>"/>

   Name:<input type='text' name="name" value="<?php echo $name ; ?>" /><p> 

   DOB:<input type='date' name="dob" value="<?php echo $dob ; ?>" /><p>

   Photo:<input type='file' name="photo" /><p>
   <img src="<?php echo $photo ; ?>" width="50" /><p>

   Email:<input type='text' name="email" value="<?php echo $email ; ?>" /><p>

   Turned Pro:<input type='text' name="pro" value="<?php echo $pro ; ?>" /><p>

    <input type="submit" value="Update Player" />
</form>