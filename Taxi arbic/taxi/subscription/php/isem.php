<?php 
include ('conx.php');
session_start();

if (isset($_SESSION['firsnam'])) {
  $u= "SELECT `firsnam` FROM `user` ";

  $firsnam = $_SESSION['firsnam'];

    // قم بعرض معلومات المستخدم أو السماح بالتحكم بها

echo $firsnam ;
  
  }else {
    echo "فشل تسجيل الدخول. الرجاء التحقق من اسم المستخدم وكلمة المرور.";
}


mysqli_close($conx);

?>