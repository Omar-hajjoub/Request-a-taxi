<?php
include ('./php/conx.php');
include('./php/insirt.php');
session_start();
    if(isset($_POST["Sign-in"])){
        $username=$_POST['username'];
        $password=$_POST['password'];
       

     
$sql= "SELECT * FROM user WHERE (username='$username'OR email='$username') and password='$password'  ";
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

$res= mysqli_query($conx,$sql);
$rows=mysqli_num_rows($res);



if($rows>0){
    
    

    $user = mysqli_fetch_assoc($res);
    // حفظ مُعرف المستخدم في جلسة الاستخدام
    $_SESSION['user_id'] = $user['id'];

    $_SESSION['username'] = $username;
    $_SESSION['email'] = $username;
    
    $_SESSION['password'] = $password;
   
    header("Location:../conxphp/user.php");
}else {
  $er= "<div> <h1> الاسم المستخدم او كلمة المرور غير صحيحة</h1></div>";
  header("Location:index.php");
}

    

mysqli_close($conx);

}


?>