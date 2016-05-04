<?php

include 'vendor/autoload.php';

$serverApiKey = 'serverApiKey';
$client = new WebDevBr\Android\Clients\Guzzle;

$to = 'registration_id';
$subject = 'Título de teste';
$message = 'Mensagem de teste de notificação';

$push  = new WebDevBr\Android\PushNotifications($serverApiKey, $client);
$data = $push->send($to, $subject, $message);
var_dump($data);
