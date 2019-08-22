<?php

 $keyword = $_GET['keyword'];

 $con = mysql_connect("localhost","root","");

 mysql_select_db("tennis",$con);

 $sql = "Select * from player where name like '%$keyword%'" ;

 //echo $sql ;

 $result = mysql_query($sql , $con);

 $rowcount = mysql_num_rows($result);

 if($rowcount==0){
     echo "<h3>No record matched</h3>" ;

     echo "<a href='searchreader.php'>Back to search again</a>" ;
 }else{
    echo "<p>" ;

    echo "<h3>Number of record matched: $rowcount</h3>" ;

    echo "<a href='searchreader.php'>Back to search again</a><p>" ;

    echo "<table border=1 cellpadding=10>" ;
 
    echo "<tr><th>ID</th><th>Name</th><th>DOB</th><th>Photo</th><th>Email</th><th>Turned Pro</th><th>Details</th></tr>";
   
     for($j=0;$j<$rowcount;$j++){
 
       
       $row= mysql_fetch_array($result);
 
       $rid = $row[0];
       $name = $row[1];
       $dob = $row[2];
       $photo=$row[3];
       $email = $row[4];
       $pro = $row[5];
 
       echo "<tr><td>$rid</td>
                 <td>$name</td>
                 <td>$dob</td>
                 <td><img src='$photo' width = '100'/></td>
                 <td>$email</td>
                 <td>$pro</td>
                 <td><a href='listreader_details.php?rid=$rid'>More Info</a></td>
              </tr>";
 
     }
     echo "</table>";
 }



?>