<?php
$token = '1694586097:AAGj86PE_CCibjFcVVfY3vYBoz4wfImAMMs';
$website = 'https://api.telegram.org/bot'.$token;
$update = file_get_contents('php://input');
$update = json_decode($update, true);
$message = $update['message']['text'];
$id = $update['message']['from']['id'];
$name = $update['message']['from']['first_name'];
$surname = $update['message']['from']['last_name'];
$username = $update['message']['from']['username'];
$idedit = $update['callback_query']['from']['id'];
$nameedit = $update['callback_query']['from']['first_name'];

switch($message){
  case "/start":
    Mes($id, "ciao");
}

function Mes($id, $text, $keys){
    $url = $GLOBALS[website]."/sendMessage?chat_id=$id&text=".urlencode($text);
    file_get_contents($url);
}
?>
