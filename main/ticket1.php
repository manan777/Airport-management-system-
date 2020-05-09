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
<h2>TICKET HISTORY</h2>
    <table class="table table-bordered table-hover">
 <tr>
    <th>ticket number</th>
     <th>source</th>
     <th>destination</th>
     <th>date_of_booking</th>
     <th>date_of_cancellation</th>
     <th>date_of_travel</th>
     <th>seatno</th>
     <th>class</th>
     <th>pid</th>
     <th>passportno</th>
 </tr>
<?php
require('db.php');
session_start();
    $pid = $_GET['id'];
   $sql ="SELECT ticket_number,source,destination,date_of_booking,date_of_cancellation,date_of_travel,seatno,class,pid,passportno
   from ticket1
   where pid = $pid";
        
   $result = mysqli_query($con,$sql);
   if(mysqli_num_rows($result)>0)
    {
        
        while($row = $result->fetch_assoc()){
            echo"<tr><td>".$row["ticket_number"]."</td><td>".$row["source"]."</td><td>".$row["destination"]."</td><td>".$row["date_of_booking"]."</td><td>".$row["date_of_cancellation"]."</td><td>".$row["date_of_travel"]."</td><td>".$row["seatno"]."</td><td>".$row["class"]."</td><td>".$row["pid"]."</td><td>".$row["passportno"]."</td></tr>";
   
        }
            echo"</table>";
    }
        else{
            echo"0 result";
        }
        
?>
    </table>
    <br><br>
    <h4><p>To view and update ticket pricing history <a href='ticket2.php'> click Here</a></p></h4> 
    <br><br>
    <h4><p>To view ticket cancellation history <a href='ticket3.php'> click Here</a></p></h4>
    <br><br>
    <h2>EMPLOYEE SERVING</h2>
    
    <table class="table table-bordered table-hover">
 <tr>
    <th>ssn</th>
     <th>pid</th>
     <th>passportno</th>
 </tr>
<?php
require('db.php');
    $pid = $_GET['id'];
   $sql ="SELECT ssn,pid,passportno
   from serves
   where pid = $pid";
        
   $result = mysqli_query($con,$sql);
   if(mysqli_num_rows($result)>0)
    {
        
        while($row = $result->fetch_assoc()){
            echo"<tr><td>".$row["ssn"]."</td><td>".$row["pid"]."</td><td>".$row["passportno"]."</td></tr>";
   
        }
            echo"</table>";
    }
        else{
            echo"0 result";
        }
        
?>
    </table>
    
    
    </body>
</html>
