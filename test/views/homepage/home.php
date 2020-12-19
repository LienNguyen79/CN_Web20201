
<!DOCTYPE html>
<html>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
<style>
* {box-sizing: border-box;}
 
 body {
   margin: 0;
   font-family: Arial, Helvetica, sans-serif;
 }
  
 .topnav {
   overflow: hidden;
   background-color: #e9e9e9;
 }
  
 .topnav a {
   float: left;
   display: block;
   color: black;
   text-align: center;
   padding: 14px 16px;
   text-decoration: none;
   font-size: 17px;
 }
  
 .topnav a:hover {
   background-color: #ddd;
   color: black;
 }
  
 .topnav a.active {
   background-color: #2196F3;
   color: white;
 }
  
 .topnav .search-container {
   float: right;
 }
  
 .topnav input[type=text] {
   padding: 6px;
   margin-top: 8px;
   font-size: 17px;
   border: none;
 }
  
 .topnav .search-container button {
   float: right;
   padding: 6px 10px;
   margin-top: 8px;
   margin-right: 16px;
   background: #ddd;
   font-size: 17px;
   border: none;
   cursor: pointer;
 }
  
 .topnav .search-container button:hover {
   background: #ccc;
 }
  
 @media screen and (max-width: 600px) {
   .topnav .search-container {
     float: none;
   }
   .topnav a, .topnav input[type=text], .topnav .search-container button {
     float: none;
     display: block;
     text-align: left;
     width: 100%;
     margin: 0;
     padding: 14px;
   }
   .topnav input[type=text] {
     border: 1px solid #ccc;  
   }
 }
</style> 
</head>
<body>
<header>
<div class="topnav">
    <a href = "../test/index.php?controller=homepage&action=home"><img src="../test/assets/images/logo.png" alt="logo"></a>
    <a class="active" href="#home">Trang chủ</a>
    <a href="#about">Về chúng tôi</a>
    <a href="#contact">Liên hệ</a>
    <div class="search-container">
    <form method="post" action="/action_page.php">
      <input type="text" placeholder="Tìm kiếm từ.." name="search">
      <button type="submit" name = "searchSubmit"><i class="fa fa-search"><img src="../test/assets/images/search_icon.png" style="width:20px;height:20px"></i></button>
    </form>
    </div>
    <a href = "../test/index.php?controller=authentication&action=logout">Đăng xuất</a>
</div>
</header>
<div>
<img src="../test/assets/images/banner_img.png" alt="banner" class = "center_img">
<h1 style="text-align:center;">Let's Learn English</h1>
<a href="">Kho từ của bạn</a>
<a href="">Chế độ kiểm tra</a>
</div>
<footer></footer>
</body>
</html>