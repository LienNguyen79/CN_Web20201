<?php
define('DS', DIRECTORY_SEPARATOR);
//Autoload class
spl_autoload_register(function (string $class_name) {
   include_once  $class_name . '.php';
});

require_once('connection.php');

if (isset($_GET['controller'])) {
  $controller = $_GET['controller'];
  if (isset($_GET['action'])) {
    $action = $_GET['action'];
  } else {
    $action = 'index';
  }
} else {
  $controller = 'authentication';
  $action = 'login';
}
require_once('routes.php');