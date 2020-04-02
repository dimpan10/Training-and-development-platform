<?php
include ("connect.php");
session_start();


 if (isset($_POST['buttonValue'])) {
        switch ($_POST['buttonValue']) {
            case 'button1':
            	$userID = $_SESSION['user_id'];
               	mysqli_query($connection,"UPDATE employee SET training='1' WHERE employee_id='$userID'");
                break;
            case 'button2':
            	$userID = $_SESSION['user_id'];
               	mysqli_query($connection,"UPDATE employee SET training='2' WHERE employee_id='$userID'");
                break;
            case 'button3':
            	$userID = $_SESSION['user_id'];
               	mysqli_query($connection,"UPDATE employee SET training='3' WHERE employee_id='$userID'");
                break;
            case 'button4':
            	$userID = $_SESSION['user_id'];
               	mysqli_query($connection,"UPDATE employee SET training='4' WHERE employee_id='$userID'");
                break;
        }
    }
       

?>