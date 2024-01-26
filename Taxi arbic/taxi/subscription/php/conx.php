<?php 
$conx=mysqli_connect('localhost','root','','online');
if(!$conx){
    die("Connection Failed:".mysqli_connect_error());
}
$insert = "CREATE TABLE IF NOT EXISTS subscription (
  id INT AUTO_INCREMENT PRIMARY KEY,
  firsnam VARCHAR(50) NOT NULL,
  lasnim VARCHAR(100) NOT NULL,
  email VARCHAR(255) NOT NULL,
  numro INT (13) NOT NULL,
  city VARCHAR(255) NOT NULL,
  cartnamber VARCHAR(255) NOT NULL,
  chek VARCHAR(255) NOT NULL


  
)";

?>
