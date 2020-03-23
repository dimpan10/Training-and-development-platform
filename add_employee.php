<?php
include("connect.php");
session_start();

?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <title></title>
</head>


<?php

      // Navigation Bar
      include("navbar.php");
    ?>

<body>

<div class="form" style="padding-left:2%;padding-top: 2%; padding-right: 2%">
	<form class="needs-validation" novalidate>
	  <div class="form-row">
	    <div class="col-md-4 mb-3">
	      <label for="validationTooltip01">First name</label>
	      <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" required>
	      <div class="valid-tooltip">
	        Looks good!
	      </div>
	    </div>
	    <div class="col-md-4 mb-3">
	      <label for="validationTooltip02">Last name</label>
	      <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name"  required>
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
	        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
	        <div class="invalid-tooltip">
	          Please choose a unique and valid username.
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="form-row">
	    <div class="col-md-6 mb-3">
	      <label for="validationTooltip03">Email</label>
	      <input type="text" class="form-control" id="validationTooltip03" placeholder="Email" required>
	      <div class="invalid-tooltip">
	        Please provide a valid Email.
	      </div>
	    </div>
	    <div class="col-md-3 mb-3">
	      <label for="validationTooltip04">Address</label>
	      <input type="text" class="form-control" id="validationTooltip04" placeholder="Addres" required>
	      <div class="invalid-tooltip">
	        Please provide a valid Address.
	      </div>
	    </div>
	    <div class="col-md-3 mb-3">
	      <label for="validationTooltip05">City</label>
	      <input type="text" class="form-control" id="validationTooltip05" placeholder="City" required>
	      <div class="invalid-tooltip">
	        Please provide a valid City.
	      </div>
	    </div>
	  </div>

	  <div class="form-row">
	    <label for="exampleFormControlSelect1">Department</label>
	    <select class="form-control" id="departmentlSelect">
	      <option>IT</option>
	      <option>Managment</option>
	      <option>Finacials</option>
	      <option>Accounting</option>
	      <option>Marketing</option>
	      <option>HR</option>
	    </select>

	      <label for="validationTooltip">Salary</label>
	      <input type="num" class="form-control" id="salary" placeholder="Salary"  required>
	      <div class="valid-tooltip">
	        Looks good!
	      </div>
	  </div>

	   <br>
	    <label for="example1">Code skills:</label>
	    <div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		  <label class="form-check-label" for="inlineCheckbox1">Java</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		  <label class="form-check-label" for="inlineCheckbox2">Python</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		  <label class="form-check-label" for="inlineCheckbox2">JavaScript</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		  <label class="form-check-label" for="inlineCheckbox2">Php</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		  <label class="form-check-label" for="inlineCheckbox2">C++</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		  <label class="form-check-label" for="inlineCheckbox2">C-Sharp</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		  <label class="form-check-label" for="inlineCheckbox2">Swift</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		  <label class="form-check-label" for="inlineCheckbox2">SQL</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		  <label class="form-check-label" for="inlineCheckbox2">Oracle</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		  <label class="form-check-label" for="inlineCheckbox2">Ruby</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		  <label class="form-check-label" for="inlineCheckbox2">Joomla</label>
		</div>

		<div class="form-group">
		    <label for="exampleFormControlTextarea1">More Info about employee</label>
		    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>


		<div class="custom-file">
		  <input type="file" class="custom-file-input" id="customFile">
		  <label class="custom-file-label" for="employeeFile">Choose file</label>
		</div>
	</form>
	<br>
 <button class="btn btn-primary" type="submit">Add</button>
</div>

</body>
</html>