<?php

// подключаем файлы ядра
require_once 'conf/config.php';
require_once 'Smarty-3.1.14/libs/Smarty.class.php';
require_once 'core/smtemplate.php';
require_once 'core/model.php';
require_once 'core/controller.php';

require_once 'core/route.php';
Route::start(); // запускаем маршрутизатор