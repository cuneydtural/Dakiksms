<?php

include 'class_dakiksms.php';

$dakiksms = new Dakiksms();
$dakiksms->hash = "8781881";
$dakiksms->password = "4888dsdsqq8";
$dakiksms->sender_title = "TITLE";
$dakiksms->phone = "5055700909";
$dakiksms->message = "Bu bir test mesajidir.";

$sms_result = $dakiksms->sendRequest();

if (substr($sms_result, 0, 2) == 'OK') {
    // mesaj gönderildi
    echo 'SMS gönderildi';

} elseif (substr($sms_result, 0, 3) == 'ERR') {
    echo 'SMS gönderilemedi';
} else {
    echo 'Bilinmeyen bir hata oluştu';
}

?>