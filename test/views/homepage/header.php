<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</body>
</html>