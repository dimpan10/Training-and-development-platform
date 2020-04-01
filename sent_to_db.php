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

		if (!empty($_POST['username'])) {
			$username = mysqli_real_escape_string($connection,$_POST['username']);
		}

		if (!empty($_POST['username'])) {
			$password = mysqli_real_escape_string($connection,$_POST['username']);
		}
		

		//$fileName = $complaint_id.basename($_FILES["file"]["name"]);
		//$targetFilePath = $targetDir . $fileName;
		//$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);




		date_default_timezone_set('Europe/Athens');
		mysqli_query($connection,"INSERT INTO employee VALUES (DEFAULT,'$name', '$surname', '$department', '$username', '$password' ,'$salary', '$email', '$city', 'test', '$comment', '$address', '".date('Y-m-d H:i:s')."', 0 )");

		//mysqli_query($connection,"INSERT INTO file (`id`, `cv_surname`, `cv_name`) 
												//VALUES (DEFAULT, '$surname', '$fileName')");

		

?>