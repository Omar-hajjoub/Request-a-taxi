<?php 

include ('./conx.php');


if(isset($_POST["send"])){

 $firsnam=$_POST['firsnam'];
 $lasnim=$_POST['lasnim'];
$email=$_POST['email'];
$numro=$_POST['numro'];
$city=$_POST['city'];
$cartnamber=$_POST['cartnamber'];
$chek=$_POST['chek'];
//ادخلاهم على شكل نص
$firsnam=mysqli_real_escape_string($conx,$_POST['firsnam']);
$lasnim=mysqli_real_escape_string($conx,$_POST['lasnim']);
$email=mysqli_real_escape_string($conx,$_POST['email']);
$numro=mysqli_real_escape_string($conx,$_POST['numro']);
$city=mysqli_real_escape_string($conx,$_POST['city']);
$cartnamber=mysqli_real_escape_string($conx,$_POST['cartnamber']);
$chek=mysqli_real_escape_string($conx,$_POST['chek']);


//منع من دخول نفس الاشخاص


$checkNameQuery = "SELECT * FROM subscription WHERE firsnam = '$firsnam' AND lasnim = '$lasnim'";
$checkNameResult = $conx->query($checkNameQuery);

if ($checkNameResult->num_rows > 0) {
    echo 'الاسم والنسبة المدخلة مستخدمة بالفعل.';
    exit;
}

// التحقق من البريد الإلكتروني


$checkEmailQuery = "SELECT * FROM subscription WHERE email = '$email'";
$checkEmailResult = $conx->query($checkEmailQuery);

if ($checkEmailResult->num_rows > 0) {
    echo 'البريد الإلكتروني المدخل مستخدم بالفعل.';
    exit;
}

// التحقق من رقم الهاتف


$checkPhoneQuery = "SELECT * FROM subscription WHERE numro = '$numro'";
$checkPhoneResult = $conx->query($checkPhoneQuery);

if ($checkPhoneResult->num_rows > 0) {
    echo 'رقم الهاتف المدخل مستخدم بالفعل.';
    exit;
}



$checkPhoneQuery = "SELECT * FROM subscription WHERE cartnamber = '$cartnamber'";
$checkPhoneResult = $conx->query($checkPhoneQuery);

if ($checkPhoneResult->num_rows > 0) {
    echo 'رقم بطاقة الوطنية المدخل مستخدم بالفعل.';
    exit;
}



// إنشاء جدول المستخدمين إذا لم يكن موجودًا بالفعل
mysqli_query($conx,$insert);


$insert="INSERT INTO subscription ( firsnam, lasnim, email, numro,city, cartnamber, chek) 
VALUES ('$firsnam','$lasnim','$email','$numro','$city','$cartnamber','$chek')";


    if(mysqli_query($conx,$insert)){
      
      header("Location:index.php");
    
  
    }else{
      
      echo 'Error:' .mysqli_error($conx);
  
    }
  }
   


 


?>