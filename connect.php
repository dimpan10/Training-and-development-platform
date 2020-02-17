<?php  
	$connection = mysqli_connect("localhost", "root", "", "training_and_development_platform");
	mysqli_set_charset($connection, "utf8");
	if (!$connection) {
		die('Could not connect: '. mysqli_error());
	}
?>