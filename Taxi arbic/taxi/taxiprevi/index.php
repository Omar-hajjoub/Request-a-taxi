
<?php
include ('./php/conx.php');
include('./php/insirt.php');
include('./php/usernam.php');



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

    <h1>موقع المدينة على الخريطة</h1>
    <div class="kbir">
      <div class="locate-button">
      <button type="button"  id="locate-button"><i class="fa-solid fa-street-view fa-beat-fade fa-xl" style="color: #f2a807;"></i>موقعي </button>
      </div>
   <form   action="./php/insirt.php" method="post" enctype="multipart/form-data">

   
<div class="ctymps">

<input type="text" name="nom" value="<?php echo  $username;?>" id="nom" style="height: 30px;" placeholder="اسم العميل " >

<div class="select">
  <label for="destination"></label>
  <input id="destination_input"  name="destination_input"  placeholder="المدينة المتجه اليها" list="destination">
  <datalist id="destination"  >
    <option value="الجديدة">الجديدة</option>
    <option value="الرباط">الرباط</option>
    <option value="الدار البيضاء">الدار البيضاء</option>
    <option value="مراكش">مراكش</option>
    <option value="فاس">فاس</option>
    <option value="طنجة">طنجة</option>
    <option value="مكناس">مكناس</option>
    <option value="أكادير">أكادير</option>
    <option value="القنيطرة">القنيطرة</option>
    <option value="وجدة">وجدة</option>
  </datalist>
  <input type="text" name="home" value="" id="locate" style="height: 30px;" placeholder="موقعي" readonly />

</div>
</div>
<div class="enu">
<input type="text" name="num_C" value="" id="num_C" style="height: 30px;" placeholder="عدد ركاب" >
<input type="tel" name="numro" value="" id="numro" style="height: 30px;" placeholder="رقم هاتف " >
</div>
<!----------------------------->


 <div class="ja">
  <div class="km">
  
  <input type="text"  name="km" id="km" style="height: 30px;" placeholder="المسافة بين موقعك ومدينة" readonly>
  
  </div>
 
  <div class="mint">
  <input type="text" name="mint" value="" id="min" style="height: 30px;" placeholder="والوقت المقدر للوصول هو" readonly>
  
  
  </div>
  </div>
  <div class="prix">

<input type="text" name="prix" value="" id="pri" style="height: 30px;" placeholder="ثمن رحلة  " readonly>

</div>
  
<!--------butoon send ----------->

<div class="send">
<button name="send" id="send">ارسال المعلومات</button>
<button type="button" id="search-button" >رؤية موقع</button>

</div>


</form>



</div>
 <div class="maps">
<div id="map"></div>
 </div>
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


<!------------ js---------------------->

<script >
    
  <?php include_once "./mps.js"?>
</script>



    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEEz6EuBwN3abHp3s5ZImFO8TQfQuHWQc&callback=initMap"></script>
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEEz6EuBwN3abHp3s5ZImFO8TQfQuHWQc&libraries=places&callback=initMap">
</script>
<script src="../JS/trnsi.js" ></script>
<script src="../JS/modal.js" ></script>

<script src="../JS/Translat.js" ></script>

    <!-------------------------------------->
</body>
</html>


