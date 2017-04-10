
<?php
include "session.php";
?>


<!DOCTYPE html>
<html lang="en">
	<head>
<style>
i.mysize{
font-size:2em;
}
span.mysize{
font-size:18px;
}
span.font{
font-family:sans-serif;
font-size:18px;

}
.container{
margin-left:500px;
margin-right:500px;
position:fixed;
}

</style>		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Section scroller template</title>
<!-- Bootstrap Core CSS -->
    <link href="csslide/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="csslide/simple-sidebar.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="online/style.css">


		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-

awesome.min.css">

		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" 

rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css7/styles.css" rel="stylesheet">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
	
  </head>
	<body>
<div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
    <ul class="sidebar-nav">
   
                <li class="sidebar-brand">
                    
                <li>
                    <a href="about.php"><span class="font">View Profile</span><span class="glyphicon 

glyphicon-user mysize"></span></a>
                </li>
                <li>

                    <a href="#"><span class="font">Find Friends</span><span class="glyphicon glyphicon-search 

mysize"></span></a>
                </li>
                <li>
                    <a href="#"><span class="font">Chat History</span><span class="glyphicon glyphicon-time 

mysize"></span></a>
                </li>
                <li>
                    <a href="#"><span class="font">Friends</span><span class="glyphicon glyphicon-group 

mysize"></span></a>
                </li>
                <li>
                    <a href="accountsetting.php"><span class="font"> Account Setting</span><span 

class="glyphicon glyphicon-cog mysize"></span></a>
                </li>
                <li>
                    <a href="#"><span class="font">Conatct & Support</span><span class="glyphicon glyphicon-

earphone mysize"></span></a>
                </li>
<li>
                    <a href="logout.php"><span class="font">Log Out</span><span class="glyphicon glyphicon-off 

mysize"></span></a>
                </li>
               </ul> 
          
        </div>

<div id="page-content-wrapper">

    
        <nav class="navbar navbar-trans navbar-fixed-top" role="navigation">
    
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="mysize">Brand</i></a>
    </div>
    <div class="navbar-collapse collapse" id="navbar-collapsible">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="#section1"><i class="glyphicon glyphicon-home mysize"></i></a></li>
<li>&nbsp;</li>
<li>&nbsp;</li>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
        
        
        <li><a href="#section2"><i class="glyphicon glyphicon-comment mysize"></i></a></li>
        <li><a href="#section3"><iclass="glyphicon glyphicon-user mysize"></i></a></li>
        <li><a href="#section3"><i class="glyphicon glyphicon-bell mysize"></i></a></li>
            <li><a href="#section3"><span class="mysize">Tech-newsfeed</span></a></li>
         <li><a href="#menu-toggle" id="menu-toggle"><i class="glyphicon glyphicon-th-list 

mysize"></i></a></li>
        <li>&nbsp;</li>
<li>&nbsp;</li>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
         <li>&nbsp;</li>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
          </ul>
            <form class="navbar-form">
        <div class="form-group" style="display:inline;">
          <div class="input-group"> 
            <input type="text" class="form-control" placeholder="What are searching for?">
            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span> </span>
          </div>
        </div>
      </form>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
<div class="list-group">
<a href="#"  class="list-group-item list-group-item-success" data-toggle="modal" data-target="#myModal"><span 

class="font">Change Password</span></a>
<div class="modal fade" id="myModal" role="dialog"> 
<div class="modal-dialog">
<div class="modal-content"> 
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Reset Password</h4>
</div>
<div class="modal-body" style="padding:40px 50px">
<p><form action="resetpassword.php" method="POST" role="form">
<div class="form-group">
<label for="userpassword"></label>
<input type="password" class="form-control" name="CurrentPassword" placeholder="Enter Current password">
</div>
<div class="form-group">
<label for="newpassword"></label>
<input type="password" class="form-control" name="NewPassword" placeholder="Enter New password">
</div>
</p>
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-primary"  name="submit">Save</button>
<button type="button" class="btn btn-deafult " data-dismiss="modal">Cancel</button>
</form>

</div>
</div>
</div>
</div>
<a href="delete.php?id=<?php echo $id;?>"
onclick="return confirm('Are you sure you want to delete your account');"class="list-group-item list-group-item-success"><span class="font">Delete Account</span></a>
<a href="#"  class="list-group-item list-group-item-success" data-toggle="modal" data-target="#myModal2"><span 

class="font">Update E-mail</span></a>
<div class="modal fade" id="myModal2" role="dialog">
<div class="modal-dialog">
<div class="modal-content"> 
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Update E-mail</h4>
</div>
<div class="modal-body" style="padding:40px 50px">
<p><form action="resetemail.php" method="POST" role="form">
<div class="form-group">
<label for="UserMail"></label>
<input type="text" class="form-control" name="CurrentMail" placeholder="Enter Current E-mail">

</div>
<div class="form-group">
<label for="newmail"></label>
<input type="text" class="form-control" name="NewMail" placeholder="Enter New E-mail">
</div>
</p>
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-primary"  name="update" >Save</button>


<button type="button" class="btn btn-deafult " data-dismiss="modal">Cancel</button>
</form>
</div>
</div>
</div>
</div>

<a href="#"  class="list-group-item list-group-item-success" data-toggle="modal" data-target="#myModal3"><span 

class="font">Blocking</span></a>
<div class="modal fade" id="myModal3" role="dialog">
<div class="modal-dialog">
<div class="modal-content"> 
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>

<p class="modal-title">Once you block someone,You will no longer be able to 
send you messa ges<?php echo $userstatus;?></p>
</div>
<div class="modal-body" style="padding:40px 50px">
<p><form action="blockuser.php" method="POST" role="form">
<div class="form-group">
<label for="blockuser"></label>
<input type="text" class="form-control" name="BlockFriend" placeholder="Enter or Search Friend">
</div>
</p>
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-primary"  name="update" >Save</button>


<button type="button" class="btn btn-deafult " data-dismiss="modal">Cancel</button>
</form>
</div>
</div>
</div>
</div>







</div>
</center>
<!---CHAT-->
<div class="chat_box">
<div class="chat_head">ChatBox</div>
<div class="chat_body">
<div class="user">ManuGupta</div>
</div>
</div>
<div class="msg_box" style="right:290px">
<div class="msg_head"><?php echo $username;?>
<div class="close">x</div>
</div>
<div class="msg_wrap">
<div class="msg_body">
<div class="msg_a">This is from A</div>
<div class="msg_b">This is from B</div>
<div class="msg_insert"></div>
</div>
<div class="msg_footer"><textarea class="msg_input" rows="4">sample</textarea></div>
</div>

<!-- jQuery -->
    <script src="jslide/jquery.js"></script>
<script src="online/script.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="jslide/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

	</body>
</html>




<?php 
if(isset($_GET['success'])){
?>
<script>
alert("You have entered wrong old password");
</script>
<?php
}
 else if(isset($_GET['error'])){
?>
<script>
alert("You have entered wrong old password");
</script>
<?php
}
else if(isset($_GET['emailupdate'])){
?>
<script>
alert("You have entered");
</script>
<?php
}
else if(isset($_GET['updatefailed'])){
?>
<script>
alert("You have entered wrong ");
</script>
<?php
}



?>