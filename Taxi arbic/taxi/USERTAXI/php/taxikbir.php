<?php 
include ('conx.php');

$sql1="SELECT * FROM maps1 ";



//مسح طلبية من عند المسائق

$sql_dalete1="DELETE FROM `taxismall` WHERE id ";

if(isset($_POST['refuse1'])){
$row1=$_POST['taleb'];
$stm1=mysqli_prepare($conx,$sql_dalete1);
$stm1->bind_param("si",$row1);
if($stm1->execute()){
    echo"yes datle";
}else{
    echo"no datle";
}
};


$rest1=mysqli_query($conx,$sql1);
$reslt1=mysqli_num_rows($rest1);
if($reslt1>0){
   
   
    //---------------
    $row1=array();
    mysqli_close($conx);

}else{
  $nortlab = "<div style='text-align: center;  margin-top:20px;'>
  <p> لا توجد طلابات حاليا </p>
  </div> " ;
}



      
?>