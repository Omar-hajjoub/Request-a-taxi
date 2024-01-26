<?php 
include ('./php/conx.php');
include ('./php/insert.php');
include ('../PHP/usernam.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="/bootstrap/css/bootstrap-utilities.rtl.min.css.map">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="icon" href="/taxi/photo/تصميم بدون عنوان.svg">
    
    <style>
  <?php include_once "./css/style.css"?>
  <?php include_once "./css/copy.css"?>
  <?php include_once "../css/moudal.css"?>
  <?php include_once "../conxphp/user.css"?>
</style>
    
   


</head>
<body >
 <section class="home">
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
      
       <a href="../conxphp/user.php" class="ts"> صفحة رئيسة</a>
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
      <button type="button" name="btn" onclick=" opnemoudal()"   >
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

 
  <section class="Account">
<main class="main">
  <h1>معلومات الحساب</h1>

    <!--------------------->
<form method="post" action="">
  <header>
    <div class="cart_item">
      <img src="img.png" alt="" id="img1" />
       <input type="file" id="fil" />
       <input type="text" id="usernam" name="username" placeholder="اسم العميل" value="<?php echo  $username;?>" readonly>
    </div>
    <div class="inpt" id="inpt" >
    <div class="card_user">
      <div class="input-group1">
        <input required="" type="text" name="First_Name" value="<?php echo  $First_Name;?>" autocomplete="off" class="input1 "  id="First-Name" readonly  >
        <label class="user-label">اسم الاول</label>
      </div>
      <div class="input-group1">
        <input required="" type="text" name="Fore_Name" autocomplete="off" class="input1" id="Fore-name" value="<?php echo  $First_Name;?>"  readonly >
        <label class="user-label">الاسم العائلي</label>
      </div>
    </div>
    <div class="card_em">
      <div class="input-group1">
        <input required="" type="text" name="email" autocomplete="off" class="input1" id="Email" value="<?php echo  $email;?>" readonly>
        <label class="user-label" id="Emil">البريد الالكتروني</label>
      </div>
      <div class="ui-wrapper">
        <input checked="" id="Maroc" name="flag" type="radio"  >
        <input id="Maroc" name="flag" type="radio">
     
        <input class="dropdown-checkbox" name="dropdown" id="dropdown" type="checkbox"   >
        <label class="dropdown-container" for="dropdown"></label>
        <div class="input-wrapper">
            <legend>
              <label for="phonenumber"  >
                رقم الهاتف*
              </label>
            </legend>
            <div class="textfield">
                <input pattern="\d+" maxlength="11" id="phonenumber" type="text" name="numro" value="<?php echo  $numro;?>" readonly  >
                <span class="invalid-msg">This is not a valid phone number</span>
            </div>
        </div>
        <div class="select-wrapper">
            <ul>
                <li class="Maroc"><label for="Maroc"><span>MR</span>المغرب(+212)</label></li>
        
            </ul>
        </div>
    </div>
     
    </div>
    <button id="my-Save" onclick=" savebtn" name="my-Save">حفظ</button>
    <button id="my-updat" onclick="Updat" name="my-updat">تعديل</button>
   

    
    </div>

  
  </header>
</form>
  <!--------------------->
 <article>

 </article> 
 


</main>











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

  </section>


<!-----------------JS----------------------->  
 <script >
   <?php include_once "sc.js"?>
   <?php include_once "../taxi.js"?>
   </script>

<script src="../JS/trnsi.js" ></script>


<script src="../JS/modal.js" ></script>

<script src="../JS/Translat.js" ></script>


</body>
</html>