<?php 

include ('conx.php');


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["send"])){

 $user_input=$_POST['user_input'];
$tel_input=$_POST['tel_input'];
$city_input=$_POST['loca_input'];
$search_input=$_POST['search_input'];

//ادخلاهم على شكل نص
$user_input=mysqli_real_escape_string($conx,$_POST['user_input']);
$tel_input=mysqli_real_escape_string($conx,$_POST['tel_input']);
$city_input=mysqli_real_escape_string($conx,$_POST['loca_input']);
$search_inputt=mysqli_real_escape_string($conx,$_POST['search_input']);






// إنشاء جدول المستخدمين إذا لم يكن موجودًا بالفعل
mysqli_query($conx,$insert);


$insert="INSERT INTO taxiSmall ( user_input, tel_input,  city_input, search_input) 
VALUES ('$user_input','$tel_input','$city_input','$search_input')";

if(empty($user_input)){
 
}
elseif(empty($tel_input)){
 

}
elseif(empty($city_input)){

}
elseif(empty($search_input)){

}
else {
      if(mysqli_query($conx,$insert)){
      
        header("Location:../indec.php");
      
    
      }else{
       
        echo 'Error:' .mysqli_error($conx);
    
      }
    }
    
  }
   


 


?>