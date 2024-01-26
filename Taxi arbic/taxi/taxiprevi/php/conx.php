<?php 
$conx=mysqli_connect('localhost','root','','online');
if(!$conx){
    die("Connection Failed:".mysqli_connect_error());
}
$insert = "CREATE TABLE IF NOT EXISTS MAPS1 (
  id INT AUTO_INCREMENT PRIMARY KEY,
  home VARCHAR(50) NOT NULL,
  cty VARCHAR(100) NOT NULL,
  num_C VARCHAR(255) NOT NULL,
  numro INT (13) NOT NULL,
  prix INT (255) NOT NULL,
  km VARCHAR(255) NOT NULL,
  mint VARCHAR(255) NOT NULL


  
)";

?>
