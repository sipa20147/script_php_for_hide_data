<?php

$apiToken = "1122936546:AAFX2goLcgvARa4YfsiBuso4tOV5yMVODGY";

$data = [
    'chat_id' => '@ITU1910vBot',
    'text' => $_POST['text'],
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));

header('Location: /');