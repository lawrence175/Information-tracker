<?php
/*
Author: Lawrence Kisembo & Reddy B

creating a connection to the backend "database
https://www.mysql.com/products/connector/"

*/
?>

<?php

//Turn off all error reporting
error_reporting(E_ALL ^ E_DEPRECATED);

$connection = mysql_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('register');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
?>