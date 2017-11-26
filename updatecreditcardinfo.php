<html>
<body>
<?php

$db = mysqli_connect("localhost", "root", "", "cinemax"); //connect to database
if (!$db){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
if (isset($_POST['updatecard_btn'])) 
{	session_start();
	$icardnumber = $_POST['icardnumber'];
	$icardexpiration = $_POST['icardexpiration'];
	$icardname = $_POST['icardname'];
	$icardcvv = $_POST['icardcvv'];
	$icardtype = $_POST['icardtype'];
	$iusername = $_POST['iusername'];
	$ipwd = $_POST['ipwd'];
	
	$sql = "SELECT * FROM creditcard WHERE Customer_Username='$iusername' AND Customer_Password='$ipwd'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) == 1) 
    {
        $sql1 ="UPDATE creditcard SET Card_Number = '$icardnumber', Card_Expiration = '$icardexpiration', Card_Name = '$icardname', Card_CVV = '$icardcvv', Card_Type = '$icardtype' 
		WHERE Customer_Username ='$iusername' AND Customer_Password = '$ipwd'";
		mysqli_query($db, $sql1);
        echo "Credit Card information updated!";
		echo "<br> ";
		$sql1 = "SELECT Customer_Username, Card_Number, Card_Expiration FROM creditcard WHERE Customer_Username ='$iusername' AND Customer_Password = '$ipwd'";
		$result1 = mysqli_query($db, $sql1);
		$row = mysqli_fetch_assoc($result1);
		if (mysqli_num_rows($result1) == 1) 
		{	     
		
			echo "Username: ". $row["Customer_Username"]. "<br> Card Number: ". $row["Card_Number"]. "<br> Card Expiration: " . $row["Card_Expiration"] . "<br>";
				
			
		}
?>
		<html>
		<form action="homeafterloginregister.php" method="post">
		<input type="submit" value="Click here to go to back to main page" />
		</form>
	    </html>
<?php
	
    }
    else
    {
        echo "Credit Card information not updated, Wrong username or password";
    }
		
}


?>
</body>
</html>
