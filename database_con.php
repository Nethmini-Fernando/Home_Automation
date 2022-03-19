<?php 
//connecting the database
$server = "localhost";
$user = "root";
$pass = "";
$database = "home_automation_db";
$db_con = mysqli_connect($server, $user, $pass, $database);

if (!$db_con) {
    die("<script>alert('ERROR!!Connection to the Database Failed!')</script>");
}
?>
