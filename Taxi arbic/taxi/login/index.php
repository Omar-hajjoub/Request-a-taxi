<?php 
include ('./php/conx.php');
include('./php/insirt.php');
include_once ('signin.php');     

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

    
    <script
      src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous">
    </script>
    <title>Sign in & Sign up Form</title>
  </head>
  <body >
  
  <div class="container-1 " >
    <div class="log1">
      
    <a href="" >  <img src="../photo/taxiow-low-resolution-logo-color-on-transparent-background.png" alt=""></a>
  
  </div>
    <div id="mainbox" onclick="openFunction()">&#9776;</div>
    <nav class="nav-list" id="menu">
      
       <div class="logo ">
        <div class="hidden">
     <a href="#">  <img src="../photo/taxiow-low-resolution-logo-color-on-transparent-background.png" alt=""></a>
        </div>
    </div>
    
       <div class="center-txt">
        <div class="hidden">
       <a href="../taxi.php" class="ts"> صفحة رئيسة</a>
       <a href="#">معلومات عنا</a>
       <a href="#">مركز المساعدة</a>
       <a href="#">جهات الاتصال</a>
        </div>
       <form action="sr">
      
           <div class="input-wrapper">
               <button class="icon" name="button"> 
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="25px" width="25px">
                   <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#fff" d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z"></path>
                   <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#fff" d="M22 22L20 20"></path>
                 </svg>
               </button>
               <input placeholder="search.." class="input" name="text" type="text">
             </div>
      
            </form>
       </div>
       <div class="logne ">
       
       <button type="button" name="btn" onclick="redirectToPage2()"   >
           <i class="fa-solid fa-taxi fa-bounce" style="color: #ffe014;"></i> اطلب الان
          
          </button >
      

       </div> 
       <div class="closebtn" onclick="closeFunction()">&times;</div> 
     
      
      </nav>

  </div>

  

  
       <!--------------------->

    <div class="container">
      
        <div class="forms-container">
          <div class="signin-signup">


            <form action="signin.php" method="post" class="sign-in-form">

            


              <h2 class="title">تسجيل الدخول</h2>

              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="اسم المستخدم" name="username" id="email" value=""  />
                <div id="emaileror">   </div>
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="كلمة المرور "name="password" />
              </div>

             
              

              <input type="submit" value="تسجيل الدخول" class="btn solid" id="bib" name="Sign-in"  />
              <p class="social-text">أو قم بتسجيل الدخول باستخدام المنصات الاجتماعية</p>
              <div class="social-media">
                <a href="#" class="social-icon">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="social-icon">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </form>
            
            <form action="./php/insirt.php" method="post" class="sign-up-form" >
              <h2 class="title">اشتراك</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="اسمك و نسبك" name="username"/>
              </div>
          
              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="البريد الاكتروني" name="email" id="email"  />
              </div>
            <!---  <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="tel" placeholder=" رقم الهاتف" name="nombr" id="nombr"  />
              </div>  ---->
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder=" كلمة المرور" name="password" id="password"  />
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="تاكيد كلمة المرور" name="ConfirmPassword" id="ConfirmPassword"  />
              </div>
              <input type="submit" class="btn" value="انشاء حساب"name="sign-up" id="sign-up" />
              <p class="social-text">أو قم بتسجيل الدخول باستخدام المنصات الاجتماعية</p>
              <div class="social-media">
                <a href="#" class="social-icon">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </form>
          </div>
        </div>
    
      
        <div class="panels-container">
          <div class="panel left-panel">
            <div class="content">
              <h3>جديد هنا ؟</h3>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                ex ratione. Aliquid!
              </p>
              <button class="btn transparent" id="sign-up-btn">
             اشتراك
              </button>
            </div>
            <img src="img/log.svg" class="image" alt="" />
          </div>
          <div class="panel right-panel">
            <div class="content">
              <h3>واحد منا ؟</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                laboriosam ad deleniti.
              </p>
              <button class="btn transparent" id="sign-in-btn">
               تسجيل الدخول
              </button>
            </div>
            <img src="img/1.svg" class="image" alt="" />
          </div>
        </div>
      </div>

      <!-------------------------------->
   
    <script src="../JS/trnsi.js"></script>
    <script src="app.js"></script>

  <script src="../JS/Translat.js"></script>
  
  
  
</body>
</html>
