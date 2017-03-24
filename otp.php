<?php
include_once "dbconfig.php";
session_start();
?>
 



<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<form action="otp.php" method="post">
<div class="modal-dialog">
<div class="modal-content"> 
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">OTP Confirmation</h4>
</div>
<div class="modal-body" style="padding:40px 50px">
	<p>OTP has been sent to your number which is registered with the  selected hospital</p>
		<p><div class="form-group">
	      <div class="col-sm-5">

<input type="text" class="form-control" name="otp" placeholder="Enter OTP">
</div>
</div>
</p>
</div>
<div class="modal-footer">
<input type="submit" class="btn btn-primary" value="Confirm" name="confirm">
<button type="button" class="btn btn-deafult " data-dismiss="modal">Cancel</button>
</div></form>

</div>
</div>
</div>
<?php
if(isset($_POST['confirm'])){
	$otp='234512';

$userinput=$_POST['otp'];
if($otp==$userinput){
	header("location:feedback.php");
}
else{
	echo '<div class="alert alert-danger">Please enter correct OTP</div>';
}
}
?>
</body>
</html>