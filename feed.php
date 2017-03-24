<?php

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
<style>
.sub-menu {
 background-color: #0474a4;
 color: #fff;
 display: none;
 position: absolute;
 width: 170px;
 z-index: 999;
}
.navbar-default .navbar-nav > li:hover .sub-menu {
 display: block;
}
.sub-menu a {
 color: #fff;
 display: inline-block;
 padding: 5px;
 text-decoration: none;
 width: 100%;
}
.radioo2 {
 margin: 0 5px 0 25px!important;
}
.radioo3 {
 margin: 0 5px 0 25px!important;
}
.pagecontent p {
 font-size: 16px;
 line-height: 25px;
}
.tabradio {
   text-align: center;
}
.inpatient{width:100%; margin: 20px 0;}
.inpatient th {
   color: #000;
   font-weight: bold;
   padding-bottom: 10px;
}
.inpatient td {
   color: #000;
   padding: 2px 0;
}
.fieldtitle {
   color: #000;
   font-size: 14px;
   font-weight: bold;
   margin: 15px 0;
 text-decoration: underline;
}
</style>
<div class="container">
<h2>Hospitals Service Area Ratings </h2></div>
<form method="post" action="design.php">
<table class="table table-bordered">
<tbody><tr><th>S.No</th><th>Service Areas</th><th>Excellent</th><th>Good</th><th>Satisfactory</th><th>Poor</th></tr>
<tr><td>1</td><td>Admission procedure at reception</td><td class="tabradio"><input type="radio" class="radioo1" name="group1" value="100"required></td><td class="tabradio"><input type="radio" class="radioo1" name="group1" value="75"></td><td class="tabradio"><input type="radio" class="radioo1" name="group1" value="50"></td><td class="tabradio"><input type="radio" class="radioo1" name="group1" value="25"></td></tr>
<tr><td>2</td><td>Medical care - Quality</td><td class="tabradio"><input type="radio" class="radioo1" name="group2" value="100"required></td><td class="tabradio"><input type="radio" class="radioo1" name="group2" value="75"></td><td class="tabradio"><input type="radio" class="radioo1" name="group2" value="50"></td><td class="tabradio"><input type="radio" class="radioo1" name="group2" value="25"></td></tr>
<tr><td>3</td><td>Medical care - Explanation of procedures</td><td class="tabradio"><input type="radio" class="radioo1" name="group3" value="100"required></td><td class="tabradio"><input type="radio" class="radioo1" name="group3" value="75"></td><td class="tabradio"><input type="radio" class="radioo1" name="group3" value="50"></td><td class="tabradio"><input type="radio" class="radioo1" name="group3" value="25"></td></tr>
<tr><td>4</td><td>Nursing care - Friendliness</td><td class="tabradio"><input type="radio" class="radioo1" name="group4" value="100"required></td><td class="tabradio"><input type="radio" class="radioo1" name="group4" value="75"></td><td class="tabradio"><input type="radio" class="radioo1" name="group4" value="50"></td><td class="tabradio"><input type="radio" class="radioo1" name="group4" value="25"></td></tr>
<tr><td>5</td><td>Nursing care - Professionalism</td><td class="tabradio"><input type="radio" class="radioo1" name="group5" value="100"required></td><td class="tabradio"><input type="radio" class="radioo1" name="group5" value="75"></td><td class="tabradio"><input type="radio" class="radioo1" name="group5" value="50"></td><td class="tabradio"><input type="radio" class="radioo1" name="group5" value="25"></td></tr>
<tr><td>6</td><td>Nursing care - Frequency of visits</td><td class="tabradio"><input type="radio" class="radioo1" name="group6" value="100"required></td><td class="tabradio"><input type="radio" class="radioo1" name="group6" value="75"></td><td class="tabradio"><input type="radio" class="radioo1" name="group6" value="50"></td><td class="tabradio"><input type="radio" class="radioo1" name="group6" value="25"></td></tr>
<tr><td>7</td><td>Nursing care - Response to calls</td><td class="tabradio"><input type="radio" class="radioo1" name="group7" value="100"required></td><td class="tabradio"><input type="radio" class="radioo1" name="group7" value="75"></td><td class="tabradio"><input type="radio" class="radioo1" name="group7" value="50"></td><td class="tabradio"><input type="radio" class="radioo1" name="group7" value="25"></td></tr>
<tr><td>8</td><td>Room - Facilities</td><td class="tabradio"><input type="radio" class="radioo1" name="group8" value="100"required></td><td class="tabradio"><input type="radio" class="radioo1" name="group8" value="75"></td><td class="tabradio"><input type="radio" class="radioo1" name="group8" value="50"></td><td class="tabradio"><input type="radio" class="radioo1" name="group8" value="25"></td></tr>
<tr><td>9</td><td>Room - Security</td><td class="tabradio"><input type="radio" class="radioo1" name="group9" value="100"required></td><td class="tabradio"><input type="radio" class="radioo1" name="group9" value="75"></td><td class="tabradio"><input type="radio" class="radioo1" name="group9" value="50"></td><td class="tabradio"><input type="radio" class="radioo1" name="group9" value="25"></td></tr>
<tr><td>10</td><td>Housekeeping - Cleanliness of room</td><td class="tabradio"><input type="radio" class="radioo1" name="group10" value="100"required></td><td class="tabradio"><input type="radio" class="radioo1" name="group10" value="75"></td><td class="tabradio"><input type="radio" class="radioo1" name="group10" value="50"></td><td class="tabradio"><input type="radio" class="radioo1" name="group10" value="25"></td></tr>
<tr><td>11</td><td>Housekeeping - Cleanliness of bathroom</td><td class="tabradio"><input type="radio" class="radioo1" name="group11" value="100"required></td><td class="tabradio"><input type="radio" class="radioo1" name="group11" value="75"></td><td class="tabradio"><input type="radio" class="radioo1" name="group11" value="50"></td><td class="tabradio"><input type="radio" class="radioo1" name="group11" value="25"></td></tr>
<tr><td>12</td><td>Housekeeping - Cleanliness of public areas</td><td class="tabradio"><input type="radio" class="radioo1" name="group12" value="100"required></td><td class="tabradio"><input type="radio" class="radioo1" name="group12" value="75"></td><td class="tabradio"><input type="radio" class="radioo1" name="group12" value="50"></td><td class="tabradio"><input type="radio" class="radioo1" name="group12" value="25"></td></tr>
<tr><td>13</td><td>Laboratory / Investigations services</td><td class="tabradio"><input type="radio" class="radioo1" name="group13" value="100"required></td><td class="tabradio"><input type="radio" class="radioo1" name="group13" value="75"></td><td class="tabradio"><input type="radio" class="radioo1" name="group13" value="50"></td><td class="tabradio"><input type="radio" class="radioo1" name="group13" value="25"></td></tr>
<tr><td>14</td><td>Pharmacy services</td><td class="tabradio"><input type="radio" class="radioo1" name="group14" value="100"required></td><td class="tabradio"><input type="radio" class="radioo1" name="group14" value="75"></td><td class="tabradio"><input type="radio" class="radioo1" name="group14" value="50"></td><td class="tabradio"><input type="radio" class="radioo1" name="group14" value="25"></td></tr>
<tr><td>15</td><td>Technical services - Lifts, TV, AC, Telephone etc.</td><td class="tabradio"><input type="radio" class="radioo1" name="group15" value="100"required></td><td class="tabradio"><input type="radio" class="radioo1" name="group15" value="75"></td><td class="tabradio"><input type="radio" class="radioo1" name="group15" value="50"></td><td class="tabradio"><input type="radio" class="radioo1" name="group15" value="25"></td></tr>
<tr><td>16</td><td>Canteen facilities - Quality of food</td><td class="tabradio"><input type="radio" class="radioo1" name="group16" value="100"required></td><td class="tabradio"><input type="radio" class="radioo1" name="group16" value="75"></td><td class="tabradio"><input type="radio" class="radioo1" name="group16" value="50"></td><td class="tabradio"><input type="radio" class="radioo1" name="group16" value="25"></td></tr>
<tr><td>17</td><td>Canteen facilities - Quality of service</td><td class="tabradio"><input type="radio" class="radioo1" name="group17" value="100"required></td><td class="tabradio"><input type="radio" class="radioo1" name="group17" value="75"></td><td class="tabradio"><input type="radio" class="radioo1" name="group17" value="50"></td><td class="tabradio"><input type="radio" class="radioo1" name="group17" value="25"></td></tr>
<tr><td>18</td><td>Billing activities - Ease of procedures</td><td class="tabradio"><input type="radio" class="radioo1" name="group18" value="100"required></td><td class="tabradio"><input type="radio" class="radioo1" name="group18" value="75"></td><td class="tabradio"><input type="radio" class="radioo1" name="group18" value="50"></td><td class="tabradio"><input type="radio" class="radioo1" name="group18" value="25"></td></tr>
<tr><td>19</td><td>Time taken for final discharge</td><td class="tabradio"><input type="radio" class="radioo1" name="group19" value="100"required></td><td class="tabradio"><input type="radio" class="radioo1" name="group19" value="75"></td><td class="tabradio"><input type="radio" class="radioo1" name="group19" value="50"></td><td class="tabradio"><input type="radio" class="radioo1" name="group19" value="25"></td></tr>
<tr><td>20</td><td>Overall satisfaction level for the Hospital</td><td class="tabradio"><input type="radio" class="radioo1" name="group20" value="100" required></td><td class="tabradio"><input type="radio" class="radioo1" name="group20" value="75"></td><td class="tabradio"><input type="radio" class="radioo1" name="group20" value="50"></td><td class="tabradio"><input type="radio" class="radioo1" name="group20" value="25"></td></tr>
</tbody>
</table>
<center><input type="submit" class="btn btn-default" value="Submit Feedback"></center>
</form>
<hr>
</body>
</html>
