<?php

$name = $_POST['user_name'] ?? '---';
$phone = $_POST['user_phone'] ?? '---';
$device = $_POST['user_device'] ?? '---';
$location = $_POST['user_location'] ?? '---';
$message = $_POST['user_message'] ?? '---';

$to = 'parselian.study@yandex.ru';

$message = "
  <xmp>Телефон: ".$phone."</xmp> 
  <xmp>Имя: ".$name."</xmp>
  <xmp>Что сломалось: ".$device."</xmp> 
  <xmp>Адрес клиента: ".$location."</xmp>
  <xmp>Описание поломки: ".$message."</xmp> 
";
//mail($to, 'Новая заявка с сайта center-apple.ru', $message);

require_once "SendMailSmtpClass.php";
$mailSMTP = new SendMailSmtpClass('applecare.spb@yandex.ru', 'berkas123321', 'ssl://smtp.yandex.ru', 465, 'UTF-8');
$subject = "Заявка с сайта bosch-center.ru";
$from = array('Bosch Center', 'applecare.spb@yandex.ru');
$result = $mailSMTP->send($to, $subject, $message, $from);
