
<?php
include ('./php/conx.php');
include('./php/insirt.php');
include ('../PHP/usernam.php');




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
    <title>موقع المدينة على الخريطة</title>
    <style>
  <?php include_once "style.css"?>
  <?php include_once "../css/hedare.css"?>
  <?php include_once "../css/haderuser.css"?>
  <?php include_once "../css/moudal.css"?>

</style>


    
    

</head>
<body onload="initMap()" >
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
      <button   onclick="opnemoudal()"   >
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

 
    <center class="center">

    <h1> طلب سيارة الاجرة  </h1>
   

      <!-----------FORM ------------------->
   <form   action="./php/insirt.php" method="post" enctype="multipart/form-data">
<div class="user">
  <input id="tel-input" type="tel" name="tel_input" placeholder="   رقم الهاتف ">
  <input id="user-input" type="text" value="<?php echo $username?>" name="user_input" placeholder="الاسم و نسب">

</div>
    
    <input id="city-input" type="text" name="city_input" placeholder="ابحث عن المدينة">
   <div class="mapst">
    <input id="search-input" type="text" name="search_input" placeholder="  الشارع أو الزقاق المتجه اليه">

    <input id="loca-input"  type="text" name="loca_input" placeholder="  الموقع المنطلق منه">

    <button type="button"  id="locate-button"><i class="fa-solid fa-street-view fa-beat-fade fa-xl" style="color: #f2a807;"></i>موقعي </button>

    </div>
    <div class="butn">
      <!-----زر لارسال المعلومات الى سائق---->
      <button  id="search_button" name="send"><i class="fa-solid fa-taxi fa-bounce fa-xl" style="color: #f9da10;"></i>ارسل طلب</button>
         
      
      <!-----زر لارسال  لمعرفت الموقع ---->

      <button type="button" id="search-button"><i class="fa-solid fa-magnifying-glass-location fa-fade fa-xl" style="color: #f1bf09;"></i>الموقع</button>
    </div>
    <div id="results" style="display: none;"><input type="search" name="" id=""></div> 

   </form>
   <div id="map"></div>
   <!---------------------------------------------------------->
</center>



<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>شكرا  على تقديم معلوماتك </h2>
    <p>سنتصل بك عما قريب </p>
  </div>
</div>



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


<!------------ js---------------------->

<script src="../JS/trnsi.js"></script>
<script src="../JS/Translat.js"></script>
<script src="./mapcity.js"></script>
<script src="../JS/modal.js"></script>



    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEEz6EuBwN3abHp3s5ZImFO8TQfQuHWQc&callback=initMap"></script>
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEEz6EuBwN3abHp3s5ZImFO8TQfQuHWQc&libraries=places&callback=initMap"></script>

    <!-------------------------------------->
</body>
</html>


