
<?php 
include('./conx.php');
include('./insert.php');



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="icon" href="/taxi/photo/تصميم بدون عنوان.svg">
    <link rel="stylesheet" href="./user.css">
    <link rel="stylesheet" href="./hedare.css">
    <link rel="stylesheet" href="style.css">

   
    
</head>
<body >

   <!---------------------    container   ---------------------->
<div class="container-1  " >
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
      
       <a href="" class="ts"> صفحة رئيسة</a>
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
      <button type="button" name="btn" onclick="redirectToPage2()"   >
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

            
          
  <div class="container ">

<h1 class="text-md-center">طلبات الموجودة</h1>


  

  <table class="table table-dark table-hover center">
   
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">اسم العميل</th>
          <th scope="col">موقعه</th>
          <th scope="col">الوجهة</th>
          <th scope="col">رقم الهاتف</th>
          <th scope="col">قبول </th>
          <th scope="col"> رفض</th>

        </tr>
      </thead>


 <?php for ($i = 0; $row = mysqli_fetch_array($rest); $i++) {?>
   

     <tbody>
        <tr>
          <th scope="row"> <?php echo  $row["id"]?></th>
          <td> <?php echo  $row["user_input"]?></td>
          <td><?php echo $row["city_input"]?> </td>
          <td><?php echo $row["search_input"]?> </td>
          <td><?php echo $row["tel_input"]?> </td>
          <td><button id="accept" class="accept " name="accept">قبول</button> </td>
          <td><button id="refuse" >رفض</button></td>

        </tr>
    
       
   

       
      </tbody>

 <?php }?>


  </table>
</div>











  </div>



  <script src="../JS/modal.js"></script>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>