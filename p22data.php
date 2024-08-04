<?php
		$user = "root";
		$pass ="";
		$db = 'car_rent';
		$con =  mysqli_connect('localhost', $user, $pass,$db) or
		die("Connection failed: " . mysqli_connect_error());
		echo "Connected successfully";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name=$_POST['username'];
			$addr=$_POST['addr'];
			$gender=$_POST['gender'];
			$car=$_POST['py'];
			$days=$_POST['days'];
			$sql = "Insert into users values('$name','$addr','$gender','$car','$days')";
			if (mysqli_query($con, $sql)) {
					 echo "Details Send Successfully";
			} else {
						echo "Server error 404"; }}
		mysqli_close($con);
		
	
?>
