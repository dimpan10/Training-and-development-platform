<?php
  include("connect.php");
  session_start();
  
  
  if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
  }
  


 $total_pages_sql = "SELECT COUNT(*) FROM departments WHERE dep_id";
  $result = mysqli_query($connection,$total_pages_sql);
  $total_departments = mysqli_fetch_array($result)[0];

$total_pages_sql = "SELECT COUNT(*) FROM employee WHERE employee_id";
  $result = mysqli_query($connection,$total_pages_sql);
  $total_employees = mysqli_fetch_array($result)[0];

$total_pages_sql = "SELECT COUNT(*) FROM cv WHERE cv_id";
  $result = mysqli_query($connection,$total_pages_sql);
  $total_cv = mysqli_fetch_array($result)[0];




$total_employees
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
	    include("e_navbar.php");
?>

<div class="row" style="padding-left:2%;padding-top: 2%; padding-right: 2%">
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">Open Tairnings</h5> 
        <p class="card-text">Number:<?php echo " (".$total_departments.")"; ?></p>
        <a href="departments.php" class="btn btn-outline-secondary">Open</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">Closed Trainigs</h5>
        <p class="card-text">Number:<?php echo " (".$total_employees.")"; ?></p>
        <a href="employees.php" class="btn btn-outline-secondary">Open</a>
      </div>
    </div>
  </div>
</div>



  <br>
  <table class="table table-bordered" style="padding-left:2%;padding-top: 2%; padding-right: 2%">
    <table class="table table-bordered table-hover">
      <thead class="thead-active">
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Surname</th>
          <th scope="col">Department</th>
          <th scope="col">Training path</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = "SELECT * FROM employee WHERE employee_id AND training = 3 ";
          $res_data = mysqli_query($connection,$sql);
          while($row = mysqli_fetch_array($res_data)){
        ?>
            <tr>
              <td><?php  echo $row['name']; ?></td>
              <td><?php echo $row['surname']; ?></td>
              <td><?php echo $row['department']; ?></td>
              <td><?php echo $row['training']; ?></td>
            </tr>

        <?php
            }
        ?>
    </tbody>
  </table>

</body>
</html>