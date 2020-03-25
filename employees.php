<?php
  include("connect.php");
  session_start();
  
  /*include ("../time_out_session.php");
  if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
  }
  */

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

	  	// Navigation Bar
	    include("navbar.php");
?>



<table class="table table-bordered" style="padding-left:2%;padding-top: 2%; padding-right: 2%">


<table class="table table-bordered table-hover">
  <thead class="thead-active">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Department</th>
      <th scope="col">Email</th>
      <th scope="col">Salary</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Code skills</th>
      <th scope="col">Info</th>
      <th scope="col">File</th>
      <th scope="col">Start date</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sql = "SELECT * FROM employee ORDER BY employee_id";
      $res_data = mysqli_query($connection,$sql);
      while($row = mysqli_fetch_array($res_data)){
    ?>
        <tr>
          <th scope="row"><?php  echo $row['employee_id'];?></th>
          <td><?php  echo $row['name']; ?></td>
          <td><?php echo $row['surname']; ?></td>
          <td><?php echo $row['department']; ?></td>
          <td><?php  echo $row['email']; ?></td>
          <td><?php echo $row['salary']; ?></td>
          <td><?php echo $row['address']; ?></td>
          <td><?php  echo $row['city']; ?></td>
          <td><?php echo $row['codeSkill']; ?></td>
          <td><?php echo $row['info']; ?></td>
          <td><?php echo $row['info']; ?></td>
          <td><?php echo $row['startDate']; ?></td>
        </tr>
    <?php
        }
    ?>
  </tbody>
</table>












</body>
</html>