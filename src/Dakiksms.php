<?php

namespace SendSms;

class Dakiksms {
    public $hash;
    public $sitename = "http://www.dakiksms.com/api/xml_api.php";
    public $header_type = array('Content-Type: text/xml');
    public $password;
    public $sender_title;
    public $phone;
    public $message;
    public $xml;

    function sendRequest() {

        $this->xml = '<SMS><oturum>
            <kullanici>' . $this->hash . '</kullanici>
            <sifre>' . $this->password . '</sifre>
            </oturum>
            <mesaj>
            <baslik>' . $this->sender_title . '</baslik>
            <metin>' . $this->message . '</metin>
            <alicilar>' . $this->phone . '</alicilar>
            </mesaj>
            <karaliste>genel</karaliste>
            <izin_link>false</izin_link>
            <izin_telefon>false</izin_telefon>
            </SMS>';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->sitename);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->xml);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->header_type);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 120);
        $result = curl_exec($ch);
        return $result;
    }

}
