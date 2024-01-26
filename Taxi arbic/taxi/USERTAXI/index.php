

<?php 
include ('../subscription/php/conx.php');

include('./php/conx.php');
include('./php/insirt.php');
include('./php/taxikbir.php');

include('../PHP/usertaxi.php');

?>

<!DOCTYPE html>
<html>
<head> <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>صفحة السائقين</title>
 <style>
    <?php include_once 'style.css'?>
    <?php include_once "style copy.css"?>

 </style>
    
</head>
<body>


<input type="checkbox" id="nav-togle">
   <div class="asidebar">
    <div class="sidebar-brand">
        <img src="../photo/taxiow-low-resolution-logo-color-on-transparent-background.png" alt="taxi-ow" width:50px;>
      
    </div>

    <!----sidbar-menu----->
<div class="sidbar-menu">
    <ul>
        <li><a href="#" class="active"  onclick="div1()"><i class="fa-solid fa-house" style="color: #f2a602;"></i><span>صفحة رئسية</span></a></li>
        <li><a href="#"  onclick="div2()"><i class="fa-solid fa-car" style="color: #f2a602;"></i><span>طلبات</span></a></li>
        <li><a href="#" id="div3"><i class="fa-solid fa-dollar-sign" style="color: #f2a602;"></i><span>الارباح</span></a></li>
        <li><a href="#"><i class="fa-solid fa-gift"  style="color: #f2a602;"></i><span>المكفائة</span></a></li>
        <li><a href="#"><i class="fa-solid fa-comments" style="color: #f2a602;"></i><span>تعليقات  و تقيم</span></a></li>
        <li><a href="#" onclick="div6()"><i class="fa-solid fa-circle-user" style="color: #f2a602;"></i><span>الحساب</span></a></li>
        <li ><a href="../login/index.php" ><i class="fa-solid fa-right-to-bracket" style="color: #f2a602;"></i><span> تسجيل الخروج </span></a></li>

    </ul> 
</div>

   </div>

   <!----------------------------------->
   <div class="main-content1">
    <header>
        <div class="hedar-title">
            <h1>
            <label for="nav-togle">
                <i class="fa-solid fa-bars" style="color: #050505;"></i>
             
                    <span>taxi ow</span>
                </label>
               
            </h1>
        </div>
            <div class="search-warapper">
                <i class="fa-solid fa-magnifying-glass fa-xl" style="color: #0f0f0f;"></i>
           <input type="search" name="" id="" placeholder="search">
            </div>

<div class="user-warapper">
    <img src="" alt="" width="30px" height="30px">

<div>
    <h4>
        <?php echo $usernam?>
    </h4>
    <small>super admin</small>
</div>
        </div>


    </header>
<!-------------------------->
<main>
    <div class="cards" id="cards">
        <!----- card-single         >تعليقات  و تقيم
------>

<!----------------------card طلبات------->
<div class="card-single">
<div >
    <h1>70</h1>
    <span>
        طلبات
    </span>
</div>
<div>
    <i class="fa-solid fa-car" style="color: #f2a602;"></i>
</div>
</div>
<!--------------الارباح----------------------->

<div class="card-single">
    <div>

    <h1>140</h1>
    <span>
        الارباح
    </span>
    </div>
    <div>
    <i class="fa-solid fa-dollar-sign" style="color: #f2a602;"></i>
</div>
</div>
<!--------------        تعليقات 
-------------------->
<div class="card-single">
    <div >

    <h1>54</h1>
    <span>
        تعليقات   
    </span>
    
    </div>
    <div>
    <i class="fa-solid fa-comments" style="color: #f2a602;"></i>
    </div>
</div>

<!----------------------card ------->
<div class="card-single">
<div >

    <h1>70</h1>
    <span>
        طلبات
    </span>
</div>
<div>
        <i class="fa-solid fa-comments" style="color: #f2a602;"></i>
</div>
</div>
<!---------------------------->
    </div>
    <!---------------------------->
    <div class="recent-grid" id="recent_grid">
        <div class="projects">
            <div class="card-header">
                <h2>exent project</h2>
                <button> see all</button>
            </div>
            <div class="card-body">
                <table width="100%">
                    <thead>
                        <tr>
                            <td>العميل</td>
                            <td>من</td>
                            <td>الى</td>
                            <td>تاريخ</td>
                           <td>
                            <span class="status">تقيم</span>
                           </td>
                        </tr>
                        <tbody>
                            <tr>
                                <td>عمر حجوب</td>
                                <td>سيدي داوي</td>
                                <td>حي سلام</td>
                                <td>12/23
                                </td>
                                <td>
                                    <span class="status">جيد جدا</span>
                                   </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>عمر حجوب</td>
                                <td>سيدي داوي</td>
                                <td>حي سلام</td>
                                <td>12/23
                                </td>
                                <td>
                                    <span class="status">جيد جدا</span>
                                   </td>
                            </tr>
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    
    <!------------------------------------->
