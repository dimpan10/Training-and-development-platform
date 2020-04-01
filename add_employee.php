<?php
include("connect.php");
session_start();
/*
if (!isset($_SESSION['user_id'])) {
		header("Location: login.php");
}
*/

?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <meta charset="utf-8" />
  <title></title>
</head>


<?php

      // Navigation Bar
      include("navbar.php");
    ?>

<body>

<div class="form" style="padding-left:2%;padding-top: 2%; padding-right: 2%">
	<form  action="sent_to_db.php" method="post" enctype="multipart/form-data" novalidate>
	  <div class="form-row">
	    <div class="col-md-4 mb-3">
	      <label for="validationTooltip01">First name</label>
	      <input type="text" class="form-control" id="name" placeholder="First name" name="name" required>
	      <div class="valid-tooltip">
	        Looks good!
	      </div>
	    </div>
	    <div class="col-md-4 mb-3">
	      <label for="validationTooltip02">Last name</label>
	      <input type="text" class="form-control" id="surname" placeholder="Last name" name="surname" required>
	      <div class="valid-tooltip">
	        Looks good!
	      </div>
	    </div>
	    <div class="col-md-4 mb-3">
	      <label for="validationTooltipUsername">Username</label>
	      <div class="input-group">
	        <div class="input-group-prepend">
	          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
	        </div>
	        <input type="text" class="form-control" id="username" placeholder="Username"  name="username" required>
	        <div class="invalid-tooltip">
	          Please choose a unique and valid username.
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="form-row">
	    <div class="col-md-6 mb-3">
	      <label for="validationTooltip03">Email</label>
	      <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
	      <div class="invalid-tooltip">
	        Please provide a valid Email.
	      </div>
	    </div>
	    <div class="col-md-3 mb-3">
	      <label for="validationTooltip04">Address</label>
	      <input type="text" class="form-control" id="address" placeholder="Address" name="address"required>
	      <div class="invalid-tooltip">
	        Please provide a valid Address.
	      </div>
	    </div>
	    <div class="col-md-3 mb-3">
	      <label for="validationTooltip05">City</label>
	      <input type="text" class="form-control" id="city" placeholder="City" name="city" required>
	      <div class="invalid-tooltip">
	        Please provide a valid City.
	      </div>
	    </div>
	  </div>


	  <div class="form-row">
	    <label for="exampleFormControlSelect1">Department</label>
	    <select class="form-control" id="department" name="department">
	      <option>IT</option>
	      <option>Management</option>
	      <option>Accounting</option>
	      <option>Marketing</option>
	      <option>HR</option>
	    </select>

	      <label for="validationTooltip">Salary</label>
	      <input type="num" class="form-control" id="salary" placeholder="Salary" name="salary" required>
	      
	  </div>

	   <br>
	    <label for="example1">Code skills:</label>
	    <div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="java" value="java">
		  <label class="form-check-label" for="inlineCheckbox1">Java</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		  <label class="form-check-label" for="inlineCheckbox2">Python</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option3">
		  <label class="form-check-label" for="inlineCheckbox3">JavaScript</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option4">
		  <label class="form-check-label" for="inlineCheckbox3">Php</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option5">
		  <label class="form-check-label" for="inlineCheckbox4">C++</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option6">
		  <label class="form-check-label" for="inlineCheckbox5">C-Sharp</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option7">
		  <label class="form-check-label" for="inlineCheckbox6">Swift</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option8">
		  <label class="form-check-label" for="inlineCheckbox7">SQL</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option9">
		  <label class="form-check-label" for="inlineCheckbox9">Oracle</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option10">
		  <label class="form-check-label" for="inlineCheckbox10">Ruby</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="option11">
		  <label class="form-check-label" for="inlineCheckbox11">Joomla</label>
		</div>

		<div class="form-group">
		    <label for="exampleFormControlTextarea1">More Info about employee</label>
		    <textarea class="form-control" id="info" rows="3" name="info" ></textarea>
		</div>


		<div class="custom-file">
		  <input type="file" class="custom-file-input" id="cv" name="cv">
		  <label class="custom-file-label" for="employeeFile" >Choose CV </label>
		</div>
	
	<br>
 	<button class="btn btn-primary" type="submit" id="add">Add</button>
 	</form>
</div>

</body>
</html>