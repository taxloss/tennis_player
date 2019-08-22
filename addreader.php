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
        <span class="icon-bar"></span>
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
  

<h1>Add New Player</h1>

<a href="menu.php" class="btn btn-primary">Back To Menu</a>
<p>
<form class="text-left" method="post" action="addreader2.php" enctype="multipart/form-data">

 <div class="form-group">
   <label for="name">Name:</label>
   <input type='text' name="name" class="form-control" id="name"/><p> 
 </div>

 <div class="form-group">
   <label for="dob">DOB:</label>
   <input type='date' name="dob" class="form-control" id="dob"/><p>
 </div>

 <div class="form-group">
   <label for="photo">Photo:</label>
   <input type='file' name="photo" class="form-control" id="photo"/><p>
 </div>
 <div class="form-group">
   <label for="email">Email:</label>
   <input type='text' name="email" class="form-control" id="email" /><p>
  </div>

<div class="form-group">
  <label for="pro">Turned Pro:</label>
  <input type='text' name="pro" /><p>
</div>

    <input type="submit" value="Add Player" />
</form>

  </div>
</body>