<div class="customers">
    <div class="card">
        <div class="card-header">
            <h2>news project</h2>
            <button> see all</button>
        </div>
        <div class="card-body">
            <div class="custome">
                <div>
                <img src="#" alt="user" width="40px" height="40px">
                <h4>omar hajjoub</h4>
                <small>eo exeprte</small>
         
                
            
            </div>
          
                <i class="fa-solid fa-car" style="color: #f2a602;"></i>
                    <i class="fa-solid fa-user" style="color: #f2a602;"></i>
                        <i class="fa-solid fa-phone" style="color: #f2a602;"></i>
            </div>


            <!---------------------------------------------------
            -------------------------------->
            <div>
                <img src="#" alt="user" width="40px" height="40px">
                <h4>omar hajjoub</h4>
                <small>eo exeprte</small>
            </div>
            
            <div>
          
                <i class="fa-solid fa-car" style="color: #f2a602;"></i>
                    <i class="fa-solid fa-user" style="color: #f2a602;"></i>
                        <i class="fa-solid fa-phone" style="color: #f2a602;"></i>
            </div>



             <!---------------------------------------------------
            -------------------------------->
            <div>
                <img src="#" alt="user" width="40px" height="40px">
                <h4>omar hajjoub</h4>
                <small>eo exeprte</small>
            </div>
            
          
            <div>
                <i class="fa-solid fa-car" style="color: #f2a602;"></i>
                    <i class="fa-solid fa-user" style="color: #f2a602;"></i>
                        <i class="fa-solid fa-phone" style="color: #f2a602;"></i>
            </div>




             <!---------------------------------------------------
            -------------------------------->
            <div>
                <img src="#" alt="user" width="40px" height="40px">
                <h4>omar hajjoub</h4>
                <small>eo exeprte</small>
            </div>
            
            <div>
          
                <i class="fa-solid fa-car" style="color: #f2a602;"></i>
                    <i class="fa-solid fa-user" style="color: #f2a602;"></i>
                        <i class="fa-solid fa-phone" style="color: #f2a602;"></i>
            </div>



             <!---------------------------------------------------
            -------------------------------->
            <div>
                <img src="#" alt="user" width="40px" height="40px">
                <h4>omar hajjoub</h4>
                <small>eo exeprte</small>
            </div>
            
          
            <div>
                <i class="fa-solid fa-car" style="color: #f2a602;"></i>
                    <i class="fa-solid fa-user" style="color: #f2a602;"></i>
                        <i class="fa-solid fa-phone" style="color: #f2a602;"></i>
            </div>
        </div>

