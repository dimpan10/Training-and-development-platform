<?php
  include("connect.php");
  session_start();
  
  /*include ("../time_out_session.php");
  if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
  }
  */
$total_pages_sql = "SELECT COUNT(*) FROM employee WHERE department='Marketing'";
  $result = mysqli_query($connection,$total_pages_sql);
  $total_departments = mysqli_fetch_array($result)[0];


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Departments', 'Empoyees'],
          ['HR',     <?php echo " (".$total_departments.")"; ?>],
          ['Managment',      2],
          ['IT',  2],
          ['Marketing', 2],
          ['Salys',    7]
        ]);

        var options = {
          title: 'Departments Empoyees',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

  </head>


</head>

<body>

<?php

	  	// Navigation Bar
	    include("navbar.php");
?>
	<div class="container-fluid">
		<div class="row ">
			<div class="col-sm-6">
				<div id="donutchart" style="width: 900px; height: 500px;">
					
				</div>
			</div>
			<div class="col-sm-6">
				<div id="curve_chart" style="width: 900px; height: 500px;margin-left: -10%;">
					
				</div>
			</div>
		</div>

    		
   		
   	</div>




















</body>
</html>