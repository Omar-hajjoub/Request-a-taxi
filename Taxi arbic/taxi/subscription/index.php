<?php 
include('./php/conx.php');
include('insirt.php');
include ('../PHP/usernam.php');
include ('./php/login.php');


?>





<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>موقع المدينةة</title>

    <style>
  <?php include_once "style.css"?>
  <?php include_once "../css/hedare.css"?>
  <?php include_once "../conxphp/user.css"?>
  <?php include_once "../css/moudal.css"?>
</style>
 



    

</head>
<body>
<!---------------------    container   ---------------------->
<div class="container  " >
    <div class="log1">
      
    <a href="#" >  <img src="../photo/taxiow-low-resolution-logo-color-on-transparent-background.png" alt=""></a>

    <div class="btntxi">
        <button> <a href="../subscription/index.php"> <i class="fa-solid fa-taxi fa-beat-fade fa-2xl" style="color: #fbb904;" id="TXI"></i></a></button>
       <p>اعمل معنا</p>
         </div>
       <div class="user">

        <div class="btn">
  
        <div class="btnusr">
       <button > <i class="fa-solid fa-circle-user fa-2xl" style="color: #fcfcfd;" id="user" ></i></button>
       <p> حسابي الخاص</p>
      </div>
        </div>
       <div class="user-dropdown" id="user-dropdown">
          <div class="usrelog">
            <div class="cart_item">
              <img src="img.png" alt="" id="img1" />
               <input type="file" id="fil" />
              <button id="sign-out" ><a href="../login/index.php">تسجيل الخروج </a></button>
            </div>
            
            <div class="logt">
              <form action="" method="post" enctype="multipart/form-data">
      <header>
        
            <h1 name="id" value=""><?php echo  $username;?></h1>
          </header>
      
            <span id="Usranme" name='id'> Usranme : </span><br><br>
            <hr>
            <span id="Usranme"> Usranme : </span><br><br>
            <hr>
      
            <p id="name"></p>
              </form>
            </div>
            
          </div>

          <hr>
          <ul>
            <li class="active"><a href="../acount/sc.php"> <i class="fa-solid fa-user fa-lg" style="color: #0a0a0b;"></i> <span> </span> معلومات الحساب </a></li>
            <li><a href=""> <i class="fa-solid fa-sack-dollar" style="color: #0f0f0f;"></i> <span> </span> اكسب معنا</a></li>
            <li><a href="#"> <i class="fa-solid fa-list fa-lg" style="color: #0f0f0f;"></i><span> </span>  نشاط الحساب </a></li>
            <li><a href="#"> <i class="fa-solid fa-lock fa-lg" style="color: #0a0a0a;"></i><span> </span>  الحماية </a></li>
          </ul>
        </div>
      </div>
     
  </div>
    <div id="mainbox" onclick="openFunction()">&#9776;</div>
    <nav class="nav-list" id="menu">
      
       <div class="logo ">
       
     <a href="#">  <img src="../photo/taxiow-low-resolution-logo-color-on-transparent-background.png" alt=""></a>
    
    </div>
    
       <div class="center-txt">
      
       <a href="../conxphp copy/user.php" class="ts"> صفحة رئيسة</a>
       <a href="#">معلومات عنا</a>
       <a href="#">مركز المساعدة</a>
       <a href="#">جهات الاتصال</a>

    
       <form action="sr">
        
           <div class="input-wrapper">
               <button class="icon"> 
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
      <button  name="btn" onclick="opnemoudal()"   >
           <i class="fa-solid fa-taxi fa-bounce" style="color: #ffe014;"></i> اطلب الان
          
          </button >
      
      
       </div> 

       <div class="btntxi">
        <button> <a href="../subscription/index.php"> <i class="fa-solid fa-taxi fa-beat-fade fa-2xl" style="color: #fbb904;" id="TXI"></i></a></button>
       <p>اعمل معنا</p>
         </div>
       <div class="user">

        <div class="btn">
  
        <div class="btnusr">
       <button > <i class="fa-solid fa-circle-user fa-2xl" style="color: #fcfcfd;" id="user" ></i></button>
       <p> حسابي الخاص</p>
      </div>
        </div>
       <div class="user-dropdown" id="user-dropdown">
          <div class="usrelog">
            <div class="cart_item">
              <img src="img.png" alt="" id="img1" />
               <input type="file" id="fil" />
              <button id="sign-out" ><a href="../login/index.php">تسجيل الخروج </a></button>
            </div>
            
            <div class="logt">
              <form action="" method="post" enctype="multipart/form-data">
      <header>
        
            <h1 name="id" value=""><?php echo  $username;?></h1>
          </header>
      
            <span id="Usranme" name='id'> Usranme : </span><br><br>
            <hr>
            <span id="Usranme"> Usranme : </span><br><br>
            <hr>
      
            <p id="name"></p>
              </form>
            </div>
            
          </div>

          <hr>
          <ul>
            <li class="active"><a href="../acount/sc.php"> <i class="fa-solid fa-user fa-lg" style="color: #0a0a0b;"></i> <span> </span> معلومات الحساب </a></li>
            <li><a href=""> <i class="fa-solid fa-sack-dollar" style="color: #0f0f0f;"></i> <span> </span> اكسب معنا</a></li>
            <li><a href="#"> <i class="fa-solid fa-list fa-lg" style="color: #0f0f0f;"></i><span> </span>  نشاط الحساب </a></li>
            <li><a href="#"> <i class="fa-solid fa-lock fa-lg" style="color: #0a0a0a;"></i><span> </span>  الحماية </a></li>
          </ul>
        </div>
      </div>
     
     
      <div class="closebtn" onclick="closeFunction()">&times;</div> 
     
      
      </nav>

  </div>

      <center>
        <section class="section">
          
   





     <div class="scrip">
      <div class="signi" id="sing_form">
            <h1>كن معنا </h1>


            <form onsubmit="return validateForm();" action="./insirt.php" method="post" enctype="multipart/form-data">
            <!------Name-------->
          <div id="nam">
            <input type="text" placeholder="اسم الاول" name="firsnam" id="firsnam" required>
            <span id="firstNameMessage" class="input-message"></span>

            <input type="text" placeholder="اسم عائلي" name="lasnim" id="lasnim" required>
            <span id="lastNameMessage" class="input-message"></span>

          </div>
          <!--Email-->
          <div class="emaiil">
            <input type="email" placeholder="البريد الإلكتروني"  name="email" id="email" required>
            <span id="emailMessage" class="input-message"></span>

            <input type="tel" placeholder="رقم الهاتف" name="numro" id="numro" required>
            <span id="phoneMessage" class="input-message"></span>

          </div>
            <!--------- cety --------------->
            <input  id="cty" list="city" name="city" placeholder="المدينة">
            <datalist id="city">
              <option value="el jadida">el jadida</option>
              <option value="casablnca"></option>
              <option value="sidi bannour"></option>
            </datalist>
            <span id="cityIdMessage" class="input-message"></span>

            
            
            <input type="text" name="cartnamber" id="cartnamber"  placeholder="رقم بطاقة الوطنية">
            <span id="nationalIdMessage" class="input-message"></span>

             
              
          <!------------checkbox--------------->
              
              <div class="checkbox">

              
                  <input type="checkbox" name="chek" value=" صاحب سيارة " id="chicken1">
                  صاحب سيارة 

                  <input type="checkbox" name="chek" value="مستاجرة" id="chicken2"> 
                  مستاجرة 
                  <span id="chickenMessage" class="input-message"></span>
           
              

             </div>

             <!-------------photo cart------>

            
                
              
                

                  


             


             
              <!------------------------------>
              <div class="send">
              <button  name="send" id="send">
                <i class="fa-solid fa-paper-plane fa-bounce" style="color: #efdb06;"></i>
                 اشتراك
              </button>
              </div>
            
         
              

            </form>
            <button id="btnlogin">! تسجيل دخول</button>
            </div>
            </div>


