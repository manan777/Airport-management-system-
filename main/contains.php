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
<h2>AIRLINES OPERATING</h2>
    <table class="table table-bordered table-hover">
 <tr>
    <th>airlineid</th>
    <th>ap_name</th>
 </tr>
<?php
require('db.php');
session_start();
    $ap_name = $_GET['id'];
   $sql ="SELECT airlineid, ap_name
   from contains 
   where ap_name = '$ap_name'";
        
   $result = mysqli_query($con,$sql);
   if(mysqli_num_rows($result) >0)
    {
        
        while($row = $result->fetch_assoc()){
            echo"<tr><td><a href='airline.php?id=$row[airlineid]'>$row[airlineid]</a></td><td>".$row["ap_name"]."</td></tr>";
   
        }
            echo"</table>";
    }
        else{
            echo"0 result";
        }
        
        
?>
    </table>
    
    <br><br>
           <h2>AIRPORT EMPLOYEES</h2> 

    <table class="table table-bordered table-hover">
 <tr>
    <th>ssn</th>
    <th>fname</th>
     <th>m</th>
     <th>lname</th>
     <th>address</th>
     <th>phone</th>
     <th>age</th>
     <th>sex</th>
     <th>jobtype</th> 
      <th>astype</th>
     <th>etype</th>
     <th>shift</th>
     <th>position</th>
     <th>ap_name</th>
 </tr>
<?php
require('db.php');
    $ap_name = $_GET['id'];
   $sql ="SELECT ssn,fname,m,lname,address,phone,age,sex,jobtype,astype,etype,shift,position,ap_name
   from employee1 
   where ap_name = '$ap_name'";
        
   $result = mysqli_query($con,$sql);
   if(mysqli_num_rows($result) >0)
    {
        
        while($row = $result->fetch_assoc()){
            echo"<tr><td>".$row["ssn"]."</td><td>".$row["fname"]."</td><td>".$row["m"]."</td><td>".$row["lname"]."</td><td>".$row["address"]."</td><td>".$row["phone"]."</td><td>".$row["age"]."</td><td>".$row["sex"]."</td><td>".$row["jobtype"]."</td><td>".$row["astype"]."</td><td>".$row["etype"]."</td><td>".$row["shift"]."</td><td>".$row["position"]."</td><td>".$row["ap_name"]."</td></tr>";
   
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