</div>
    </div>

    </div>



    <!----------------------------------------------------------------
        ---------------------Ordar -------------------------------------------------------
        -------------------------ordar---------------------------------
    -------------------------------------------------------------->


    <div class="container " id="container">




        
        
          
        <div id="taxisghir">
        <h1 class="text-md-center">طلبات الموجودة طاكسي صغير</h1>

            <button id="btntaxikbir">طاكسي كبير</button>
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
        
        <?php if($reslt>0){?>
         <?php $data=array();?>
            
         <?php for ($i = 0; $data = mysqli_fetch_array($rest); $i++) {?>
           
        
            
             <tbody>
                <tr>
                <form action="" method="post">
                    <th scope="row"> <input name="taleb"value="<?php echo  $data["id"]?>" style=width:25px></th>
              
                  <td> <?php echo  $data["user_input"]?></td>
                  <td><?php echo $data["city_input"]?> </td>
                  <td><?php echo $data["search_input"]?> </td>
                  <td><?php echo $data["tel_input"]?> </td>
                
                  <td><button id="accept" class="accept " name="accept">قبول</button> </td>
                  <td><button id="refuse" name="refuse"  >رفض</button></td>
        
                  </form>
                  
                </tr>
            
               
              
        
               
              </tbody>
        
         <?php }?>
         <?php }?>
         
        
        
            
        
          </table>
       
          </div>
       

          <div id="taxikbir" >
          <h1 class="text-md-center">طلبات الموجودة طاكسي كبير</h1>

          <button id="btntaxisghir">طاكسي صغير</button>
  <table class="table table-dark table-hover center">
           
           <thead>
             <tr>
               <th scope="col">#</th>
               <th scope="col">اسم العميل</th>
               <th scope="col">المدينة</th>
               <th scope="col">الوجهة</th>
               <th scope="col">عدد ركاب</th>
               <th scope="col">رقم الهاتف</th>
               <th scope="col">قبول </th>
               <th scope="col"> رفض</th>
     
             </tr>
           </thead>
     
     <?php if($reslt1>0){?>
      <?php $row1=array();?>
         
      <?php for ($i = 0; $row1 = mysqli_fetch_array($rest1); $i++) {?>
        
     
         
          <tbody>
             <tr>
             <form action="" method="post">
                 <th scope="row"> <input name="taleb"value="<?php echo  $row1["id"]?>" style=width:25px></th>
           
               <td> <?php echo  $row1["nom"]?></td>
               <td><?php echo $row1["home"]?> </td>
               <td><?php echo $row1["cty"]?> </td>
               <td><?php echo $row1["num_C"]?> </td>
               <td><?php echo $row1["numro"]?> </td>

             
               <td><button id="accept" class="accept " name="accept">قبول</button> </td>
               <td><button id="refuse" name="refuse1"  >رفض</button></td>
     
               </form>
               
             </tr>
         
            
           
     
            
           </tbody>
     
      <?php }?>
      <?php }?>
      
     
     
         
     
       </table>
     </div>
     




       
        </div>
        


  </div>
        
        



    
    <!----------------------------------------------------------------
        ---------------------Ordar -------------------------------------------------------
        -------------------------ordar---------------------------------
    -------------------------------------------------------------->



     
  <section class="Account" id="acont" >
<main class="main">
  <h1>معلومات الحساب</h1>

    <!--------------------->
<form method="post" action="">
  <header class="header">
    <div class="cart_item">
      <img src="img.png" alt="" id="img1" />
       <input type="file" id="fil" style="display: none;" />
       <label for="fil">تحميل صورة</label>
    </div>
    <div class="inpt" id="inpt" >
      <div class="input-group1">
        <input required="" type="text" name="First_Name" value="<?php echo  $firsnam?>" autocomplete="off" class="input1 "  id="First-Name" readonly  >
        <label class="user-label">اسم الاول</label>
      </div>
      <div class="input-group1">
        <input required="" type="text" name="Fore_Name" autocomplete="off" class="input1" id="Fore-name" value="<?php echo  $lasnim?>"  readonly >
        <label class="user-label">الاسم العائلي</label>
      </div>
    
      <div class="input-group1">
        <input required="" type="text" name="Email" autocomplete="off" class="input1" id="Email" value="<?php echo  $email;?>" readonly>
        <label class="user-label" id="Emil">البريد الالكتروني</label>
      </div>

      <div class="input-group1">
        <input required="" type="text" name="city" value="<?php echo  $city?>" autocomplete="off" class="input1 "  id="city" readonly  >
        <label class="user-label">المدينة</label>
      </div>

      <div class="input-group1">
        <input required="" type="text" name="cartnamber" value="<?php echo  $cartnamber?>"  class="input1 "  id="cartnamber" readonly  >
        <label class="user-label"> رقم البطاقة الوطنية</label>
      </div>
      
      <div class="input-group1">
        <input required="" type="text" name="chek" value="<?php echo  $chek?>" class="input1 "  id="First-Name" readonly  >
        <label class="user-label">سيارة</label>
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
                <input pattern="\d+" maxlength="11" id="phonenumber" type="text" name="numro" value="<?php echo    $numro?>" readonly  >
                <span class="invalid-msg">This is not a valid phone number</span>
            </div>
        </div>
        <div class="select-wrapper">
            <ul>
                <li class="Maroc"><label for="Maroc"><span>MR</span>المغرب(+212)</label></li>
        
            </ul>
        </div>
    </div>
     
    
    <button id="my-Save"  onclick=" savebtn" name="my-Save">حفظ</button>
    <button id="my-updat" type="button"  onclick="Updat" name="my-updat">تعديل</button>
   

    
    </div>

  
  </header>
</form>
  <!--------------------->
 <article>

 </article> 
 


</main>











  </section>


    
    <!----------------------------------------------------------------
        ---------------------acont -------------------------------------------------------
        -------------------------acont---------------------------------
    -------------------------------------------------------------->
    
</main>

   </div>




    <script >
        <?php include_once 'script.js'?>
    </script>
    <script src="../JS/trnsi.js"> </script>
    <script src="../acount/sc.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
