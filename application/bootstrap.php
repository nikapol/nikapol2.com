<?php
session_start();
// подключаем файлы ядра
require_once 'core/model.php';
//require_once 'core/view.php';
require_once 'core/controller.php';
require_once 'core/bd.php';
require_once 'vendor/twig/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register(true);

spl_autoload_register(function ($class) {
    $path = DIR_VENDOR . str_replace('\\', '/', $class) . '.php';

    if (is_file($path)) {
        require $path;
        return;
    }
    else {
    	$pathMy = __DIR__ . '/' .  substr($class, 0, strpos($class, '_')) . '/' .str_replace('\\', '/', $class) . '.php';
	if (is_file($pathMy)) {
            require $pathMy;
            return;
        }
    }
    throw new \LogicException(sprintf('Class "%s" not found in "%s" and in "%s"', $class, $path, $pathMy));
});

//запускаем роутинг 
require_once 'core/Router.php';


/*
Здесь обычно подключаются дополнительные модули, реализующие различный функционал:
	> аутентификацию
	> кеширование
	> работу с формами
	> абстракции для доступа к данным
	> ORM
	> Unit тестирование
	> Benchmarking
	> Работу с изображениями
	> Backup
	> и др.
*/

//require_once 'core/route.php';
//Route::start(); // запускаем маршрутизатор
// создать модель с подключением к бд
