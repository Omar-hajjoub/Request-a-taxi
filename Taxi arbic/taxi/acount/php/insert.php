<?php 
include('conx.php');

if(isset($_POST["my-Save"])){

    
   $email=$_POST['Email'];
  $First_Name=$_POST['First_Name'];
  $Fore_Name=$_POST['Fore_Name'];
   $numro=$_POST['numro'];
   
   
   $email=mysqli_real_escape_string($conx,$_POST["Email"]) ;
   $First_Name=mysqli_real_escape_string($conx,$_POST["First_Name"]) ;

   $Fore_Name=mysqli_real_escape_string($conx,$_POST["Fore_Name"]) ;

   $numro=mysqli_real_escape_string($conx,$_POST["numro"]) ;


   
   
   $checkNameQuery = "SELECT * FROM user WHERE First_Name = '$First_Name' AND Fore_Name='$Fore_Name' ";
   $checkNameResult = $conx->query($checkNameQuery);
   
   if ($checkNameResult->num_rows > 0) {
       echo 'الاسم والنسبة المدخلة مستخدمة بالفعل.';
       exit;
   }


   //تحقق من الاسم و نسب ان كان موجودين

  


   

   
   
   // التحقق من البريد الإلكتروني
   
   
   $checkEmailQuery = "SELECT * FROM user WHERE email = '$email'";
   $checkEmailResult = $conx->query($checkEmailQuery);
   
   if ($checkEmailResult->num_rows > 0) {
       echo 'البريد الإلكتروني المدخل مستخدم بالفعل.';
       exit;
   }
   
   
   // إنشاء جدول المستخدمين إذا لم يكن موجودًا بالفعل
   
   $conx->query($insert);
   
   $insert="INSERT INTO user(  email,First_Name,Fore_Name,numro ) 
   VALUES ('$email','$First_Name','$Fore_Name','$numro')";
   
   $update="UPDATE `user` SET (  email,First_Name,Fore_Name,numro ) 
   VALUES ('$email','$First_Name','$Fore_Name','$numro')WHERE 1";
       if(mysqli_query($conx,$insert)){
        
        
         $_SESSION['email'] = $email;
         $_SESSION['numro'] = $numro;
         $_SESSION['First_Name'] = $First_Name;
         $_SESSION['Fore_Name'] = $Fore_Name;
   
   
         header("Location:index.php");
       
     
       }else{
         
         echo 'Error:' .mysqli_error($conx);
     
       }
   
      
   
   
    
   
   
   }
   

?>