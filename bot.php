<?php

include 'Telegram.php';

$telegram = new Telegram('7951838833:AAEIAn5N3cSy33mdsreMC-d80piCSb-Upfw');

$chat_id = $telegram->ChatID();
$content = array('chat_id' => $chat_id, 'text' => 'Test');
$telegram->sendMessage($content);


?>
