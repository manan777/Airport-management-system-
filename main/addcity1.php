<!DOCTYPE html>
<html lang="en">
<head>
  <title>AIRPORT</title>
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
      <li><a href="updateflight.php">UPDATE</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">VIEW <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="basicempdetails.php">EMPLOYEE</a></li>
          <li><a href="allairport.php">AIRPORT</a></li>
        </ul>
      </li>
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
        body{
            background-image: url(https://wallpaperaccess.com/full/376978.jpg);
            background-size:cover;
            color: darkgray
        }
        .in{
            opacity:.5;
            border: 4px solid black;
            border-radius: 25px;
        }
        .inn{
            opacity: .75;
            border-radius: 25px;
        }
    </style>
</head>
<body>
<div class="form">
<h2><p>Welcome <?php echo $_SESSION['username']; ?>!</p></h2>
<h2> <p>Enter a new city</p></h2> 
    <form action="addcity.php" method="post" name="city">
<input type="text" class="in" name="cname" placeholder="city name" required />
   <input type="text" class="in" name="state" placeholder="state name" required />
        <input type="text" class="in" name="country" placeholder="country name" required />
        <input name="submit" class="inn" type="submit" value="submit" />
        <br><br>
          </form>
    </div>
</body>
</html>