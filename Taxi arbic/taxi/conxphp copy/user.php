<?php 
include ('../login/php/conx.php');
include ('../PHP/usernam.php')
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
  <?php include_once "user.css"?>
  <?php include_once "copy.css"?>
  <?php include_once "../css/moudal.css"?>
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
       
     <a href="#">  <img src="photo/taxiow-low-resolution-logo-color-on-transparent-background.png" alt=""></a>
    
    </div>
    
       <div class="center-txt">
      
       <a href="" class="ts"> صفحة رئيسة</a>
       <a href="#">معلومات عنا</a>
       <a href="#" >مركز المساعدة</a>
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
      <button type="button" name="btn" onclick="opnemoudal()"   >
         <i class="fa-solid fa-taxi fa-bounce" style="color: #ffe014;"></i> اطلب الان

          </button >
      
      
       </div> 

       <div class="btntxi">
        <button> <a href="../USERTAXI/index.php"> <i class="fa-solid fa-taxi fa-beat-fade fa-2xl" style="color: #fbb904;" id="TXI"></i></a></button>
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

<!-------------------------     Container-1    ------------------------>
<div  class="container-1 " >
 <video autoplay muted loop id="myvideo" >
  <source src="photo/istockphoto-473097913-640_adpp_is.mp4" type="video/mp4">
  
 </video>
 
 <div class="contr1">
  
  <div class="text">
    
  <h1>مرحبا<span>TAXIOW</span> </h1>

  <p>نقدم لك خدمة توصيل سيارات الأجرة على باب منزلك أو مكانك مهما كان</p>

 
  <div class="bt">
    
    <button class="learn-more" onclick="redirectToPage3()" >
      <span class="circle" aria-hidden="true">
      <span class="icon arrow"></span>
      </span>
      <span class="button-text">تعرف اكثر</span>
    </button>

  </div>
</div>
</div>

<div class="im">
  
  <img class="hidden" src="photo/manhattan-street-lady-1026248.jpg" alt="">
  </div>

</div>

<!------------------------         Login     ------------------------------>
<!---------<div class="login  ">
 
  <div class="login-left">
    <div class="hidden">
 <h1>كن شريكا واكسب المال!</h1>
 <ul>
  <li><i class="fa-sharp fa-solid fa-star" style="color: #f0dd0f;"></i>جدول عمل مجاني
  </li>
  <li><i class="fa-sharp fa-solid fa-star" style="color: #f0dd0f;"></i> عدم وجود أوامر إلزامية
  </li>
  <li><i class="fa-sharp fa-solid fa-star" style="color: #f0dd0f;"></i>عدم وجود مدفوعات تمهيدية
  </li>
  <li><i class="fa-sharp fa-solid fa-star" style="color: #f0dd0f;"></i>نقبل جميع أنواع المركبات
  </li>
 </ul>
 <div class="bs">
  <button onclick="redirectToPage3()">
    <span>انضم الينا</span>
    <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
        <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="black"></path>
    </svg>
</button>
 </div>
    </div>
  </div>
 
 
  <div class="login-right">
    <div class="hidden">
 <h1>طلب سيارة أجرة</h1>
<h2>عبر الإنترنت أو على التطبيق</h2>

<ul>
  <li><i class="fa-solid fa-bolt" style="color: #f5ed0a;"></i>  طلب سيارة أجرة عبر الإنترنت أو على التطبيق.</li>
  <li><i class="fa-solid fa-bolt" style="color: #f5ed0a;"></i>تتبع تقريب السيارة عبر الإنترنت.

  </li>
  <li><i class="fa-solid fa-bolt" style="color: #f5ed0a;"></i> الدفع نقدًا أو ببطاقة أو مكافآت.

  </li>
  <li><i class="fa-solid fa-bolt" style="color: #f5ed0a;"></i>التكلفة المقدرة للرحلة مقدما.

  </li>
  <li><i class="fa-solid fa-bolt" style="color: #f5ed0a;"></i>نظام التصنيف للسائقين والركاب.

  </li>
  <li><i class="fa-solid fa-bolt" style="color: #f5ed0a;"></i> حفظ تاريخ الرحلات السابقة.


  </li>
