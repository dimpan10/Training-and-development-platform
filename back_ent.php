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
	<style type="text/css">
		.custab{
	    border: 1px solid #ccc;
	    padding: 5px;
	    margin: 5% 0;
	    box-shadow: 3px 3px 2px #ccc;
	    transition: 0.5s;
	    }
		.custab:hover{
	    box-shadow: 3px 3px 0px transparent;
	    transition: 0.5s;
	    }
	</style>
</head>

<?php

      // Navigation Bar
      include("e_navbar.php");
    ?>

<body>

    
	

	<table class="table table-bordered table-hover"style="padding-left:2%;padding-top: 2%; padding-right: 2%">
	<table class="table">
  	<thead class="thead-dark">
    <tr>
        <th scope="col">Java</th>
		<th scope="col">Title</th>
		<th scope="col">Type</th>
		<th scope="col">Link</th>
    </tr>
  </thead>
  <tbody>
    <tr>
		<th scope="row">1</th>
		<td>Oficial Joomla Web Site</td>
		<td>Web site</td>
		<td><a href="https://extensions.joomla.org/" class="btn btn-outline-secondary" target="_blank">Join</a></td>
	<tr>
		<th scope="row">2</th>
		<td>Building a website using Joomla, step-by-step</td>
		<td>Text toutorial</td>
		<td><a href="https://websitesetup.org/build-website-with-joomla/" class="btn btn-outline-secondary" target="_blank">Join</a></td>
	</tr>
	<tr>
		<th scope="row">3</th>
		<td>Build a Joomla Website</td>
		<td>Video</td>
		<td><a href="https://www.youtube.com/watch?v=B-7jsURjLiU" class="btn btn-outline-secondary" target="_blank">Join</a></td>
	</tr>
  </tbody>
</table>

<table class="table">
  <thead class="thead-dark">
    <tr>
        <th scope="col">PHP</th>
		<th scope="col">Title</th>
		<th scope="col">Type</th>
		<th scope="col">Link</th>
    </tr>
  </thead>
  <tbody>
    <tr>
		<th scope="row">1</th>
		<td>Oficial Joomla Web Site</td>
		<td>Web site</td>
		<td><a href="https://extensions.joomla.org/" class="btn btn-outline-secondary" target="_blank">Join</a></td>
	<tr>
		<th scope="row">2</th>
		<td>Building a website using Joomla, step-by-step</td>
		<td>Text toutorial</td>
		<td><a href="https://websitesetup.org/build-website-with-joomla/" class="btn btn-outline-secondary" target="_blank">Join</a></td>
	</tr>
	<tr>
		<th scope="row">3</th>
		<td>Build a Joomla Website</td>
		<td>Video</td>
		<td><a href="https://www.youtube.com/watch?v=B-7jsURjLiU" class="btn btn-outline-secondary" target="_blank">Join</a></td>
	</tr>
  </tbody>
</table>

<table class="table">
 <thead class="thead-dark">
    <tr>
        <th scope="col">Python</th>
		<th scope="col">Title</th>
		<th scope="col">Type</th>
		<th scope="col">Link</th>
    </tr>
  </thead>
  <tbody>
    <tr>
		<th scope="row">1</th>
		<td>Oficial Joomla Web Site</td>
		<td>Web site</td>
		<td><a href="https://extensions.joomla.org/" class="btn btn-outline-secondary" target="_blank">Join</a></td>
	<tr>
		<th scope="row">2</th>
		<td>Building a website using Joomla, step-by-step</td>
		<td>Text toutorial</td>
		<td><a href="https://websitesetup.org/build-website-with-joomla/" class="btn btn-outline-secondary" target="_blank">Join</a></td>
	</tr>
	<tr>
		<th scope="row">3</th>
		<td>Build a Joomla Website</td>
		<td>Video</td>
		<td><a href="https://www.youtube.com/watch?v=B-7jsURjLiU" class="btn btn-outline-secondary" target="_blank">Join</a></td>
	</tr>
  </tbody>
</table>

</body>
</html>
