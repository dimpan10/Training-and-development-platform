<?php
		session_start();
		include("connect.php");

		if (!empty($_POST['name'])) {
			$name = mysqli_real_escape_string($connection,$_POST['name']);
		}
		


		if (!empty($_POST['surname'])) {
			$surname = mysqli_real_escape_string($connection,$_POST['surname']);
		}
		if (!empty($_POST['checkbox'])) {
			$name_check = mysqli_real_escape_string($connection,$_POST['checkbox']);{
				$name_check = "java";
			}
		}

		if (!empty($_POST['address'])) {
			$address = mysqli_real_escape_string($connection,$_POST['address']);
		}

		if (!empty($_POST['city'])) {
			$city = mysqli_real_escape_string($connection,$_POST['city']);
		}

		if (!empty($_POST['salary'])) {
			$salary = mysqli_real_escape_string($connection,$_POST['salary']);
		}

		if (!empty($_POST['department'])) {
			$department = mysqli_real_escape_string($connection,$_POST['department']);
		}

		
		if (!empty($_POST['email']) && !strlen(trim($_POST['email'])) == 0) {
			$email = mysqli_real_escape_string($connection,$_POST['email']);
		}
		
		if (isset($_POST['info']) && !strlen(trim($_POST['info'])) == 0) {
		    // Escape any html characters
		    $comment = htmlentities(mysqli_real_escape_string($connection,$_POST['info']));
		}
		else{
			$comment = "empty";
		}
		date_default_timezone_set('Europe/Athens');
		mysqli_query($connection,"INSERT INTO employee VALUES ('$name', '$surname', '$department', DEFAULT, '$salary', '$email', '$city', 'test', '$comment', '$address', 'zip', '".date('Y-m-d H:i:s')."', 0 )");

					//$employee_id = mysqli_insert_id($connection);
		

?>