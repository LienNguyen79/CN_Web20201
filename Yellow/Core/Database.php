<?php
#file xử lý kết nối tới database
class Database {
    private static $bdd = null;
    private function __construct(){       
    }
    public static function getBdd(){
        if (is_null(self::$bdd)){
            self::$bdd = new PDO('mysql:host=localhost;dbname=etrain','root');
        }
        return self::$bdd;
    }
}
?>