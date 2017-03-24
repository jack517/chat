<?php
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
session_start();
include_once 'dbconfig.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$("#loding1").hide();
	$("#loding2").hide();
	$(".country").change(function()
	{
		$("#loding1").show();
		var id=$(this).val();
		var dataString = id;
		$(".state").find('option').remove();
		$(".city").find('option').remove();
	    
	    $.get("get_state.php",{query:dataString}).done(function(data){
	    	$(".state").html(data);
	    $("#loding1").hide();
			
	    });	 
        
		/*$.ajax
		({
			type: "GET",
			url: "get_state.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$("#loding1").hide();
				$(".state").html(html);
			} 
		});*/
	});
	
	
	$(".state").change(function()
	{
		$("#loding2").show();
		var id=$(this).val();
		var dataString =  id;
	
	/*	$.ajax
		({
			type: "POST",
			url: "get_city.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$("#loding2").hide();
				$(".city").html(html);
			} 
		});*/
	
               $.get("get_city.php",{query:dataString}).done(function(data){
               					
	    	$(".city").html(data);
	    	$("#loding2").hide();

	    
	    });	 
        
	});
	
});
</script>
<style>
label
{
font-weight:bold;
padding:10px;
}

.color {
	color:green;
}
select
{
	width:200px;
	height:35px;
	border:2px solid #456879;
	border-radius:10px;
}


.link {
	color:red;
}
</style>
</head>

<body>
<center>
	<h2>Feedback Form</h2>
	<form action="index.php"  method="POST" role="form" style="margin-left:400px;margin-top:100px;">

	     <div class="form-group form-group-lg">
      <div class="col-sm-4">

<select name="country" class="country form-control">
<option selected="selected">--Select State--</option>
<?php
	$stmt = "SELECT * FROM countries";
	$staterun=$connection->query($stmt);
 if ($staterun->num_rows > 0) {
    
    while($row = $staterun->fetch_assoc()) {
		?>
        <option value="<?php echo $row['country_id']; ?>"><?php echo $row['country_name']; ?></option>
        <?php
	} }
?>
</select>
<br><br><br>
<select name="state" class=" form-control state">
<option selected="selected">--Select City--</option>
</select>
<img src="ajax-loader.gif" id="loding1"></img>
<br><br><br>
 <select name="city" id="city" class="form-control city">
<option selected="selected">--Select Hospital--</option>
</select>
<img src="ajax-loader.gif" id="loding2"></img>
<br><br><br>
</div>
<br />
</div>
</div>
<button type="submit" name="view" class="btn btn-info btn-lg" style="margin-top:350px;">View Statics</button> 

<button type="submit" name="feed" class="btn btn-success btn-lg" style="margin-top:350px;">Want to give Feedback</button> 

</center>
</form>
<?php
if(isset($_POST['feed'])){
	$_SESSION['hospital'] = test_input($_POST['city']);
	
	 header("location:login.php");
}
?>
<?php
if(isset($_POST['view'])){
	$_SESSION['hospital'] = test_input($_POST['city']);
	
	header("location:graph.php");
}

?>
</body>
</html>
