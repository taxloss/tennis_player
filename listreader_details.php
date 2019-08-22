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
     

<?php
    $rid = $_GET['rid'];

   // echo $rid;

    $con = mysql_connect("localhost","root","");

    mysql_select_db("tennis",$con);

    $sql="Select * from player where rid = $rid ";

    $result = mysql_query($sql ,$con);

    $row = mysql_fetch_array($result);

    $rid = $row[0];
    $name = $row[1];
    $dob = $row[2];
    $photo=$row[3];
    $email = $row[4];
    $pro = $row[5];
?>


<h1>Details Information of <?php echo $name ; ?></h1>

<a href="listreader.php" class="btn btn-primary">Back to List Reader</a><p>

<div class="row">
  <div class="col-md-3 col-md-offset-3">
     <img src='<?php echo $photo ; ?>' /><p>
  </div>
   <div class="col-md-3">
<div class="panel panel-success">
    <div class="panel-heading">DOB:</div>
    <div class="panel-body"><?php echo $dob?><p></div>
</div>

<div class="panel panel-success">
    <div class="panel-heading">Email:</div>
    <div class="panel-body"><?php echo $email?><p></div>
</div>

<div class="panel panel-success">
    <div class="panel-heading">Turned pro:</div>
    <div class="panel-body"><?php echo $pro?><p></div>
</div>


Player ID:<?php echo $rid ?>
 </div>
</div>



</div>
</body>