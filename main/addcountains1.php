<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_REQUEST['airline_id'])){
        // removes backslashes
 $airlineid = stripslashes($_REQUEST['airlineid']);
        //escapes special characters in a string
 $airlineid = mysqli_real_escape_string($con,$airlineid); 
 $ap_name = stripslashes($_REQUEST['ap_name']);
 $ap_name = mysqli_real_escape_string($con,$ap_name);
        $query = "INSERT into contains(airlineid,ap_name)
VALUES ('$airlineid','$ap_name')";
        $result = mysqli_query($con,$query);
        if($result){
          echo("inserted successfully");
        }
    }
    
?>