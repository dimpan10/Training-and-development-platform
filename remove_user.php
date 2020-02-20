<?php
	include ("connect.php");
	
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

</body>
</html>





<div class="col">
	<h3 style="text-align: center;padding-bottom: 1%;">Διαγραφή χρήστη</h3>
  <form class="form-horizontal" action="admin_employee_managment.php" id="form" method="post" enctype="multipart/form-data">
	  	<div class="form-row">
		    <div class="col-md-4 mb-3">
		      <label for="name">Επιλογή χρήστη για διαγραφή</label>
		      <select class="form-control" id="user_to_delete" name="user_to_delete">
		      	<?php 
		      		$sql = "SELECT * FROM govrn_emp ";
				    $res_data = mysqli_query($connection,$sql);
				    //This is used in order admin which is first user cannot be deleted
				    while($row = mysqli_fetch_array($res_data)){
				    	if ($row['admin'] == 0 ) {
				    		echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
				    	}
				    }
		      	?>
			  </select>
		    </div>				  
	  	</div>
	  	<div class="form-row">
		    <button type="submit" class="btn btn-danger" value="btnDel" id="btnDel" name="btnDel" >Διαγραφή</button>
	  	</div>
	</form>
</div>