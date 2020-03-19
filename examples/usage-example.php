<?php

include '../src/Whois/Whois.php';
$domain = new Whois\Whois('yandex.ru');
$info = $domain->info();
print_r($info);
