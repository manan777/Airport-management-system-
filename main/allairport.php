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
    <h2>AIRPORT LIST</h2>
    <table class="table table-bordered table-hover">
 <tr>
    <th>ap_name</th>
    <th>state</th>
    <th>country</th>
     <th>cname</th>
 </tr>
<?php
require('db.php');
session_start();
   $sql ="SELECT ap_name,state,country,cname from airport";
   $result = mysqli_query($con,$sql) or die(mysql_error());
    if($result-> num_rows >0)
    {
        while($row = $result->fetch_assoc()){
            echo"<tr><td>".$row["ap_name"]."</td><td>".$row["state"]."</td><td>".$row["country"]."</td><td>".$row["cname"]."</td></tr>";
   
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




