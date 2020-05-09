<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="style.css" />
            <style>
body {
     margin:0;

  padding: 0;
background-image: url(https://www.athletadesk.com/wp-content/uploads/2016/08/join-background.jpg);
    background-size: cover;
    color: azure;
    
}
    
        }
</style>
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h1>You are registered successfully.</h1>
<h1><br/>Click here to <a href='login.php'>Login</a></h1></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text"  name="username" placeholder="Username" required />
<input type="email"  name="email" placeholder="Email" required />
<input type="password"  name="password" placeholder="Password" required />
<input type="submit"  name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>