<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng ký</title>
</head>
<body>
<form action="register.php" method="post">
		<table>
			<tr>
				<td colspan="2">Register</td>
			</tr>	
			<tr>
				<td>Username :</td>
				<td><input type="text" id="username" name="username"></td>
            </tr>
            <tr>
				<td>Email :</td>
				<td><input type="text" id="email" name="email"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" id="pass" name="pass"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Register"></td>
			</tr>

		</table>
		
	</form>
</body>
</html>