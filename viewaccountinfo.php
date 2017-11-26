<html>
<body>
<?php

$db = mysqli_connect("localhost", "root", "", "cinemax"); //connect to database
if (!$db){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
if (isset($_POST['view_btn'])) 
{	session_start();
	
	
	$iusername = $_POST['iusername'];
	
	$ipwd = $_POST['ipwd'];
	
	$sql = "SELECT * FROM customer WHERE Customer_Username='$iusername' AND Customer_Password='$ipwd'";
    $result = mysqli_query($db, $sql);
	$row = mysqli_fetch_assoc($result);
	if (mysqli_num_rows($result) == 1) 
    {	     
		
		echo "Username: ". $row["Customer_Username"]. "<br> Name: ". $row["Customer_Name"]. "<br> Contact Number: " . $row["Customer_Contact_No"] . "<br>";
		echo '<form action="homeafterloginregister.php" method="post">';
		echo '<input type="submit" value="Click here to go back to home page." />';
		echo '</form>';	
			
	}	
	
}
else
{
	echo "Failed to view user account information";
}	
	
	
?>