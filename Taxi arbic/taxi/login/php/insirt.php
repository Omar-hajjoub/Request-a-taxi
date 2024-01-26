<?php 

include ('conx.php');

if(isset($_POST["sign-up"])){

 $username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$ConfirmPassword=$_POST['ConfirmPassword'];

$username=mysqli_real_escape_string($conx,$_POST["username"]) ;
$email=mysqli_real_escape_string($conx,$_POST["email"]) ;
$password=mysqli_real_escape_string($conx, $_POST["password"]);
$confirmPassowrd= mysqli_real_escape_string($conx, $_POST["confirmPassowrd"]);




$checkNameQuery = "SELECT * FROM user WHERE username = '$username'";
$checkNameResult = $conx->query($checkNameQuery);

if ($checkNameResult->num_rows > 0) {
   $eror =  " الاسم والنسبة المدخلة مستخدمة بالفعل.";
    exit;
}


// التحقق من البريد الإلكتروني


$checkEmailQuery = "SELECT * FROM user WHERE email = '$email'";
$checkEmailResult = $conx->query($checkEmailQuery);

if ($checkEmailResult->num_rows > 0) {
    echo 'البريد الإلكتروني المدخل مستخدم بالفعل.';
    exit;
}


// إنشاء جدول المستخدمين إذا لم يكن موجودًا بالفعل

$conx->query($insert);

$insert="INSERT INTO user( username, password,email ) 
VALUES ('$username','$password','$email')";



if(empty($username)){



  
  }elseif(empty($email)){
   
  
  }
  elseif(empty($password) and empty($ConfirmPassword)){
  }elseif($ConfirmPassword !== $password){
  }
  
  else{
    if(mysqli_query($conx,$insert)){
     
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      $_SESSION['email'] = $email;


      header("Location:../index.php");
    
  
    }else{
      
      echo 'Error:' .mysqli_error($conx);
  
    }
  }
   


 


}

?>