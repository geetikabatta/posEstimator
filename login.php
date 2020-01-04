<html>
<head>
	<title>LOGIN PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
		<form action="authenticate.php" method="POST">
			
			<p>
				<label>Username</label>
				<input type="text" id="username" name="username" value=""/>
			</p>
			<p>
				<label>Password</label>
				<input type="password" id="password" name="password" value=""/>
			</p>
			<p>
				<input type="submit" id="login" name="login" value="Login"/>
			</p>
		</form>
	</body>
</html>