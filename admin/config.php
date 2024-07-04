<?php
$server_name= "localhost";
$user_name= "root";
$password= "";
$database_name= "db_manii";
$config= mysqli_connect($server_name , $user_name , $password , $database_name); 
if ($config) { 
// echo "connected" ; 
}
?> 