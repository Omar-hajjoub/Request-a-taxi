<?php 
include ('./php/conx.php');

session_start();

if (isset($_SESSION['username'])) {
  $u= "SELECT `id`, `username`, `email`, `password` FROM `user` WHERE 1 ";

  $username = $_SESSION['username'];

    // قم بعرض معلومات المستخدم أو السماح بالتحكم بها


  
  }else {
    echo "فشل تسجيل الدخول. الرجاء التحقق من اسم المستخدم وكلمة المرور.";
}


mysqli_close($conx);

?>