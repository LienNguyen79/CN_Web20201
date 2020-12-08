<?php

define('DS', DIRECTORY_SEPARATOR);
//define('WEB',str_replace("Web/index.php","",$_SERVER["SCRIPT_NAME"]));
define('ROOT',str_replace("\Web","",__DIR__));
//Autoload class
spl_autoload_register(function (string $class_name) {
    include_once ROOT . DS . $class_name . '.php';
});
/*index.php yêu cầu tất cả các file cần cho việc khởi tạo điều phối*/
//require(ROOT . 'Config/core.php');
//require(ROOT . 'router.php');
//require(ROOT . 'request.php');
//require(ROOT . 'dispatcher.php');

new Core\Controller();
// $dispatch = new Dispatcher();
// $dispatch->dispatch();
?>