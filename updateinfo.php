<html>
<body>
<?php

$db = mysqli_connect("localhost", "root", "", "cinemax"); //connect to database
if (!$db){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
if (isset($_POST['update_btn'])) 
{	session_start();
	$iname = $_POST['iname'];
	$iusername = $_POST['iusername'];
	$icontact = $_POST['icontact'];
	$ipwd = $_POST['ipwd'];
	
	
	$sql = "SELECT * FROM customer WHERE Customer_Username='$iusername' AND Customer_Password='$ipwd'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) == 1) 
    {
        $sql1 ="UPDATE customer SET Customer_Name ='$iname' , Customer_Contact_No ='$icontact' , Customer_Password ='$ipwd' WHERE Customer_Username ='$iusername' AND Customer_Password = '$ipwd'";
		mysqli_query($db, $sql1);
        echo "Information updated!";
    }
    else
    {
        echo "Information not updated, Wrong username or password";
    }
		
}


?>
</body>
</html>
