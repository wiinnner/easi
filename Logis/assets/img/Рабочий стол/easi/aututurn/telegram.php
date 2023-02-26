<?php  
include ('index.html');
/* https://api.telegram.org/bot5673269490:AAFPL_HFx2Bt52idedfI0dLIXpiuJ3LZd1w/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */
if(!empty($_POST));{

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "5673269490:AAFPL_HFx2Bt52idedfI0dLIXpiuJ3LZd1w";
$chat_id = "-800246500";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email:' => $email
);
}


foreach($arr as $key => $value) {
  $txt .= " <b>".$key."</b> ".$value."%0A";
};


$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
if ($sendToTelegram) {
 
} 
?>