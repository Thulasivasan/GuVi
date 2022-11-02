<?php 
require_once('config.php');
 ?>

<?php 

	if (isset($_POST)) {
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$email = $_POST['email'];
			$password = sha1(($_POST['password']));
			//echo "Registration Successfull ";

			$sql = "INSERT INTO registration(`firstName`,`lastName`,`email`,`password`) VALUES ('$firstName','$lastName','$email','$password')";

			$result = mysqli_query($connection, $sql);

			if($result){echo "Registration sucessfull";}

			else{echo "Data Not insrted ";}
		}
		else{
			echo("No data");
		}
 ?>