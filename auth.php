<?php  	

	include ("connect.php");

	if (isset($_POST['username'])&&isset($_POST['password'])) {
		if (!empty($_POST['username']) && !empty($_POST['password'])) {
			$username = stripslashes($_POST['username']);
			$password = stripslashes($_POST['password']);

			$username = mysqli_real_escape_string($connection, $username);
			$password = mysqli_real_escape_string($connection, $password);

			$result = mysqli_query($connection, "SELECT * FROM employee WHERE username = '$username' AND password = '$password'");
			$row = mysqli_fetch_array($result);

			
			if ($row['username'] == $username && $row['password'] == $password ) {
				session_start();
				$_SESSION['user'] = true;
				$_SESSION['user_id'] = $row['user'];
				$_SESSION['user_name'] = $row['username'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['admin'] = $row['admin'];
				header("Location: index.php");
				
			}
			else {
				$_SESSION['errorinput'] = true;
				header("Location: login.php");
			}
		}
	}
	else {
		session_start();
		header("Location: login.php");

	}
?>