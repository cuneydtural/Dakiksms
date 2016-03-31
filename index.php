<?php

require 'vendor/autoload.php';

use SendSms\Dakiksms;

$dakiksms = new Dakiksms();
$dakiksms->hash = "9995522222";
$dakiksms->password = "Qaz99aiCmnKq";
$dakiksms->sender_title = "TITLE";
$dakiksms->phone = "5394589978";
$dakiksms->message = "Bu bir test mesajidir.";
echo $sms_result = $dakiksms->sendRequest();

if (substr($sms_result, 0, 2) == 'OK') {
    
    // Success
    echo 'SMS gönderildi';

} elseif (substr($sms_result, 0, 3) == 'ERR') {
    
    //Failed
    echo 'SMS gönderilemedi';
    
} else {
    // Error
    echo 'Bilinmeyen bir hata oluştu';
}
