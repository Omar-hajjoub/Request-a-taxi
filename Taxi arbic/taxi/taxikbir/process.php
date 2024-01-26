<?php
include ('./taxi/MOCH/conx.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $location = $_POST["location"];
  $destination = $_POST["destination"];
  
  // اتخاذ إجراءات إضافية هنا مثل حفظ المعلومات في قاعدة بيانات أو إرسال بريد إلكتروني إلخ.
  
  // عرض رسالة بنجاح الإرسال
  echo "تم استلام المعلومات بنجاح!";
}
?>
