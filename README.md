# Whois

PHP класс для получения информации о домене<br>

## Пример использования

```php
<?php

include 'src/Whois/Whois.php';
$domain = new Whois\Whois('yandex.ru');
$info = $domain->info();
print_r($info);
```