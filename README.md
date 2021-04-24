# Приложение ВК mini

Пакет позволяет получить параметры приложений ВК mini.

## Установка

````
$ composer require unetway/vk-mini-app-php
````

## Использование

````
<?php

use Unetway\VkMiniApp\Core;

$url = $_SERVER['REQUEST_URI'];
$client_secret = '';

$vk = new Core([
    'url' => $url,
    'client_secret' => $client_secret,
]);


````

### Проверка подписи параметров из URL приложения

````
<?php

use Unetway\VkMiniApp\Core;


$url = $_SERVER['REQUEST_URI'];
$client_secret = '';

$vk = new Core([
    'url' => $url,
    'client_secret' => $client_secret,
]);

if ($vk->signature()) {
    echo 'ok';
}else {
    echo 'fail';
}

````

### Получение всех параметров

````
<?php

use Unetway\VkMiniApp\Core;


$url = $_SERVER['REQUEST_URI'];
$client_secret = '';

$vk = new Core([
    'url' => $url,
    'client_secret' => $client_secret,
]);

if ($vk->signature()) {
    return $vk->getParams();
}

````

### ID пользователя ВК

````
<?php

use Unetway\VkMiniApp\Core;


$url = $_SERVER['REQUEST_URI'];
$client_secret = '';

$vk = new Core([
    'url' => $url,
    'client_secret' => $client_secret,
]);

if ($vk->signature()) {
    return $vk->getVkUserId();
}

````

### ID приложения

````
<?php

use Unetway\VkMiniApp\Core;


$url = $_SERVER['REQUEST_URI'];
$client_secret = '';

$vk = new Core([
    'url' => $url,
    'client_secret' => $client_secret,
]);

if ($vk->signature()) {
    return $vk->getVkAppId();
}
````

### Информация об установке пользователем приложения

````
<?php

use Unetway\VkMiniApp\Core;


$url = $_SERVER['REQUEST_URI'];
$client_secret = '';

$vk = new Core([
    'url' => $url,
    'client_secret' => $client_secret,
]);

if ($vk->signature()) {
    return $vk->geVKIsAppUser();
}
````

### Информация о разрешенных уведомлениях от приложения

````
<?php

use Unetway\VkMiniApp\Core;


$url = $_SERVER['REQUEST_URI'];
$client_secret = '';

$vk = new Core([
    'url' => $url,
    'client_secret' => $client_secret,
]);

if ($vk->signature()) {
    return $vk->geVKAreNotificationsEnabled();
}
````

### Язык пользователя

````
<?php

use Unetway\VkMiniApp\Core;


$url = $_SERVER['REQUEST_URI'];
$client_secret = '';

$vk = new Core([
    'url' => $url,
    'client_secret' => $client_secret,
]);

if ($vk->signature()) {
    return $vk->getVkLanguage();
}
````

### Источник перехода

````
<?php

use Unetway\VkMiniApp\Core;


$url = $_SERVER['REQUEST_URI'];
$client_secret = '';

$vk = new Core([
    'url' => $url,
    'client_secret' => $client_secret,
]);

if ($vk->signature()) {
    return $vk->getVkRef();
}
````

### Список прав доступа текущего пользователя в приложении

````
<?php

use Unetway\VkMiniApp\Core;


$url = $_SERVER['REQUEST_URI'];
$client_secret = '';

$vk = new Core([
    'url' => $url,
    'client_secret' => $client_secret,
]);

if ($vk->signature()) {
    return $vk->getVkAccessTokenSettings();
}
````

### ID сообщества, если приложение запущено из сообщества

````
<?php

use Unetway\VkMiniApp\Core;


$url = $_SERVER['REQUEST_URI'];
$client_secret = '';

$vk = new Core([
    'url' => $url,
    'client_secret' => $client_secret,
]);

if ($vk->signature()) {
    return $vk->getVkGroupId();
}
````

### Роль пользователя в сообществе, из которого запущено приложение

````
<?php

use Unetway\VkMiniApp\Core;


$url = $_SERVER['REQUEST_URI'];
$client_secret = '';

$vk = new Core([
    'url' => $url,
    'client_secret' => $client_secret,
]);

if ($vk->signature()) {
    return $vk->getVkViewerGroupRole();
}

````

### Платформа, на которой запущено мини-приложение

````
<?php

use Unetway\VkMiniApp\Core;


$url = $_SERVER['REQUEST_URI'];
$client_secret = '';

$vk = new Core([
    'url' => $url,
    'client_secret' => $client_secret,
]);

if ($vk->signature()) {
    return $vk->getVkPlatform();
}

````

### Информация о добавлении приложения в избранное

````
<?php

use Unetway\VkMiniApp\Core;


$url = $_SERVER['REQUEST_URI'];
$client_secret = '';

$vk = new Core([
    'url' => $url,
    'client_secret' => $client_secret,
]);

if ($vk->signature()) {
    return $vk->getVkIsFavorite();
}

````

### Время генерации параметров запуска

````
<?php

use Unetway\VkMiniApp\Core;


$url = $_SERVER['REQUEST_URI'];
$client_secret = '';

$vk = new Core([
    'url' => $url,
    'client_secret' => $client_secret,
]);

if ($vk->signature()) {
    return $vk->getVkTs();
}

````
