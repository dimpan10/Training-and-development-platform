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


	<table class="table table-bordered" style="padding-left:2%;padding-top: 2%; padding-right: 2%">
		<table class="table table-bordered table-hover">
		  <thead class="thead-active">
		    <tr>
		      <th scope="col">Name</th>
		      <th scope="col">Surname</th>
		      <th scope="col">Skills</th>
		    </tr>
		  	</thead>
		  	<tbody>
		    <?php
		      $sql = "SELECT * FROM employee ORDER BY employee_id";
		      $res_data = mysqli_query($connection,$sql);
		      while($row = mysqli_fetch_array($res_data)){
		    ?>
		        <tr>
		          <td><?php  echo $row['name']; ?></td>
		          <td><?php echo $row['surname']; ?></td>
		          <td><?php echo $row['codeSkill']; ?></td>
		        </tr>
		    <?php
		        }
		    ?>
		  </tbody>
		</table>



</body>
</html>