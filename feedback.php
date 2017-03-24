<?php

session_start();



if(isset($_POST['dname']) && isset($_POST['gender']) && isset($_POST['as'])){
  $_SESSION['dname'] = $_POST['dname'];
  $_SESSION['gender'] = $_POST['gender'];
  $_SESSION['as'] = $_POST['as'];
header("location:feed.php");
}
?>
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

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1><center>Feedback Info</center></h1>
<div class="container">
<form action="feedback.php" method="post">
<pre>
<strong>Doctors Name: </strong><input type="text" name="dname" placeholder="Enter Doctor's Name" required><br>
<strong>Enter Timing: </strong><input type="radio" name="gender" value="Morning" required> Morning(3 am- 12 noon) <input type="radio" name="gender" value="Afternoon"> Afternoon(12 noon-6 pm) <input type="radio" name="gender" value="Evening"> Evening(6 pm-3 am)<br>
<strong>I came to the hospital as :</strong><input type="radio" name="as" value="Patient" required> Patient<input type="radio" name="as" value="ByStander"> ByStander <input type="radio" name="as" value="Visitor"> Visitor<br>
<input type="submit">
</pre>
</form>
</div>
</body>
</html>

