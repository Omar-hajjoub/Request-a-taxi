<?php
// تضمين مكتبة إرسال البريد الإلكتروني
require 'path/to/phpmailer/PHPMailerAutoload.php';



// الاتصال بقاعدة البيانات
try {
    $pdo = new PDO (mysqli_connect('localhost','root','','online'));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Failed to connect to database: " . $e->getMessage());
}

// تنفيذ إجراء التسجيل عند إرسال النموذج
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // إنشاء رمز التحقق العشوائي
    $verificationCode = generateVerificationCode();

    // حفظ رمز التحقق في قاعدة البيانات مع بيانات المستخدم الأخرى

    // إرسال رمز التحقق إلى البريد الإلكتروني المقدم
    sendVerificationEmail($email, $verificationCode);

    // عرض رسالة تأكيد إلى المستخدم
    echo "تم إرسال رمز التحقق إلى بريدك الإلكتروني. يرجى التحقق من بريدك الإلكتروني لاستكمال عملية التسجيل.";
}

// توليد رمز التحقق العشوائي
function generateVerificationCode() {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $code = '';
    for ($i = 0; $i < 6; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $code;
}

// إرسال رسالة التحقق عبر البريد الإلكتروني
function sendVerificationEmail($email, $verificationCode) {
    $transport =  Swift_SmtpTransport::newInstance('smtp.example.com', 587)
        ->setUsername('your_email@example.com') // إعداد اسم المستخدم للبريد الإلكتروني
        ->setPassword('your_password'); // إعداد كلمة المرور للبريد الإلكتروني

    $mailer = Swift_Mailer::newInstance($transport);

    $message = Swift_Message::newInstance('تأكيد البريد الإلكتروني')
        ->setFrom(array('your_email@example.com' => 'Your Name')) // ضبط بريدك الإلكتروني واسمك
        ->setTo(array($email))
        ->setBody('رمز التحقق: ' . $verificationCode);

    $result = $mailer->send($message);

    if (!$result) {
        echo 'حدث خطأ أثناء إرسال البريد الإلكتروني.';
    }
}
?>
