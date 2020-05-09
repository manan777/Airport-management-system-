<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<h2><p>Welcome <?php echo $_SESSION['username']; ?>!</p></h2>
<h2> <p>Enter a new airlineid</p></h2> 
    <form action="addcountains1.php" method="post" name="airline">
<input type="text" name="airlineid" placeholder="enter airlineid" required />
   <input type="text" name="ap_name" placeholder="ap_name" required />
        <input name="submit" type="submit" value="submit" />
        <br><br>
          </form>
    </div>
</body>
</html>