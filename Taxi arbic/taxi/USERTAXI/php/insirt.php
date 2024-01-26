<?php 
include ('conx.php');

$sql="SELECT * FROM taxismall ";

//مسح طلبية من عند المسائق
$sql_dalete="DELETE FROM `taxismall` WHERE id ";

if(isset($_POST['refuse'])){
$data=$_POST['taleb'];
$stm=mysqli_prepare($conx,$sql_dalete);
$dt='مرفوض';
$stm->bind_param("i",$data);
if($stm->execute()){
    echo"yes datle";
}else{
    echo"no datle";
}
};

$rest=mysqli_query($conx,$sql);
$reslt=mysqli_num_rows($rest);
if($reslt>0){
   
   
    //---------------
    $data=array();
    mysqli_close($conx);

}else{
  $nortlab = "<div style='text-align: center;  margin-top:20px;'>
  <p> لا توجد طلابات حاليا </p>
  </div> " ;
}



      
?>