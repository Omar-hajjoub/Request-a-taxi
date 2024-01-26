<?php 
$conx=mysqli_connect('localhost','root','','online');
if(!$conx){
    die("Connection Failed:".mysqli_connect_error());
}
$insert = "CREATE TABLE IF NOT EXISTS taxiSmall (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_input VARCHAR(50) NOT NULL,
  tel_input INT (13) NOT NULL,
  city_input VARCHAR (255) NOT NULL,
  search_input VARCHAR(255) NOT NULL
 


  
)";

?>
