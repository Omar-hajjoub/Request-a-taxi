<?php 
$conx=mysqli_connect('localhost','root','','online');
if(!$conx){
    die("Connection Failed:".mysqli_connect_error());
}
$insert = "CREATE TABLE IF NOT EXISTS omar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    firsname VARCHAR(50) NOT NULL,
    lasname VARCHAR(50) NOT NULL,

    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
  )";

?>
