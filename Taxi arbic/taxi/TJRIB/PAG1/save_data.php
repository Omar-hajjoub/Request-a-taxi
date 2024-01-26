<?php
// استقبال بيانات المستخدم من النموذج
$name = $_POST['name'];
$location = $_POST['location'];
$destination = $_POST['destination'];

// تحقق من وجود بيانات المستخدم
if (!empty($name) && !empty($location) && !empty($destination)) {
    // قم بتنفيذ إجراءات الحفظ في قاعدة البيانات هنا
    
    // قم بإرجاع رد ناجح إلى العميل
    echo json_encode(['success' => true]);
} else {
    // قم بإرجاع رد فاشل إلى العميل
    echo json_encode(['success' => false]);
}
?>