</ul>
   <div class="bs1">
    <button onclick="redirectToPage2()">
      <span>انضم الينا</span>
      <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
          <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="black"></path>
      </svg>
  </button>
   </div>
  </div>
  </div>
</div>
---------->
  <!---------------------------------- Our-services  ----------------------->
  
<section class="Our-services"  >
  
 
<div class="ro">
  <div class="tes">
    <div class="hidden">
  <h1>خدماتنا
</h1>
    </div>
  </div>
  <div class="asi">
    <aside>
  <button id="bt1" onclick="div1()" class="hidden" >
    <i class="fa-solid fa-taxi fa-beat-fade" ></i> my taxi
  </button>
  <button id="bt2" onclick="div2()" class="hidden" ><i class="fa-solid fa-code-pull-request fa-beat-fade" style="color: #060303;"></i> to request</button>
  <button id="bt3" onclick="div3()" class="hidden" ><i class="fa-solid fa-truck-fast fa-beat-fade" style="color: #0c0c0f;"></i> Emergency services</button>
</aside>
</div>
 
</div>

<div class="bat">
  <!----MY Taxi-->
  <div class="bos" id="div1" >
    
    <div class="hidden">
  <!-- TAXI SEGHIR  -->
   <article class="card">
    <div class="temporary_text">
      <img src="photo/istockphoto-1187338980-612x612.jpg" alt="">
    </div>
<div class="card_content">
    <span class="card_title">أخذ سيارة أجرة صغيرة</span>
        <span class="card_subtitle">Thsi is a subtitle of this page. Let us see how it looks on the Web.</span>
        <p class="card_description">Lorem ipsu
          m dolor, sit amet  expedita exercitationem recusandae aut dolor tempora aperiam itaque possimus at, cupiditate earum, quae repudiandae aspernatur? Labore minus soluta consequatur placeat.</p>
        <button id="bt2"   >
        <a href="../taxisghirr/indec.php">
          <span>اطلب</span>
          <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
              <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="black"></path>
          </svg>
        </a>
      </button>
</div>
</article>
    </div>
    <div class="hidden">
  <!-- TAXI KBIR  -->
<article class="card">
  <div class="temporary_text">
<img src="photo/istockphoto-1187338983-612x612.jpg" alt="">
  </div>
<div class="card_content">
  <span class="card_title">أخذ جراند تاكسي</span>
      <span class="card_subtitle">Thsi is a subtitle of this page. Let us see how it looks on the Web.</span>
      <p class="card_description">Lorem ipsum dolor, sit amet  expedita exercitationem recusandae aut dolor tempora aperiam itaque possimus at, cupiditate earum, quae repudiandae aspernatur? Labore minus soluta consequatur placeat.</p>
      <button>
        <span>طلب</span>
        <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
            <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="black"></path>
        </svg>
    </button>
</div>
</article>
    </div>
  <!-- TAXI FAMILY  -->
  <div class="hidden">
  <article class="card">
    <div class="temporary_text">
      <div class="fm">
     <img src="photo/vito-ox3q3m8ikgz2vy3rct47x7xlx19h77tkm7i7el7i5c.jpg" alt="" >
    </div>
    </div>
  <div class="card_content">
    <span class="card_title">سيارات خاصة</span>
        <span class="card_subtitle">Thsi is a subtitle of this page. Let us see how it looks on the Web.</span>
        <p class="card_description">Lorem ipsum dolor, sit amet  expedita exercitationem recusandae aut dolor tempora aperiam itaque possimus at, cupiditate earum, quae repudiandae aspernatur? Labore minus soluta consequatur placeat.</p>
        <button>
          <span>طلب</span>
          <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
              <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="black"></path>
          </svg>
      </button>
  </div>
  </article>
  </div>

 

 
  </div>

