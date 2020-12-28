<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/home_style.css" type="text/css">
</head>
<body>
<header>
    <div class="topnav">
      <a href = "../test/index.php?controller=homepage&action=home"><img src="../test/assets/images/logo.png" alt="logo"></a>
      <a class="active" href="../test/index.php?controller=homepage&action=home">Trang chủ</a>
      <a href="../test/index.php?controller=homepage&action=about">Về chúng tôi</a>
      <a href="../test/index.php?controller=homepage&action=contact">Liên hệ</a>
      <div class="search-container">
      <form action="../test/index.php?controller=homepage&action=search" method="POST">
        <input type="text" placeholder="Tìm kiếm từ.." name = "searchWord" >
        <button type="submit"> <img src="../test/assets/images/search_icon.png" alt="icon" style=" width: 20px; height: 20px;" ></button>
      </form>
      </div>
      <a href = "../test/index.php?controller=authentication&action=logout">Đăng xuất</a>
    </div>

  </header>
</body>
</html>