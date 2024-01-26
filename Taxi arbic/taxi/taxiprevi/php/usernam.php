<?php 
$conx=mysqli_connect('localhost','root','','online');
if(!$conx){
    die("Connection Failed:".mysqli_connect_error());
}

session_start();



// جلب معلومات المستخدم المسجل دخوله
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM user WHERE id = $user_id";
$result = mysqli_query($conx, $sql);

// التحقق من وجود نتائج
if (mysqli_num_rows($result) > 0) {
  // عرض بيانات المستخدم
  $user = mysqli_fetch_assoc($result);

  $username= $user['username'] ;
  $email= $user['email']; 
  // يمكنك عرض المزيد من المعلومات هنا حسب حقول جدول البيانات الخاص بك
} else {
  echo "لم يتم العثور على بيانات المستخدم.";
}











  


    
  
  
  
  mysqli_close($conx);
  
  
  




?>