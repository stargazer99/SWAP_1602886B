<html>
	<h1> registering.... </h1>
<body>
<?php

$db = mysqli_connect("localhost", "root", "", "cinemax"); //connect to database
if (!$db){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
if (isset($_POST['register_btn'])) 
{
	$iname = $_POST['iname'];
	$iusername = $_POST['iusername'];
	$icontact = $_POST['icontact'];
	$ipwd = $_POST['ipwd'];
	$error = "q";
	if(isset($iusername))
	{
		$mysql_get_users = mysqli_query($db, "SELECT * FROM customer where Customer_Username='$iusername'");
		$get_rows = mysqli_num_rows($mysql_get_users);
	
		if($get_rows == 1)
		{
			echo "user exists";
			echo '<form action="beforeregister.php" method="post">';
			echo '<input type="submit" value="Click here to go back." />';
			echo '</form>';
		}
		else
		{
			if( strlen($ipwd) > 20 ) 
			{
				$error = "Password too long!";
				if($error == "Password too long!")
				{
					echo "Password validation failure(your choice is weak): $error";
					echo '<form action="beforeregister.php" method="post">';
					echo '<input type="submit" value="Click here to go back." />';
					echo '</form>';
				}
			}
			else if( strlen($ipwd) < 8 ) 
			{
				$error = "Password too short!";
				if($error == "Password too short!")
				{
					echo "Password validation failure(your choice is weak): $error";
					echo '<form action="beforeregister.php" method="post">';
					echo '<input type="submit" value="Click here to go back." />';
					echo '</form>';
				} 
			}
			else 
			{
				echo "Your password is strong.";
				$sql = "INSERT INTO `customer` (Customer_Name, Customer_Username, Customer_Contact_No, Customer_Password) VALUES
				('$iname','$iusername','$icontact','$ipwd')";
				$sql1 = "INSERT INTO `creditcard` (Customer_Username, Customer_Password) VALUES ('$iusername','$ipwd')";
				mysqli_query($db, $sql);
				mysqli_query($db, $sql1);
				echo "Registration Complete";
				echo '<form action="home.php" method="post" >';
				echo '<input type="submit" value="Back to main page" />';
				echo '</form>';
			}
		}
	}
}
else
{
	echo "Failed to Register";
}
?>
</body>
</html>

