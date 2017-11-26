<html>
<body>
<?php

$db = mysqli_connect("localhost", "root", "", "cinemax"); //connect to database
if (!$db){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
if (isset($_POST['delete_btn'])) 
{	session_start();
	
	$iusername = $_POST['iusername'];
	$ipwd = $_POST['ipwd'];
	
	
	$sql = "SELECT * FROM customer WHERE Customer_Username='$iusername' AND Customer_Password='$ipwd'";
	$sql3 = "SELECT * FROM creditcard WHERE Customer_Username='$iusername' AND Customer_Password='$ipwd'";
    $result = mysqli_query($db, $sql);
	$result1= mysqli_query($db, $sql3);
    if (mysqli_num_rows($result) == 1) 
    {
        $sql1 ="DELETE FROM customer WHERE Customer_Username ='$iusername' AND Customer_Password = '$ipwd'";
		$sql2 ="DELETE FROM creditcard WHERE Customer_Username ='$iusername' AND Customer_Password = '$ipwd'";
		mysqli_query($db, $sql2);
		mysqli_query($db, $sql1);
        echo "User Account and Credit Card info Deleted"; ?>
		<html>
		<form action="home.php" method="post">
		<input type="submit" value="Click here to go to back to main page" />
		</form>
	    </html>
<?php
    }
    else
    {
        echo "User Account and credit card info Not Deleted";
    }
		
}


?>
</body>
</html>
