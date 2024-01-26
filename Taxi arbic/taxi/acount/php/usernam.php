<?php 
include ('conx.php');

session_start();

if (!isset($_SESSION['username'])) {
  exit;
}

// استعلام SQL لجلب جميع بيانات المستخدم المسجل دخوله
$user_id = $_SESSION['username'];
$sql = "SELECT * FROM user WHERE id ";
$result = mysqli_query($conx, $sql);

// التحقق من وجود نتائج
if (mysqli_num_rows($result) > 0) {
    // عرض بيانات المستخدم
   
     $username=['username'] ;
     $email=['email'];
    // يمكنك عرض المزيد من المعلومات هنا حسب حقول جدول البيانات الخاص بك
} else {
    echo "لم يتم العثور على بيانات المستخدم.";
}

  


    

  
      // قم بعرض معلومات المستخدم أو السماح بالتحكم بها
  
  
    
    



mysqli_close($conx);




?>