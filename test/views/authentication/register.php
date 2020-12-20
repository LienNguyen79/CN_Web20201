<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng ký</title>
	
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

</head>
<body>
<div id="signup" class="col-3 mt-4">
        <div class="loginbox">
            <h3>Form đăng ký</h3>
            <form method="post" action="" name="signup">
                <img src="../test/assets/images/logo.png" alt= "logo" class="avatar">
				<label style="margin-left: 50px;">Tài khoản :</label>
                <input type="text" name="usernameReg" autocomplete="off" class="form-control"/>
                <label style="margin-left: 50px;">Email :</label>
                <input type="text" name="emailReg" autocomplete="off" class="form-control"/>
                <label style="margin-left: 50px;">Mật khẩu :</label>
                <input type="password" name="passwordReg" autocomplete="off" class="form-control"/>
                <input type="submit" class="btn btn-primary" name="signupSubmit" value="Đăng ký">
                <h2><a href = "../test/index.php?controller=authentication&action=login" >Đăng nhập</a></h2>
            </form>
            
        </div>
</div>
</body>
</html>