<?php
session_start();
function DB()
{
  // $connect = new PDO('mysql:host=localhost;dbname=english_db' , 'root' , '2456199');
  // $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
          
  try {
    $dbconnection = new PDO('mysql:host=localhost;dbname=english_db', 'root','24561999');
    $dbconnection->exec("SET NAMES 'utf8'");
    $dbconnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbconnection;
  } catch (PDOException $e) {
       
        echo 'Connection failed: ' . $ex->getMessage();
  }
}      
     
    