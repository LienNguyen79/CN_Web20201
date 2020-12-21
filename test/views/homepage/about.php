
<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Về chúng tôi</title>
    
  <link rel="stylesheet" href="assets/css/home_style.css" type="text/css">
  </head>
<body>

  <header>
    <div class="topnav">
      <a href = "../test/index.php?controller=homepage&action=home"><img src="../test/assets/images/logo.png" alt="logo"></a>
      <a href="../test/index.php?controller=homepage&action=home">Trang chủ</a>
      <a class="active"href="../test/index.php?controller=homepage&action=about">Về chúng tôi</a>
      <a  href="../test/index.php?controller=homepage&action=contact">Liên hệ</a>
      <div class="search-container">
      <form method="post" action="/action_page.php">
        <input type="text" placeholder="Tìm kiếm từ.." name="search">
        <button type="submit" name = "searchSubmit"><i class="fa fa-search"><img src="../test/assets/images/search_icon.png" style="width:20px;height:20px"></i></button>
      </form>
      </div>
      <a href = "../test/index.php?controller=authentication&action=logout">Đăng xuất</a>
    </div>

  </header>
    <section class="contact_us">
        <div>
            <h4>Trang chủ / Sứ mệnh của Etrain</h4>
            <h2>Nhu cầu học tiếng Anh ở Việt Nam cũng như tại nhiều quốc gia khác không chỉ đến từ đòi hỏi của quá trình toàn cầu hóa mà còn đến từ đòi hỏi của các bậc phụ huynh. Cả xã hội từ thành thị đến nông thôn sẵn sàng đầu tư cho con em học ngoại ngữ nhưng kết quả lại không như mong đợi” - PGS.TS Lê Văn Canh phân tích.</h2>
            <h2> Etrain ra đời nhằm mục đích để học sinh /sinh viên tự nâng cao từ vựng tiếng anh mỗi ngày cho bản thân </h2>
        </div>
    </section>
  <footer class="footer">
    <div class="column">
        <a href="../test/index.php?controller=homepage&action=home"> <img src="../test/assets/images/logo.png" alt=""> </a> 
    </div>
    <div class="column">
      <h4>Đăng kí nhận bản tin</h4>
      <p>Cập nhật thông tin một cách nhanh nhất để không bỏ lỡ thông báo mới nào về chúng tôi
      </p>
      <form action="home">
        <div class="form-group">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder='Enter email address'
              onfocus="this.placeholder = ''"
              onblur="this.placeholder = 'Enter email address'">
            <div class="input-group-append">
              <button class="btn btn_1" type="button"><p> Gửi</p></button>
            </div>
          </div>
        </div>
      </form>
     
    </div>
    <div class="column">
        <h4>Kết nối với chúng tôi</h4>
        <div class="contact_info1">
          <p><span> Địa chỉ :</span> Số 1 Đại Cồ Việt, Phường Bách Khoa, Quận Hai Bà Trưng, Hà Nội </p>
          <p><span> Điện thoại :</span> +84 964530128</p>
          <p><span> Email : </span>huynguyenquang344@gmail.com </p>
        </div>
    </div>               
  </footer>

</body>
</html>