<?php
session_start();
function DB()
{
  // $connect = new PDO('mysql:host=localhost;dbname=english_db' , 'root' , '');
  // $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        try {
          $dbConnection = new PDO('mysql:host=localhost;dbname=english_db', 'root', '');
          $dbConnection->exec("SET NAMES 'utf8'");
          $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $dbConnection;
        } catch (PDOException $ex) {
          echo 'Connection failed: ' . $ex->getMessage();
          
        }
}      
     
    