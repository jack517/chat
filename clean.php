<?php
session_start();
include_once"dbconfig.php";
$hosp=$_SESSION['hospital'];
$query = "SELECT * from graph where hname='$hosp'";
$res = $connection->query($query);

$row = $res->fetch_array(MYSQLI_ASSOC);
if($res->num_rows){
  $doctor = $row['doctor'];
  $management = $row['management'];
  $clean = $row['clean'];
  $facilities = $row['facilities'];
  $medicine = $row['medicine'];
  $overall = $row['overall'];
}
else {
  echo "No feedback submitted";
}


echo <<<_END
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/materialize.min.css"
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/materialize.css">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script type="text/javascript" src="js/jquery.onImagesLoad.min.js"></script>
    <script type="text/javascript" src="js/jquery.responsiveSlides.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="http://canvasjs.com/assets/script/canvasjs.min.js">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
html, body {
  width:  100%;
  height: 100%;
  margin: 0px;
}
</style>
<script>
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
		theme: "theme2",//theme1
		title:{
			text: "Cleanliness"
		},
    axisY:{
   //     minimum: 50,
      maximum: 100
     },
		animationEnabled: false,   // change to true
		data: [
		{
			// Change type to "bar", "area", "spline", "pie",etc.
			type: "column",
			dataPoints: [
				{ label: "Morning",  y: 50  },
				{ label: "Afternoon", y: 70  },
        { label: "Evening",  y: 50 }
			]
		}
		]
	});
	chart.render();
}
</script>
</head>
<body>
<div class="container">
<canvas id="myChart" width="10" height="10"></canvas>
<div id="chartContainer" style="height: 500px; width: 100%;"></div>
</div>
<script>
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
		theme: "theme2",//theme1
		title:{
			text: "Cleanliness"
		},
    axisY:{
   //     minimum: 50,
      maximum: 100
     },
		animationEnabled: false,   // change to true
		data: [
		{
			// Change type to "bar", "area", "spline", "pie",etc.
			type: "column",
      cursor: "pointer",
      click: onClick,
			dataPoints: [
        { label: "Morning",  y: 50  },
        { label: "Afternoon", y: 70  },
        { label: "Evening",  y: 50 }

			]
		}
		]
	});
	chart.render();
  function onClick(e) {
		window.open(e.dataPoint.link,'_blank');
}
}
</script>
</body>
</html>
_END;
?>