<!------- Service talabe  --------->
<!----
<div class="to-request" id="div2">
 <div class="carts">
  <div class="text">
    <p>HELLO  WALCOME </p>
    <H1>OMAR HAJJOUB</H1>
    <h2>PAZZ KJEGK</h2>
    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae neque, ratione soluta odio fugiat nobis vero, porro est, repellendus incidunt aliquid quasi! Quae commodi autem soluta dolore! Mollitia, voluptas ad!</P>
  </div>
  <div class="for">
    <div class="cart_item">
      <img src="img.png" alt="" id="img1"/>
      <input type="file" id="fil" />
    </div>
    <div class="no">
    <input type="text" placeholder="Name">
    <input type="text" placeholder="Nickname" id="">
   <div class="vil">
    <input type="text" placeholder="Nation" list="vil">
     <datalist id="vil">
      <option value="MAROC">MAROC</option>
     </datalist>

     <input type="text" placeholder="City" list="City">
     <datalist id="City">
      <option value="EL JADIDA">EL JADIDA</option>
      <option value="CASA">CASA</option>
      <option value="MARAKSH">MARAKSH</option>
      <option value="AGDIR">AGDIR</option>
     </datalist>
   </div>

  
   <input type="datetime-local" name="" id="">
    <div class="email">
      
    <input type="email" placeholder="EMAIL" >
 
  
    <input type="tel"  placeholder="PHONE" pattern="[0-9]{10}" required>
  </div>
 
  <div class="send">
    <button><i class="fa-solid fa-paper-plane fa-bounce" style="color: #efdb06;"></i>
      SEND</button>
  </div>

  </div>
</div>
 </div>
</div>------>
<!---------------------------------->
<div class="Emergency-services" id="div3">
  <h1>HELLO OMAR HAJJOUB</h1>
  <div class="Emer"> 
    <div class="imag">
     
       
     <img src="photo/airport_waiting_man_79241_300x168.jpg" alt="" class=" itmes">
  
     <img src="photo/istockphoto-526704831-612x612.jpg" alt="" class=" itmes">
     <img src="photo/istockphoto-458089529-612x612.jpg" alt="" class=" itmes">
     <img src="photo/istockphoto-1423473302-612x612.jpg" alt="" class=" itmes">
     
    </div>
     </div>

</div>



</div>
  </div>
</section>

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

 <!---------------------------------- ABOUT  ----------------------------->

<div class="about" >
  <div class="ba1">

    <div class="logo">
      <a href="#">  <img class="hidden" src="photo/taxiow-low-resolution-logo-color-on-transparent-background.png" alt=""></a>
        </div>


        
      




        <div class="hidden">
        <div class="input-group">
          <input type="email" class="input" id="Email" name="Email" placeholder="uiverse@verse.io" autocomplete="off">
          <input class="button--submit" value="Subscribe" type="submit">
      </div>
        </div>
  </div>

