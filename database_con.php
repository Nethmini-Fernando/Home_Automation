<?php 
//connecting the database
$server = "localhost";  //server name in my phpmyadmin
$user = "root"; //user name in my phpmyadmin.
$pass = ""; //no-password in my phpmyadmin.
$database = "home_automation_db"; //name of the database
$db_con = mysqli_connect($server, $user, $pass, $database);

if (!$db_con) {
    die("<script>alert('ERROR!!Connection to the Database Failed!')</script>");
}
?>
