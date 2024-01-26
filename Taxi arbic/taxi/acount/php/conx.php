<?php 
$conx=mysqli_connect('localhost','root','','online');
if(!$conx){
    die("Connection Failed:".mysqli_connect_error());
}
$insert = "CREATE TABLE IF NOT EXISTS account_infromation (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  First_Name VARCHAR(100) NOT NULL,
  Fore_Name VARCHAR(100) NOT NULL,
  numro int(13) NOT NULL

)";

?>
