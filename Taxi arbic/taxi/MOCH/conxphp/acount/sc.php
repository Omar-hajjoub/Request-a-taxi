<?php 
include ('./conx.php');

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $_SESSION['username'] = $username;
   $_SESSION['email'] = $email;
   $u= "SELECT `id`, `username`, `email` FROM user ";
}
if (isset($_SESSION['username']) ) {
 
  $username = $_SESSION['username'];
 
  }else {
    echo "فشل تسجيل الدخول. الرجاء التحقق من اسم المستخدم وكلمة المرور.";
}





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
       <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="copy.css">
    <link rel="stylesheet" href="../user.css">
 
    
   


</head>
<body >
 <section class="home">
<!---------------------    container   ---------------------->
<div class="container  " >
  <div class="log1">
    
  <a href="#" >  <img src="photo/taxiow-low-resolution-logo-color-on-transparent-background.png" alt=""></a>
  <div class="btntxi">
    <button> <i class="fa-solid fa-taxi fa-beat-fade fa-2xl" style="color: #fbb904;" id="TXI"></i></button>
   <p>Work With Us</p>
     </div>


     <div class="user">
      <div class="btn">

      <div class="btnusr">
     <button > <i class="fa-solid fa-circle-user fa-2xl" style="color: #fcfcfd;" id="user" ></i></button>
     <p> Your Account</p>
    </div>
      </div>
     <div class="user-dropdown" id="user-dropdown">
        <div class="usrelog">
          <div class="cart_item">
            <img src="img.png" alt="" id="img1" />
             <input type="file" id="fil" />
            <button id="sign-out" onclick="redirectToPage2()"> Sign Out </button>
          </div>
          
          <div class="logt">
    <header>
          <h1 id="Usranme">UserLogin</h1>
        </header>
    
          <span id="Usranme"> Usranme : </span><br><br>
          <hr>
          <span id="Usranme"> Usranme : </span><br><br>
          <hr>
    
          <p id="name"></p>
    
          </div>
        </div>
        <hr>
        <ul>
          <li class="active"><a href="/taxi/User page/acount/sc.php"> <i class="fa-solid fa-user fa-lg" style="color: #0a0a0b;"></i> <span> </span> Account Information </a></li>
          <li><a href="#"> <i class="fa-solid fa-sack-dollar" style="color: #0f0f0f;"></i> <span> </span> Earn with Us </a></li>
          <li><a href="#"> <i class="fa-solid fa-list fa-lg" style="color: #0f0f0f;"></i><span> </span>  Account Activity </a></li>
          <li><a href="#"> <i class="fa-solid fa-lock fa-lg" style="color: #0a0a0a;"></i><span> </span>  Security </a></li>
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
     
     <a href="../user.php" class="ts"> HOME</a>
     <a href="#">ABOUT US</a>
     <a href="#">HELP CENTER</a>
     <a href="#">CONTACTS</a>
  
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
      
     <button   >
       <a href="../taxiprevi/index.php">  <i class="fa-solid fa-taxi fa-bounce" style="color: #ffe014;"></i> Order Online</a>
     </button >
    
     </div> 

     <div class="btntxi">
      <button> <i class="fa-solid fa-taxi fa-beat-fade fa-2xl" style="color: #fbb904;" id="TXI"></i></button>
     <p>Work With Us</p>
       </div>
     <div class="user">
      <div class="btn">

      <div class="btnusr">
     <button > <i class="fa-solid fa-circle-user fa-2xl" style="color: #fcfcfd;" id="user" ></i></button>
     <p> Your Account</p>
    </div>
      </div>
     <div class="user-dropdown" id="user-dropdown">
        <div class="usrelog">
          <div class="cart_item">
            <img src="img.png" alt="" id="img1" />
             <input type="file" id="fil" />
            <button id="sign-out" onclick="redirectToPage2()"> Sign Out </button>
          </div>
          
          <div class="logt">
    <header>
          <h1 id="Usranme"><?php echo  $username;?></h1>
        </header>
    
          <span id="Usranme"> Usranme : </span><br><br>
          <hr>
          <span id="Usranme"> Usranme : </span><br><br>
          <hr>
    
          <p id="name"></p>
    
          </div>
        </div>
        <hr>
        <ul>
          <li class="active"><a href="acount/sc.php"> <i class="fa-solid fa-user fa-lg" style="color: #0a0a0b;"></i> <span> </span> Account Information </a></li>
          <li><a href="#"> <i class="fa-solid fa-sack-dollar" style="color: #0f0f0f;"></i> <span> </span> Earn with Us </a></li>
          <li><a href="#"> <i class="fa-solid fa-list fa-lg" style="color: #0f0f0f;"></i><span> </span>  Account Activity </a></li>
          <li><a href="#"> <i class="fa-solid fa-lock fa-lg" style="color: #0a0a0a;"></i><span> </span>  Security </a></li>
        </ul>
      </div>
    </div>
     <div class="closebtn" onclick="closeFunction()">&times;</div> 
   
    
    </nav>

</div>


  <section class="Account">
<main class="main">
  <h1>hello</h1>

    <!--------------------->

  <header>
    <div class="cart_item">
      <img src="img.png" alt="" id="img1" />
       <input type="file" id="fil" />
       <input type="text" id="usernam" placeholder="usernam" value="<?php echo  $username;?>" readonly>
    </div>
    <div class="inpt" id="inpt" >
    <div class="card_user">
      <div class="input-group1">
        <input required="" type="text" name="First-Name" value="" autocomplete="off" class="input1 "  id="First-Name" readonly  >
        <label class="user-label">First Name</label>
      </div>
      <div class="input-group1">
        <input required="" type="text" name="Fore-Name" autocomplete="off" class="input1" id="Fore-name" value=""  readonly >
        <label class="user-label">Fore Name</label>
      </div>
    </div>
    <div class="card_em">
      <div class="input-group1">
        <input required="" type="text" name="Email" autocomplete="off" class="input1" id="Email" value="<?php echo  $email;?>" readonly>
        <label class="user-label" id="Emil">Email</label>
      </div>
      <div class="ui-wrapper">
        <input checked="" id="Maroc" name="flag" type="radio"  >
        <input id="Maroc" name="flag" type="radio">
     
        <input class="dropdown-checkbox" name="dropdown" id="dropdown" type="checkbox"   >
        <label class="dropdown-container" for="dropdown"></label>
        <div class="input-wrapper">
            <legend>
              <label for="phonenumber"  >
                Phonenumber*
              </label>
            </legend>
            <div class="textfield">
                <input pattern="\d+" maxlength="11" id="phonenumber" type="text" readonly  >
                <span class="invalid-msg">This is not a valid phone number</span>
            </div>
        </div>
        <div class="select-wrapper">
            <ul>
                <li class="Maroc"><label for="Maroc"><span>MR</span>Maroc(+212)</label></li>
        
            </ul>
        </div>
    </div>
     
    </div>
    <button id="my-Save" onclick=" savebtn">Save</button>
    <button id="my-updat" onclick="Updat">Cliquez ici</button>
   

    
    </div>

  
  </header>


  <!--------------------->
 <article>

 </article> 
 


</main>













  </section>
 <script src="sc.js"></script>
  <Script src="/taxi/MOCH/page/taxi.js"></Script>
<script src="/taxi/JS/Translat.js"></script>



</body>
</html>