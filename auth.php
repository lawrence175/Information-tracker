<?php
/*
Author: Lawrence Kisembo & Reddy B
http://php.net/manual/en/features.http-auth.php
*/
?>

<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
