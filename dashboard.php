<?php
/*
Author: Lawrence Kisembo & Reddy B

 Account generation page
*/
?>

<?php 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Kitega Information Tracker System</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<p> <center> Kitega Community Account</p> <p><a href="index.php">Home</a></p> </center>
<div class="form">
<form>

  <fieldset class="account-info">
    <label>
      Username
      <input type="text" name="username">
    </label>
    <label>
      Password
      <input type="password" name="password">
    </label>
      <label>
      Location
      <input type="location" name="location">
    </label>
      <label>
      Community Cash Balance
      <input type="cash" name="cash">
    </label>
      <label>
      Vicoba Balance
      <input type="vicoba_balance" name="vicoba_balance">
    </label>
   </fieldset>

  <fieldset class="account-action">
    <input class="btn" type="submit" name="submit" value="Add Account">
   <!--  <input class="btn" type="cancel" name="cancel" value="Cancel"> -->
  
  </fieldset>
</form>

</div>
</body>
</html>
