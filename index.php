<?php

//Client Code
$url = 'https://baz.crm';
$user = 'myuser';
$password = 'mypassword';

$bazSender = new \App\BazSender($url, $user, $password);
$manager = new \App\CrmManager($bazSender);
$payload = new \App\PersonPayload();
$manager->sendPerson($payload);