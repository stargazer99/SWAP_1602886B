<!DOCTYPE html>
<html>
<body>

<h1> Update User Information </h1>
	<form action="updateinfo.php" method="post" autcomplete="off">
	Username: <input type="text" name="iusername" required/>
	Name: <input type="text" name="iname" required/>
	Contact Number: <input type="tel" name="icontact" required/>
	Password: <input type="password" name="ipwd" required/>
	<input type="submit" name="update_btn" value="update" />
	</form>
	<form action="homeafterloginregister.php" method="post" >
	<input type="submit" name="homeafterloginregister.php" value="Back to home page" />
	</form>
	<form action="beforeviewaccountinfo.php" method="post" />
	<input type="submit" name="beforeviewaccountinfo.php" value="View account info" />
	</form>
	<form action="beforedelete.php" method="post" >
	<input type="submit" name="beforedelete.php" value="Delete Account"/>
	</form>
	
</body>
</html>