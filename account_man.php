<?php
include("connect.php");
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
  }

?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title></title>
</head>

<?php

         // Navigation Bar
      if($_SESSION['admin']==0){
        include("e_navbar.php");
      }
      else if($_SESSION['admin']==1){
        include("navbar.php");
      }
    ?>

<body>
	<script type='text/javascript'>
    	$(document).ready(function(){

        $('#testButton1').click(function(e){
            var value = "button1";
            var ajaxurl = "update_training.php";
            var data =  {'buttonValue': value};
            
            $.post(ajaxurl, data, function (dataReturned) {
                alert("Password Changed");
            });                   
           
        });
    });
	</script>

<div class="form" style="padding-left:2%;padding-top: 2%; padding-right: 2%" >
  <div class="card-header">
  <div class="col" >
	<h3 style="text-align: center;padding-bottom: 1%;">Account setings</h3>
	  	<div class="form-row">
		    <div class="col-md-4 mb-3">
		      <label for="name">Change password</label>
		      <form class="needs-validation" novalidate>
	  			<div class="form-row">
	    		<div class="col-md-8 mb-8">
	     		 <input type="text" class="form-control" id="validationTooltip01" placeholder="New Password" required>
	      			<div class="valid-tooltip">
	        Looks good!
	      </div>
	    </div>
	    <br>
	  	<div class="form-row">
		    <button type="submit" class="btn btn-danger" value="newPass" id="newPass" name="newPass" >Change</button>
	  	</div>
</div>
</div>
</div>

<input type="submit" class="btn btn-outline-secondary" name="Join" id="testButton1" value="Join" />




</body>

</html>

