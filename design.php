<?php

session_start();

$hname = $_SESSION['hospital'];
$dname = $_SESSION['dname'];
$time = $_SESSION['gender'];
$aspaa =$_SESSION['as'];

///values
$group1 = $_POST['group1'];
$group2= $_POST['group2'];
$group3 = $_POST['group3'];
$group4 = $_POST['group4'];
$group5 = $_POST['group5'];
$group6 = $_POST['group6'];
$group7 = $_POST['group7'];
$group8 = $_POST['group8'];
$group9 = $_POST['group9'];
$group10 = $_POST['group10'];
$group11 = $_POST['group11'];
$group12 = $_POST['group12'];
$group13 = $_POST['group13'];
$group14 = $_POST['group14'];
$group15 = $_POST['group15'];
$group16 = $_POST['group16'];
$group17 = $_POST['group17'];
$group18 = $_POST['group18'];
$group19 = $_POST['group19'];
$group20 = $_POST['group20'];

include_once"dbconfig.php";
$query = "INSERT INTO hosclient (hname,dname,time,asp,g1,g2,g3,g4,g5,g6,g7,g8,g9,g10,g11,g12,g13,g14,g15,g16,g17,g18,g19,g20) VALUES('$hname','$dname','$time','$aspaa','$group1','$group2','$group3','$group4','$group5','$group6','$group7','$group8','$group9','$group10','$group11','$group12','$group13','$group14','$group15','$group16','$group17','$group18','$group19','$group20')";

$result = $connection->query($query);




$stat = "SELECT * from hosclient where hname='$hname'";

$res = $connection->query($stat);

$rows = $res->num_rows;

$doctor = 0;
$management = 0;
$clean =0;
$facilities = 0;
$medicine = 0;
$overall = 0;

for($j = 0 ;$j < $rows ; ++$j){
  $row = $res->fetch_array(MYSQLI_ASSOC);


  $doctor = $doctor + $row['g4'] + $row['g5'] + $row['g6'] + $row['g7'];
  $management = $management + $row['g1'] + $row['g3'] + $row['g18'] + $row['g19'];
  $clean = $clean + $row['g10'] + $row['g11'] + $row['g12'];
  $facilities = $facilities + $row['g2'] + $row['g8'] + $row['g9'] + $row['g15'] + $row['g16'] + $row['g17'];
  $medicine = $medicine + $row['g14'] + $row['g13'];
  $overall = $overall + $row['g20'];
}


$doctor = (($doctor/$rows)/400)*100;
$management = (($management/$rows)/400)*100;
$clean = (($clean/$rows)/300)*100;
$facilities = (($facilities/$rows)/600)*100;
$medicine = (($medicine/$rows)/200)*100;
$overall = (($overall/$rows)/100)*100;


$selq = "SELECT * from graph where hname='$hname'";

$selres = $connection->query($selq);

if($selres->num_rows){
$q = "UPDATE graph set doctor='$doctor',management=$management,facilities=$facilities,clean=$clean,medicine=$medicine,overall=$overall where hname='$hname'";
$result1=$connection->query($q);

}
else{
$insquery = "INSERT INTO graph (hname,doctor,management,facilities,clean,medicine,overall)
             VALUES('$hname','$doctor','$management','$facilities','$clean','$medicine','$overall')";

$insres = $connection->query($insquery);
}
?>
<!doctype html>
<html>
<body>
<h1>Feedback submitted Successfully<br>
<a href='index.php'>To see statiscs</a>

</body>
</html>