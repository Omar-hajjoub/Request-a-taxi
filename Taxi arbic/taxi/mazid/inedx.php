
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mazid</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap-utilities.rtl.min.css.map">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <style>
  <?php include_once "./style.css"?>
  <?php include_once "../css/hedare.css"?>
</style>
    

</head>
<body>
<!---------------------    container   ---------------------->
<div class="container  " >
    <div class="log1">
      
    <a href="#" >  <img src="../photo/taxiow-low-resolution-logo-color-on-transparent-background.png" alt=""></a>
  
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
       
       <button type="button" name="btn" onclick="redirectToPagelogin()"   >
           <i class="fa-solid fa-taxi fa-bounce" style="color: #ffe014;"></i> اطلب الان
          
          </button >
      

       </div> 
       <div class="closebtn" onclick="closeFunction()">&times;</div> 
     
      
      </nav>

  </div>

 
  <div class="hidden">
    <div class="conatianr ">
        <div class="hidden">
        <div class="Taxi-sghir" id="div1">
            <div class="hidden">
        <div class="row" >
            <h1 class="hidden" > Taxi OW </h1>
            <h2 class="hidden">سيارة التاكسي المغربية الصغيرة</h2>
            <p class="hidden">تعمل سيارات الأجرة الصغيرة في المغرب على مبدأ مشاركة السيارات ، حيث يتم التقاط الركاب في محطات محددة ومشاركة الركوب مع ركاب آخرين متجهين في نفس الاتجاه أو على نفس الطريق. تكلفة ركوب سيارة الأجرة في المغرب معتدلة ومنخفضة مقارنة بأنواع سيارات الأجرة الخاصة الأخرى.

</p>

        </div>
            </div>
    </div>
        </div>

        <!----- Taxi kbir--------->
        <div class="hidden">
        <div class="taxi-kbir" id="div2">
            <div class="hidden">
            <div class="row1" >
            <h1  class="hidden"> Taxi OW </h1>
            <h2 class="hidden">التاكسي المغربي الكبير
</h2>
            <p class="hidden">تتميز سيارة الأجرة الكبيرة بحجمها الواسع وقدرتها على استيعاب عدد كبير من الركاب. يستخدم بشكل عام للرحلات الطويلة بين المدن المغربية.

.</p>
        </div>
            </div>
    </div>
      
    </div>


    <!----- Taxi previ--------->
    <div class="hidden">
    <div class="taxi-previ" id="div3">
        <div class="hidden">
        <div class="row2" >
            <h1 class="hidden" > Taxi OW </h1>
            <h2 class="hidden">سيارات عائلية خاصة </h2>
            <p class="hidden">تلعب السيارات العائلية الخاصة في المغرب دورًا مهمًا في تلبية احتياجات العائلات لسفر مريح وآمن. إنها توفر وسيلة ملائمة للعائلات للاستفادة من الرحلات الطويلة والتنقل بين المدن والمواقع السياحية في المغرب. تعكس هذه السيارات أيضًا تطور قطاع السيارات في المغرب والطلب المتزايد على السيارات العائلية الفاخرة والعملية.

</p>

        </div>
        </div>
     </div>
    </div>
    <!----- kotchi --------->
    <div class="hidden">
     <div class="kotchi" id="div4">
        <div class="hidden">
    <div class="row3">
        <h1 class="hidden" > Taxi OW </h1>
        <h2 class="hidden">La petite voiture de taxi marocaine</h2>
        <p class="hidden">Les petites voitures de taxi au Maroc fonctionnent sur le principe du covoiturage, où les passagers sont pris en charge à des arrêts spécifiques et partagent le trajet avec d'autres passagers se dirigeant dans la même direction ou sur le même itinéraire. Le coût du trajet en voiture de taxi au Maroc est modéré et inférieur par rapport à d'autres types de taxis privés.</p>

    </div>
        </div>
      </div>
    </div>




     
      <div class="articl">
        
        <div class="imag">
            <div class="imag1" >
           <img    src="../photo/istockphoto-1187338980-612x612.jpg" alt=""  draggable="false"  onclick="div1()" >
           <div class="tst">
            <h1>طاكسي صغير </h1>
            <p></p>
           </div>
        </div>
        <div class="imag1">
           <img  src="../photo/istockphoto-458089529-612x612.jpg" alt="" draggable="false" onclick="div2()">
           <div class="tst">
            <h1>طاكسي كبير </h1>
            <p></p>
           </div>
        </div>
           <div class="imag1">
           <img   src="../photo/vito-ox3q3m8ikgz2vy3rct47x7xlx19h77tkm7i7el7i5c.jpg" alt="" draggable="false" onclick="div3()">  
           <div class="tst">
            <h1>سيارة خاصة </h1>
            <p></p>
           </div>
        </div>
           <div class="imag1">
           <img  src="../photo/istockphoto-1187338980-612x612.jpg" alt="" draggable="false" onclick="div4()"> 
           <div class="tst">
            <h1>الكوتشي </h1>
            <p></p>
           </div>
        </div>
        </div>



       
  
  
  
          </div>
        
     
        

        </div>
    















    </div>

  </div>




  <script >
    
    <?php include_once ""?>
    <?php include_once "../JS/Translat.js"?>
    <?php include_once ""?>

    <?php include_once "../taxi.js"?>

  </script>
<script src="./JS/trnsi.js" ></script>
<script src="main.js" ></script>

<script src="../JS/Translat.js" ></script>
    

</body>
</html>