<!doctype html>
<html>
<head>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

  </style>

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
    </ul>
  </div>
</nav>

<div class="container">
	     <form style="margin-left:500px;margin-top:20px;">
      <div class="form-group form-group-lg">
      <div class="col-sm-4">
      <select class="form-control" name="state" id="sel1">
        <option>Select State</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      <br>
  </div>
</div>
</form>
  </div>

	
      </div>

<div class="container">
	     <form style="margin-left:500px;margin-top:100px;">
      <div class="form-group form-group-lg">
      <div class="col-sm-4">
      <select class="form-control"  id="sel1">
        <option>Select City</option>
       <?php


$state=$_POST['state'];
 $statequery="Select city from hospital where state='$state'";
 $staterun=$connection->query($statequery);
 if ($staterun->num_rows > 0) {
    
    while($row = $staterun->fetch_assoc()) {
   
$stateoutput=$row['state'];
?>

</select>
<?php }

?>
      <br>
  </div>
</div>
  </div>
</form>
	
      </div>

</body>
</html>
