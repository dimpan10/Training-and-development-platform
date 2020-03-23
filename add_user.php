<?php
	include ("connect.php");
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
<body>
<?php
	include ("navbar.php");
	
?>


<div class="form" style="padding-left:2%;padding-top: 2%; padding-right: 2%">
  <div class="card-header">
    <h3 style="text-align: center;">Add user</h3>
  </div>
  <div class="card-body">
<div class="col" style="padding-left:25%; padding-right: 2%">
	<form class="form-horizontal" action="admin_employee_managment.php" id="form" method="post" enctype="multipart/form-data">
	  	<div class="form-row">
		    <div class="col-md-4 mb-3">
		      <label for="name">Username</label>
		      <input type="text" class="form-control" id="username" placeholder="username" name="username" required>
		    </div>				  
		    <div class="col-md-4 mb-3">
		      <label for="surname">Password</label>
		      <input type="text" class="form-control" id="password" placeholder="password" name="password" required>
		    </div>
	  	</div>
	  	<div class="form-row">
		    <div class="col-md-4 mb-3">
		      <label for="name">E-mail</label>
		      <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" required>
		    </div>				  
		    <div class="col-md-4 mb-3">
		      <label for="surname">Name and surname</label>
		      <input type="text" class="form-control" id="name" placeholder="name and surname" name="name" required>
		    </div>
	  	</div>
	  	<div class="form-row">
		    <button type="submit" class="btn btn-primary" value="btnAdd" id="btnAdd" name="btnAdd" >add</button>
	  	</div>
	</form>
</div>
</div>
	

</body>
</html>

