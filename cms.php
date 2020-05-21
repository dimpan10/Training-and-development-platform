<?php
include("connect.php");

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


<body>

    <script type='text/javascript'>
    $(document).ready(function(){

        $('#testButton0').click(function(e){
            var value = "button0";
            var ajaxurl = "update_training.php";
            var data =  {'buttonValue': value};
            
            $.post(ajaxurl, data, function (dataReturned) {
                alert("Excellent! Please ask for new training! ");
            });                   
           
        });
	});
    </script>
	

	<table class="table table-bordered table-hover"style="padding-left:2%;padding-top: 2%; padding-right: 2%">
	<table class="table">
  	<thead class="thead-dark">
    <tr>
        <th scope="col">Joomla!</th>
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
        <th scope="col">WordPress</th>
		<th scope="col">Title</th>
		<th scope="col">Type</th>
		<th scope="col">Link</th>
    </tr>
  </thead>
  <tbody>
    <tr>
		<th scope="row">1</th>
		<td>Oficial WordPress Web Site</td>
		<td>Web site</td>
		<td><a href="https://wordpress.com/learn//" class="btn btn-outline-secondary" target="_blank">Join</a></td>
	<tr>
		<th scope="row">2</th>
		<td>Building a website using Wordpess, tutorial </td>
		<td>Text toutorial</td>
		<td><a href="https://firstsiteguide.com/learn-wordpress/" class="btn btn-outline-secondary" target="_blank">Join</a></td>
	</tr>
	<tr>
		<th scope="row">3</th>
		<td>Build a Joomla Website</td>
		<td>Video</td>
		<td><a href="https://www.youtube.com/wpbeginner?sub_confirmation=1" class="btn btn-outline-secondary" target="_blank">Join</a></td>
	</tr>
  </tbody>
</table>

<table class="table">
 <thead class="thead-dark">
    <tr>
        <th scope="col">DrupalS</th>
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
<input type="submit" class="btn btn-outline-success btn-lg btn-block" name="complete" id="testButton0" value="complete" />>
</body>
</html>
