<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "datapasien";
if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
    die("Connection failed");
}
    
echo "";

?>