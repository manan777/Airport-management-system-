<!DOCTYPE html>
<html lang="en">
<head>
  <title>AIRPORT</title>
    <style>
        body{
          color: cornsilk;
        } 
    </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">AIRPORT MANAGEMENT</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="welcome.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ADD <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addcity1.php">CITY-AIRPORT</a></li>
          <li><a href="addairline.php">AIRLINE</a></li>
        </ul>
      </li>
        
         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">UPDATE <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="updateflight.php">FLIGHT STATUS</a></li>
          <li><a href="ticket2.php">TICKET PRICE</a></li>
        </ul>
      </li>
        
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">VIEW <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="basicempdetails.php">EMPLOYEE</a></li>
          <li><a href="allairport.php">AIRPORT</a></li>
        </ul>
      </li>
    </ul>
      <ul class="nav navbar-nav navbar-left">
  <form class="form-inline" action="procedure.php" method="post" >
    <input class="form-control mr-sm-2" type="text" name="fname" placeholder="Search employee">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
          </ul>
       <ul class="nav navbar-nav navbar-left">
  <form class="form-inline" action="procedure2.php" method="post" >
    <input class="form-control mr-sm-2" type="text" name="fname" placeholder="Search passenger">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
          </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <p></p>
</div>

</body>
</html>


<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="style.css" />

    <style>
body {
     margin:0;

  padding: 0;
  background-image: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35) ),url("m.jpg");
      background-size: cover;
    color:azure;
     font-family:Verdana, Geneva, sans-serif;
}
</style>
</head>
<body>
<div class="form">
<h1><p>Welcome <?php echo $_SESSION['username']; ?>!</p></h1>
    <br><br>
    <h3><p class="text-center">MANAGE AIRPORTS  <a href='city.php'>click Here</a></p></h3>
</div>
</body>
</html>