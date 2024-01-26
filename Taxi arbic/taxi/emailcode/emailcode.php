<?php

require_once 'mail.php';
$mail->setFrom('taxiow06@gmail.com','Taxiow');
$mail->addAddress('omarstarsfre@gmail.com');
$mail->Subject="tajrbi";
$mail->Body="this is the html messge body <p>omar hajjoub</p>";
$mail->send();



?>