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
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['ap_name'])){
        // removes backslashes
 $ap_name = stripslashes($_REQUEST['ap_name']);
        //escapes special characters in a string
 $ap_name = mysqli_real_escape_string($con,$ap_name); 
 $state = stripslashes($_REQUEST['state']);
 $state = mysqli_real_escape_string($con,$state);
 $country = stripslashes($_REQUEST['country']);
 $country = mysqli_real_escape_string($con,$country);
     $cname = stripslashes($_REQUEST['cname']);
        //escapes special characters in a string
 $cname = mysqli_real_escape_string($con,$cname); 
        $query = "INSERT into airport(ap_name,state,country,cname)
VALUES ('$ap_name','$state','$country','$cname')";
        $result = mysqli_query($con,$query);
        if($result){
            echo("inserted successfully");
             header("refresh:1; url=index.php"); 
        }
    }
    
?>