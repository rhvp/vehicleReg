<?php

$conn = mysqli_connect("localhost", "root", "", "cars");


	$car_no = $_POST['car_no'];
	$query = "SELECT * FROM car WHERE car_no = '$car_no'";
	$make_query = mysqli_query($conn, $query);
	
	if (mysqli_num_rows($make_query) > 0) {
			while ($car_details = mysqli_fetch_assoc($make_query)){
				echo "Car Model: ".$car_details['model'];
				echo "<br/>";

				$user_id = $car_details['user_id'];
				$owner_query = "SELECT * FROM users WHERE id = '$user_id'";
				$get_user = mysqli_query($conn, $owner_query);
				while ($user_details = mysqli_fetch_assoc($get_user)) {
					echo "Car Owner: ".$user_details['firstname'];
				}
			}
		}	else{
			echo "This Vehicle is not registered in the database!!";
		}



?>