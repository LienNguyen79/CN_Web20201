<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VỀ CHÚNG TÔI</title>
    
  <link rel="stylesheet" href="assets/css/home_style.css" type="text/css">
  </head>
<body style=" 
    background-image: url('../images/breadcrumb.png'); 
    background-size: cover;
    background-position: center;
    ">
  <header>
    <div class="topnav">
      <a href = "../test/index.php?controller=homepage&action=home"><img src="../test/assets/images/logo.png" alt="logo"></a>
      <a href="../test/index.php?controller=homepage&action=home">Trang chủ</a>
      <a class="active"href="../test/index.php?controller=homepage&action=about">Về chúng tôi</a>
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
  <section>
    <div  class="banner_part">
      <h1 style="text-align:center;">Let's Learn English</h1>
      <img src="../test/assets/images/banner_img.png" alt="banner" class = "center_img">
      </div>
  </section> 

  <section>
    <div  class ="midnav"> 
      <a href="">Kho từ của bạn</a>
      <a href="">Chế độ kiểm tra</a>
    </div>
   
  </section>
<footer></footer>
</body>
</html>