<div class="ba2">
  <div class="hidden">
    <div class="ul1">
    <ul>
      <li><a href="#"><i class="fa-solid fa-address-card" style="color: #faf9f5;"></i> معلومات عنا</a></li>
      <li><a href="#"><i class="fa-solid fa-circle-info" style="color: #f5f7f9;"></i>مركز المساعدة</a></li>
      <li><a href="#"><i class="fa-solid fa-key" style="color: #f6f7f9;"></i> جهات الاتصال</a></li>
    </ul>
  </div>
  </div>
  <div class="hidden">
  <div class="ul2">
    <ul>
      <li><a href="#">سياسة الخصوصية</a></li>
      <li><a href="#">سياسة الإلغاء</a></li>
      <li><a href="#">الية الدفع</a></li>
      <li><a href="#">اتفاقية المستخدم</a></li>
      <li><a href="#">شروط</a></li>
    </ul>
  </div>
 </div>
  <div class="download">
    <div class="hidden">
    <h1>مواقع تواصل الاجتماعي</h1>
    </div>
    <div class="hidden">
    <div class="main">
      <div class="up">
        <button class="card1">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="30px" height="30px" fill-rule="nonzero" class="instagram"><g fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8,8)"><path d="M11.46875,5c-3.55078,0 -6.46875,2.91406 -6.46875,6.46875v9.0625c0,3.55078 2.91406,6.46875 6.46875,6.46875h9.0625c3.55078,0 6.46875,-2.91406 6.46875,-6.46875v-9.0625c0,-3.55078 -2.91406,-6.46875 -6.46875,-6.46875zM11.46875,7h9.0625c2.47266,0 4.46875,1.99609 4.46875,4.46875v9.0625c0,2.47266 -1.99609,4.46875 -4.46875,4.46875h-9.0625c-2.47266,0 -4.46875,-1.99609 -4.46875,-4.46875v-9.0625c0,-2.47266 1.99609,-4.46875 4.46875,-4.46875zM21.90625,9.1875c-0.50391,0 -0.90625,0.40234 -0.90625,0.90625c0,0.50391 0.40234,0.90625 0.90625,0.90625c0.50391,0 0.90625,-0.40234 0.90625,-0.90625c0,-0.50391 -0.40234,-0.90625 -0.90625,-0.90625zM16,10c-3.30078,0 -6,2.69922 -6,6c0,3.30078 2.69922,6 6,6c3.30078,0 6,-2.69922 6,-6c0,-3.30078 -2.69922,-6 -6,-6zM16,12c2.22266,0 4,1.77734 4,4c0,2.22266 -1.77734,4 -4,4c-2.22266,0 -4,-1.77734 -4,-4c0,-2.22266 1.77734,-4 4,-4z"></path></g></g></svg>
        </button>
        <button class="card2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="30px" height="30px" class="twitter"><path d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429"></path></svg>
        </button>
      </div>
      <div class="down">
        <button class="card3">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px" class="github">    <path d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z"></path></svg>
        </button>
        <button class="card4">
          <svg height="30px" width="30px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" class="discord"><path d="M40,12c0,0-4.585-3.588-10-4l-0.488,0.976C34.408,10.174,36.654,11.891,39,14c-4.045-2.065-8.039-4-15-4s-10.955,1.935-15,4c2.346-2.109,5.018-4.015,9.488-5.024L18,8c-5.681,0.537-10,4-10,4s-5.121,7.425-6,22c5.162,5.953,13,6,13,6l1.639-2.185C13.857,36.848,10.715,35.121,8,32c3.238,2.45,8.125,5,16,5s12.762-2.55,16-5c-2.715,3.121-5.857,4.848-8.639,5.815L33,40c0,0,7.838-0.047,13-6C45.121,19.425,40,12,40,12z M17.5,30c-1.933,0-3.5-1.791-3.5-4c0-2.209,1.567-4,3.5-4s3.5,1.791,3.5,4C21,28.209,19.433,30,17.5,30z M30.5,30c-1.933,0-3.5-1.791-3.5-4c0-2.209,1.567-4,3.5-4s3.5,1.791,3.5,4C34,28.209,32.433,30,30.5,30z"></path></svg>
        </button>
      </div>
    </div>
    </div>
  </div>
</div>
  <br> 
  <hr> <hr>

  <div class="ba3">
    <div class="hidden">
   
     <p>TAXIOW شركة . <span>جميع الحقوق محفوظة © 2022</span> </p>
    </div>
     <div class="do">
      <div class="hidden">
    <div class="button" data-tooltip="Size: 20Mb">
      <div class="button-wrapper">
        <div class="text">تحميل</div>
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17"></path></svg>
          </span>
        </div>
      </div>
    </div>
  </div>


  </div>

</div>





</section>


<script>
  <?php include "user.js"?>
</script>

<script src="./JS/trnsi.js" ></script>

<script src="../JS/modal.js" ></script>

<script src="../JS/Translat.js" ></script>




</body>
</html>