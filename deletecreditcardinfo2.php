<html>
<body>
<?php

$db = mysqli_connect("localhost", "root", "", "cinemax"); //connect to database
if (!$db){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
if (isset($_POST['deletecard_btn2']))
{
	$iusername = $_POST['iusername'];
	$ipwd = $_POST['ipwd'];
	
	$sql = "SELECT * FROM creditcard WHERE Customer_Username='$iusername' AND Customer_Password='$ipwd'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) == 1) 
    {
        $sql1 ="DELETE FROM creditcard WHERE Customer_Username='$iusername' AND Customer_Password= '$ipwd'";
		$result2 = mysqli_query($db, $sql1);
		
		echo "Credit Card info Deleted";
		
	}
}
?>	
</body>
</html>