<?php

$phone = $_POST['number'];
$name = $_POST['name'];
$token = "5656288083:AAHOtWAQCe-yIloCGlgnPKHwU3Hbb6vJETQ";
$chat_id = "-611408498";
$arr = array(
    'name' => $name,
    'number' => $phone
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header("location: index.html");
} else {
  echo "Error";
}
?>