<div class="login" id="login-btn">
 
  <form action="" method="post">
  <h2 class="title">تسجيل الدخول</h2>

<div class="input-field">
  <i class="fas fa-user"></i>
  <input type="text" placeholder="اسم المستخدم" name="numro" id="email" value=""  />
  <div id="emaileror">   </div>
</div>
<div class="input-field">
  <i class="fas fa-lock"></i>
  <input type="password" placeholder="كلمة المرور "name="password" />
</div>
<input type="submit" value="تسجيل الدخول" class="btn1 solid" id="bib" name="Sign-in"  />
  </form>
  <button id="btnsig">! اشتراك</button>
</div>







          </div>
        </section>
      </center>

   <!-----------moudal ------------>
   <div class="moudal-total">
   
   <div class="moudal_center" id="moudal">
       <h1>اختر طلب الدي تريده</h1>  
       <div id="closebtn" onclick="closmoudal()"><i class="fa-solid fa-xmark fa-2xl" style="color: #ffffff;"></i></div> 

  <div class="taxi">


<!--------------taxiSmall------------------>
    <div class="taxiSmall">
       <img src="../photo/istockphoto-1187338980-612x612.jpg" alt=""
        onclick="redirectToPagetaxisghir()" >
    </div>
<!----------------taxigrand---------------->

    <div class="taxigrand">
    <img src="../photo/istockphoto-1187338983-612x612.jpg" alt=""
       onclick="redirectToPagetaxikbiri()">
    </div>
<!--------------taxiprevi------------------>

    <div class="taxiprevi">
       <img src="../photo/istockphoto-1187338980-612x612.jpg" alt=""
       onclick="redirectToPagetaxiprevi()">
    </div>
  </div>
   </div>
</div>

<!------------JS----------->
<script >
    
  
    <?php include "../JS/js.php"?>

  
  </script>
      <script src="index.js" ></script>

    <script src="../JS/trnsi.js" ></script>

  <script src="../JS/modal.js" ></script>

<script src="../JS/Translat.js"></script>

  
</body>
</html>