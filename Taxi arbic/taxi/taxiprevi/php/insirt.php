<?php 

include ('conx.php');


if(isset($_POST["send"])){
  $nom=$_POST['nom'];
 $home=$_POST['home'];
$city=$_POST['destination_input'];
$num_C=$_POST['num_C'];
$numro=$_POST['numro'];
$prix=$_POST['prix'];
$km=$_POST['km'];
$mint=$_POST['mint'];
//ادخلاهم على شكل نص
$nom=mysqli_real_escape_string($conx,$_POST['nom']);

$home=mysqli_real_escape_string($conx,$_POST['home']);
// $lasnim=mysqli_real_escape_string($conx,$_POST['cty']);
$num_C=mysqli_real_escape_string($conx,$_POST['num_C']);
$numro=mysqli_real_escape_string($conx,$_POST['numro']);
$prix=mysqli_real_escape_string($conx,$_POST['prix']);
$km=mysqli_real_escape_string($conx,$_POST['km']);
$mint=mysqli_real_escape_string($conx,$_POST['mint']);





// إنشاء جدول المستخدمين إذا لم يكن موجودًا بالفعل
mysqli_query($conx,$insert);


$insert="INSERT INTO MAPS1 (nom, home, cty,  num_C, numro,prix,  km, mint) 
VALUES ('$nom','$home','$city','$num_C','$numro','$prix','$km','$mint')";

if(empty($nom)){
 
}elseif(empty($home)){
 

}
elseif(empty($num_C)){
 

}
elseif(empty($city)){

}
elseif(empty($numro)){

}
else {
      if(mysqli_query($conx,$insert)==true){
      header('location:../index.php');
      
    
      }else{
       
        echo 'Error:' .mysqli_error($conx);
    
      }
    }
    
  }
   


 


?>