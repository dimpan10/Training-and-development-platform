<?php
include("connect.php");
session_start();

?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<style type="text/css">
		.card-pricing.popular {
    z-index: 1;
    border: 3px solid #007bff;
	}
	.card-pricing .list-unstyled li {
    padding: .5rem 0;
    color: #6c757d;
	}
	</style>
</head>

<?php

      // Navigation Bar
      include("e_navbar.php");
    ?>

<body>

 <script type='text/javascript'>
    $(document).ready(function(){

        $('#testButton1').click(function(e){
            var value = "button1";
            var ajaxurl = "update_training.php";
            var data =  {'buttonValue': value};
            
            $.post(ajaxurl, data, function (dataReturned) {
                alert("Joined to front End lesson! Please logout and login again! ");
            });                   
           
        });

        $('#testButton2').click(function(e){
            var value = "button2";
            var ajaxurl = "update_training.php";
            var data =  {'buttonValue': value};
            
            $.post(ajaxurl, data, function (dataReturned) {
                alert("Joined to Back End lesson! Please logout and login again! ");
            });                   
           
        });

        $('#testButton3').click(function(e){
            var value = "button3";
            var ajaxurl = "update_training.php";
            var data =  {'buttonValue': value};
            
            $.post(ajaxurl, data, function (dataReturned) {
                alert("Joined to DBMS lesson! Please logout and login again! ");
            });                   
           
        });

        $('#testButton4').click(function(e){
            var value = "button4";
            var ajaxurl = "update_training.php";
            var data =  {'buttonValue': value};
            
            $.post(ajaxurl, data, function (dataReturned) {
                alert("Joined to CMS lesson! Please logout and login again! ");
            });                   
           
        });
    });
    </script>

<div class="container mb-5 mt-5">
    <div class="pricing card-deck flex-column flex-md-row mb-3">
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Front Ent</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" ><span class="price">HTML/5</span></span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>ReactJS</li>
                    <li>CSS/CSS3</li>
                    <li>Javascript</li>
                    <li>Angular</li>
                </ul>
               <input type="submit" class="btn btn-outline-secondary" name="Join" id="testButton1" value="Join" />
            </div>
        </div>

        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Back End</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="45">Java</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>PHP</li>
                    <li>Python</li>
                    <li>Ruby</li>
                    <li>C#</li>
                </ul>
                 <input type="submit" class="btn btn-outline-secondary" name="Join" id="testButton2" value="Join" />
            </div>
        </div>
       
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">DBMS</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="45">SQL</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>MySQl</li>
                    <li>NoSQL</li>
                    <li>Oracle</li>
                    <li> </li>
                </ul>
                 <input type="submit" class="btn btn-outline-secondary" name="Join" id="testButton3" value="Join" />
            </div>
        </div>
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">CMS</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="45">Joomla!</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>WordPress</li>
                    <li>Drupal</li>
                    <li>Mangento</li>
                    <li> </li>
                </ul>
                <input type="submit" class="btn btn-outline-secondary" name="Join" id="testButton4" value="Join" />
            </div>
        </div>
    </div>
</div>


</body>
</html>
