


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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/taxi/css/hedare.css">
    

</head>
<body onload="initMap()" >

<div class="container " >
    <div class="log1">
      
    <a href="#" >  <img src="/taxi/photo/taxiow-low-resolution-logo-color-on-transparent-background.png" alt=""></a>
  
  </div>
    <div id="mainbox" onclick="openFunction()">&#9776;</div>
    <nav class="nav-list" id="menu">
      
       <div class="logo ">
        <div class="hidden">
            <a href="#" >  <img src="/taxi/photo/taxiow-low-resolution-logo-color-on-transparent-background.png" alt=""></a>
        </div>
    </div>
    
       <div class="center-txt">
        <div class="hidden">
       <a href="../conxphp/user.php" class="ts"> HOME</a>
       <a href="#">ABOUT US</a>
       <a href="#">HELP CENTER</a>
       <a href="#">CONTACTS</a>
        </div>
       <form action="sr">
        <div class="hidden">
           <div class="input-wrapper">
               <button class="icon"> 
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="25px" width="25px">
                   <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#fff" d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z"></path>
                   <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#fff" d="M22 22L20 20"></path>
                 </svg>
               </button>
               <input placeholder="search.." class="input" name="text" type="text">
             </div>
        </div>
            </form>
       </div>
       <div class="logne ">
        <div class="hidden">
       <button onclick="redirectToPage2()"  >
           <i class="fa-solid fa-taxi fa-bounce" style="color: #ffe014;"></i> Order Online
       </button >
        </div>
       </div> 
       <div class="closebtn" onclick="closeFunction()">&times;</div> 
     
      
      </nav>

  </div>

    <center class="center">

    <h1>موقع المدينة على الخريطة</h1>
    <div class="kbir">
   <form   action="./php/insirt.php" method="post" enctype="multipart/form-data">


   <div class="select">
    <select id="hom" name="home" >
    <option value="الجديدة">الجديدة</option>

        <option value="الرباط">الرباط</option>
        <option value="الدار البيضاء">الدار البيضاء</option>
        <option value="مراكش">مراكش</option>
        <option value="فاس">فاس</option>
        <option value="طنجة">طنجة</option>
  
        <!-- إضافة المزيد من المدن المغربية هنا -->
    </select>


<div class="select">
    <select id="city" name="cty" >
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
        
        <!-- إضافة المزيد من المدن المغربية هنا -->
    </select>
    <label for="city">  :  الى </label>
</div>
<input type="text" name="num_C" value="" id="num_C" style="height: 30px;" placeholder="عدد ركاب" >
<input type="tel" name="numro" value="" id="numro" style="height: 30px;" placeholder="رقم هاتف " >
<!----------------------------->
<div class="prix">

  <input type="text" name="prix" value="" id="pri" style="height: 30px;" placeholder="ثمن رحلة  " readonly>
  
  </div>
  <div class="km">
  
  <input type="text"  name="km" id="km" style="height: 30px;" placeholder="المسافة بين موقعك ومدينة" readonly>
  
  </div>
  <div class="mint">
  <input type="text" name="mint" value="" id="mint" style="height: 20px;" placeholder="والوقت المقدر للوصول هو" readonly>
  
  
  </div>
  
  
<!--------butoon send ----------->

<div class="send">
<button name="send" id="send">ارسال المعلومات</button>


</div>


</form>

<button id="search-button"  >رؤية موقع</button>



</div>
 <div class="maps">
<div id="map"></div>
 </div>
</center>
<script src="script.js"></script> 
 <script src="../JS/Translat.js"></script>
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEEz6EuBwN3abHp3s5ZImFO8TQfQuHWQc&libraries=places&callback=initMap">
</script>
    
</body>
</html>


