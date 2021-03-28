<?php

//include_once "components/autoload.php";
//spl_autoload_register('autoload');// регистрируем автозагрузчик классов

include_once "config/Db.php";
include_once "components/Route.php";
$db=Db::connect();// создаём подключение к базе данных

$app=new Route(); // создаём объект роутера
$app->run();


