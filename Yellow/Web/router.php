<?php
#file này lấy url từ file request.php, sau đó phân tách url làm 3 phần dựa vào ký tự "/"
#domain/tên_web/Controller/Action/Parameter
#hàm explode tách 1 chuỗi thành 1 mảng với ký tự phân cách (trong hàm dưới) là "/", chuỗi đầu vào là $url
$explode_url = explode('/', $url);
#hàm array_slice căt bỏ phần tử của mảng, giử lại phần tử được chọn( giữ lại các phần tử từ Controllers)
$explode_url = array_slice($explode_url,2);
$request->controller = $explode_url[0];
$request->action = $explode_url[1];
$request->params = array_slice($explode_url,2);
?>