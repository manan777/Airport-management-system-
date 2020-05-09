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

<!DOCTYPE html>
<html>
<head>
    <title>city</title>
    <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
    </head>
<body>
<h2>AIRLINE FLIGHT DETAILS</h2>
    <table class="table table-bordered table-hover">
 <tr>
    <th>flightcode</th>
     <th>source</th>
     <th>destination</th>
     <th>arrival</th>
     <th>departure</th>
     <th>status</th>
     <th>duration</th>
     <th>flight type</th>
     <th>layover time</th>
     <th>no of stops</th>
     <th>airlineid</th>
 </tr>
<?php
require('db.php');
session_start();
    $airlineid = $_GET['id'];
   $sql ="SELECT flight_code, source,destination,arrival,departure,status,duration,flighttype,layover_time,no_of_stops,airlineid
   from flight 
   where airlineid ='$airlineid'";
        
   $result = mysqli_query($con,$sql);
   if(mysqli_num_rows($result) >0)
    {
        
        while($row = $result->fetch_assoc()){
            echo"<tr><td><a href='passenger.php?id=$row[flight_code]'>$row[flight_code]</a></td><td>".$row["source"]."</td><td>".$row["destination"]."</td><td>".$row["arrival"]."</td><td>".$row["departure"]."</td><td>".$row["status"]."</td><td>".$row["duration"]."</td><td>".$row["flighttype"]."</td><td>".$row["layover_time"]."</td><td>".$row["no_of_stops"]."</td><td>".$row["airlineid"]."</td></tr>";
   
        }
            echo"</table>";
    }
        else{
            echo"0 result";
        }
        
?>
    </table>
    <br><br>
    <h4><p>CHANGE FLIGHT STATUS<a href="updateflight.php">  CLICK HERE</a></p></h4>
    </body>
</html>
