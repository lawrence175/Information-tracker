<?php
/*
Author: Lawrence Kisembo & Reddy B

*/
?>

<?php include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Kitega Information Tracker System</title>
<link rel="stylesheet" href="css/style_1.css" />
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome to the Kitega Community Center Information System, <?php echo $_SESSION['username']; ?>!</p>


</div>
<center>
	
<!-- more information to be added here /scale it down -->
<div class="topnav" id="myTopnav" >

   <a href="dashboard.php">Community Accounts</a>
   <a href="#group">Groups</a>
    <a href="#member">Members</a>
   <a href="#facilitator">Facilitators</a>
   <a href="#support">Support</a>
    <a href="login.php">Logout</a>
    
</div>

</center>
</body>
</html>
