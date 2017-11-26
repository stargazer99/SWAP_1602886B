<html>
<body>
<?php

$db = mysqli_connect("localhost", "root", "", "cinemax"); //connect to database
if (!$db){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
if (isset($_POST['deletecard_btn'])) 
{	session_start();
	echo '<form action="deletecreditcardinfo2.php" method="post" >';
	echo 'Username: <input type="text" name="iusername" required/><br>';
	echo 'Password: <input type="password" name="ipwd" required/><br>';
	echo '<input type="submit" name="deletecard_btn2" value="Delete Credit Card info" />';
	echo '</form>';
	
}
?>
</body>
</html>
