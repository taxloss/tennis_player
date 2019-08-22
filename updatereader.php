<head>
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
   <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mytarget">
        <span class="icon-bar"></span>
        
      </button>
     <a class="navbar-brand" href="#">Player Library System</a>
    </div>

    <div class="collpase navbar-collapse"0 id="mytarget">
      <ul class="nav navbar-nav">
        <li class="active"><a href="menu.php">Home</a></li>
         <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Player<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="listreader.php">List Player</a></li>
            <li><a href="addreader.php">Add Player</a></li>
            <li><a href="updatereader.php">Update Player</a></li>
            <li><a href="deletereader.php">Delete Player</a></li>
            <li><a href="searchreader.php">Search Player</a></li>
           </ul>
          </li>
            <li><a href="#">Book</a></li>
            <li><a href="record.php">Record</a></li>
            <li><a href="#">Report</a></li>
      </ul>
    </div>
   </div>
 </nav>
   <div class="container text-center">
     
   

<h1>Update the Player</h1>

<a href="menu.php"class="btn btn-primary">Back to Menu</a>

<?php
  $con = mysql_connect("localhost","root","");

  if($con){
      mysql_select_db("tennis",$con);

      $sql = "Select * from player";

      $result = mysql_query($sql ,$con);

      $rowcount = mysql_num_rows($result);

      echo "<p>" ;

   echo "<table border=1 cellpadding=10 class='table table-bordered table-striped'>" ;

   echo "<tr><th>ID</th><th>Name</th><th>DOB</th><th>Photo</th><th>Email</th><th>Turned Pro</th><th>Action</th></tr>";
  
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
                <td><a href='updatereader2.php?rid=$rid' class='btn btn-warning'>Update</a></td>
             </tr>";

    }
    echo "</table>";

   }else{
      echo "<h2>Connection Fail</h2>";
  }


?>

</div>
</body>