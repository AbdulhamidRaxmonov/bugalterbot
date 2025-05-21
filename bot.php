<?php

require_once 'Telegram.php';


$telegram = new Telegram('7951838833:AAEIAn5N3cSy33mdsreMC-d80piCSb-Upfw');

$data = $telegram->getData();
$message = $data['message'];
$text = $message['text'];
$chat_id = $message['chat']['id'];

if ($text == "/start") {
    chooseLanguage();
}

function chooseLanguage()
{
    global $telegram, $chat_id;

    $text = "Пожалуйста выберите язык.\nIltimos, tilni tanlang.";

    setPage($chat_id, 'start');

    $option = array(
        array($telegram->buildKeyboardButton("Русский 🇷🇺"), $telegram->buildKeyboardButton("O'zbek tili 🇺🇿")),
    );
    $keyb = $telegram->buildKeyBoard($option, $onetime = false, $resize = true);
    $content = array('chat_id' => $chat_id, 'text' => $text, 'reply_markup' => $keyb);
    $telegram->sendMessage($content);
}


function sendMessage($text)
{
    global $telegram, $chat_id;
    $telegram->sendMessage([
        'chat_id' => $chat_id,
        'text' => $text
    ]);
}
