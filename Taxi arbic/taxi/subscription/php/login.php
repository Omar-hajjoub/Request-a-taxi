<?php
include ('conx.php');
include ('./insirt.php');



    if(isset($_POST["Sign-in"])){
        $numro=$_POST['numro'];
        $password=$_POST['password'];
       

     
$sql= "SELECT * FROM subscription WHERE numro='$numro'  ";



$res= mysqli_query($conx,$sql);
$rows=mysqli_num_rows($res);
if($rows>0 && $password=="OMARHAJJOUB"){

    $user = mysqli_fetch_assoc($res);
    // حفظ مُعرف المستخدم في جلسة الاستخدام
    $_SESSION['user_id'] = $user['id'];

 
   
   
    header("Location:../USERTAXI/index.php");
}else {
    echo "فالتحقق من اسم المستخدم وكلمة المرور.";
}

    

mysqli_close($conx);

}


?>