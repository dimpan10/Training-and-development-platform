<?php
session_start();
//include ("../time_out_session.php");

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
      if($_SESSION['admin']==0){
        include("e_navbar.php");
      }
      else if($_SESSION['admin']==1){
        include("navbar.php");
      }
    ?>

<body>

<br>

<div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4">Trainig & Development
    <small>Platform</small>
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="tad.png" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-1">General Objectives</h3>
      <p class="text-justify">
● To find and evaluate the theoretical background of HR systems and training platforms
● To study the use of Human Resource Information.
● To develop a complete web application for usage by IT Companies
● To study the effectiveness of a training platform on employees.
● To develop an efficient platform
</p>
      <h3 class="my-3">Project Details</h3>
      <ul>
        <li>Employee Management</li>
        <li>Skills Training</li>
        <li>Financials</li>
        <li>Company Control</li>
      </ul>
    
    <p class="text-justify">Supervisor: Dr. Nikolakopoulos</p>

    <h3 class="my-3">Project Aim </h3>
      <p class="text-justify">The aim of this project is to develop a Training & Development Platform for IT Company. 
      Special focus to create a friendly user platform for employees and management to monitor training and development needs</p>
    
  </div>
  <!-- /.row -->

  <!-- Related Projects Row -->
  <h3 class="my-4">Related Projects</h3>

  <div class="row">

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="ob.php" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->

</body>
</html>