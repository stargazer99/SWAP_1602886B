<html>
<body>
<?php

$db = mysqli_connect("localhost", "root", "", "cinemax"); //connect to database
if (!$db){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
if (isset($_POST['viewcard_btn'])) 
{	session_start();
	
	
	$iusername = $_POST['iusername'];
	
	$ipwd = $_POST['ipwd'];
	
	
	$sql = "SELECT * FROM `creditcard` WHERE Customer_Username='$iusername' AND Customer_Password='$ipwd'";
    $result = mysqli_query($db, $sql);
	$row = mysqli_fetch_assoc($result);
	if (mysqli_num_rows($result) == 1) 
    {	     
		
		echo "Username: ". $row["Customer_Username"]. "<br> Card Number: ". $row["Card_Number"]. "<br> Card Expiration: " . $row["Card_Expiration"] . "<br> Card Name: " . $row["Card_Name"] . "<br> Card Type: " . $row["Card_Type"] . "<br>";
		echo '<form action="homeafterloginregister.php" method="post">';
		echo '<input type="submit" value="Click here to go back to home page." />';
		echo '</form>';	
			
	}	
	
}
else
{
	echo "Failed to view user credit card information";
}	
	
	
?>