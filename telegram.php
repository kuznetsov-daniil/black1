<?php

/* https://api.telegram.org/bot5998491589:AAFDf2N2pZTH8Qfh9JC4Nu1c0DgZcwo7HnY/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$size = $_POST['size'];
$tg = $_POST['tg'];
$token = "5998491589:AAFDf2N2pZTH8Qfh9JC4Nu1c0DgZcwo7HnY";
$chat_id = "-972429789";
$arr = array(
  'Имя: ' => $name,
  'Размер: ' => $size,
  'Telegram: ' => $tg
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>