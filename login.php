<html>
	<h1> Login Page </h1>
<body>
<?php

$db = mysqli_connect("localhost", "root", "", "cinemax"); //connect to database
if (!$db){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
if (isset($_POST['login_btn'])) 
{	session_start();
	$iusername = $_POST['iusername'];
	$ipwd = $_POST['ipwd'];
	
	$sql = "SELECT * FROM customer WHERE Customer_Username='$iusername' AND Customer_Password='$ipwd' ";
	$resulting = mysqli_query($db, $sql);
	
	if(mysqli_num_rows($resulting) == 1) 
	{
		$_SESSION['iusername'] = $iusername;
		header("location: homeafterloginregister.php");
	}
	else
	{
		header("location: failedlogin.php");
	}
}
?>
</body>
</html>
