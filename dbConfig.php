<?php  
// Database configuration  
$dbHost     = "mysql-site-web-mouly.alwaysdata.net";  
$dbUsername = "335074";  
$dbPassword = "gite-3il";  
$dbName     = "site-web-mouly_gite";  
  
// Create database connection  
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);  
  
// Check connection  
if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}