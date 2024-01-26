<?php 
$conx=mysqli_connect('localhost','root','','online');
if(!$conx){
    die("Connection Failed:".mysqli_connect_error());
}
?>