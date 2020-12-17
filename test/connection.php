<?php
class DB
{
    private static $instance = NULl;
    public static function getInstance() {
      if (!isset(self::$instance)) {
        try {
          self::$instance = new PDO('mysql:host=localhost;dbname=english_db', 'root', '');
          self::$instance->exec("SET NAMES 'utf8'");
          
        } catch (PDOException $ex) {
          die($ex->getMessage());
        }
      }
      echo "SELECT * from user where id = 1";
      return self::$instance;
    }
}