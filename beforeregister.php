<!DOCTYPE html>
<html>
<body>

<h1> Welcome to Cinemax Movies, please register</h1>
	<h2> Username can only be set once! </h2>
	<form action="Register.php" method="post" autocomplete="off">
	Name: <input type="text" name="iname" required/><br>
	Username: <input type="text" name="iusername" required/><br>
	Contact Number: <input type="tel" name="icontact" required/><br>
	Password: <input type="password" name="ipwd" required/><br>
	<input type="submit" name="register_btn" value="Register" />
	</form>
	<form action="home.php" method="post" />
	<input type="submit" name="home.php" value="Back to Main page" />
	</form>
</body>	
</html>
