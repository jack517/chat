<?php
include"home.php";

 
?>


<html>
<head>

<link href="photocss/styles.css" rel="stylesheet" type="text/css" />
<script src="jquery/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function (e) {
	$("#uploadForm").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "upload.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
			$("#targetLayer").html(data);
		    },
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>

</head>
<?php
$qury=mysql_query("SELECT * FROM register WHERE UserId='$usercheck'");
while($row=mysql_fetch_array($qury)){
$loc=$row['UserImage'];
echo "<center><div class='cont'><div id='targetlayer'><img src='$loc' width='300' height='300'/></div>
<div id='uploadformlayer'></div>
</div></center>";
       

}
?>


<body>

<center>
  
<form id="uploadForm" action="upload.php" method="post">
<div id="targetlayer"></div>
<div id="uploadformlayer">
<input name="userImage" type="file" class="inputFile" />
<input type="submit" value="Submit"  name="submit"class="btnSubmit" />
</form>
</div>
<div class="list-group">

    <a href="#"  class="list-group-item" data-toggle="modal" data-target="#myModal12"><span 

class="font">Status</span></a>
<div class="modal fade" id="myModal12" role="dialog"> 
<div class="modal-dialog">
<div class="modal-content"> 
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">STATUS</h4>
</div>
<div class="modal-body" style="padding:40px 50px">
<p><form action="status.php" method="POST" role="form">
<div class="form-group">
<label for="newstatus"></label>
<input class="form-control" type="class" name="Status" placeholder="Add Your Status">
</div>
</p>
</div>
<div class="modal-footer">
  <button type="submit" class="btn btn-primary"  name="submit"><span class="glyphicon glyphicon-pencil">Update your Status</span></button>
<button type="button" class="btn btn-deafult " data-dismiss="modal">Cancel</button>

</form>

</div>
</div>
</div>
</div>

<a href="#"  class="list-group-item" data-toggle="modal" data-target="#myModal1"><span 

class="font">Basic Information </span></a>
<div class="modal fade" id="myModal1" role="dialog"> 
<div class="modal-dialog">
 <div class="modal-content"> 
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">STATUS</h4>
</div>
<div class="modal-body" style="padding:40px 50px">
<p><form action="info.php" method="POST" role="form">
<div class="form-group">
<label for="newpassword"></label>
<input class="form-control" name="currentcity" placeholder="Current City" type="text"><br>
<input class="form-control" name="hometown" placeholder="Home Town" type="text">

</div>
<div class="form-group">
<label for="newpassword"></label>
<input class="form-control" name="Work" placeholder="Currently what do u do" type="text">

</div>


</p>
</div>
<div class="modal-footer">
  <button type="submit" class="btn btn-primary"  name="submit"><span class="glyphicon glyphicon-pencil">Update your Info.</span></button>

<button type="button" class="btn btn-deafult " data-dismiss="modal">Cancel</button>
 </form>
</div>
</div>
</div>
</div>


    </div>
</center>





</body>
</html>




