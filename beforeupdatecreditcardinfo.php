<!DOCTYPE html>
<html>
<body>

<h1> Update Credit Card Information </h1>
	<form action="updatecreditcardinfo.php" method="post" autocomplete="off">
	Username: <input type="text" name="iusername" required/><br>
    Credit Card Number: <input type="text" name="icardnumber" required/><br>
    Expiration: <input type="text" placeholder="MM/YY" name="icardexpiration" required/><br>
	Name: <input type="text" name="icardname" required/><br>
	CVV: <input type="text" name="icardcvv" required/><br>
	Password: <input type="password" name="ipwd" required/><br>

    <input type="radio" name="icardtype" value="Visa">Visa<br>
    <input type="radio" name="icardtype" value="Mastercard">Mastercard<br>
	<input type="radio" name="icardtype" value="American Express">American Express<br>
	
    <input type="submit" name="updatecard_btn" value="Submit"/>
	<input type="reset" value="Clear"/>
	
</form>
<form action="homeafterloginregister.php" method="post" />
<input type="submit" name="homeafterloginregister.php" value="Back to home page" />
</form>
</body>
</html>