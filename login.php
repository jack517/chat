<?php
include"dbconfig.php";
session_start();
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<form action="login.php" method="post">
<div class="modal-dialog">
<div class="modal-content"> 
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Login with Aadhar</h4>
</div>
<div class="modal-body" style="padding:40px 50px">
<p><div class="form-group">
<label for="userpassword"></label>
<input type="text" class="form-control" name="aadharno" placeholder="Enter AadharCard Number">
</div>
</p>
</div>
<div class="modal-footer">
<input type="submit" class="btn btn-primary"  name="submita">
<button type="button" class="btn btn-deafult " data-dismiss="modal">Cancel</button>
</div></form>

</div>
</div>
</div>
<?php
if(isset($_POST['submita'])){
	$inputhospital=$_SESSION['hospital'];
	$inputaadhar=$_POST['aadharno'];
$sql="SELECT * FROM clients WHERE aadhar='$inputaadhar'and hospital_name='$inputhospital'";
	$state=$connection->query($sql);
	if ($state->num_rows > 0) {
  $_SESSION['aadhar']=$result['aadhar'];
 header("location:otp.php");
 } 
else{ 
 echo '<div class="alert alert-danger">Your Phone does not match your hospital</div>';
}
}

?>


</body>
</html>

