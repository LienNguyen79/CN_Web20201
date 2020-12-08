<?php
#file này lấy url do người dùng yêu cầu
class Request {
    public $url;
    public function __construct(){
        $this->url = $_SERVER["REQUEST_URI"];
    }
}
?>