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
#display
{
width:250px;
display:none;
float:right; margin-right:30px;
border-left:solid 1px #dedede;
border-right:solid 1px #dedede;
border-bottom:solid 1px #dedede;
overflow:hidden;
}
.display_box
{
padding:4px; border-top:solid 1px #dedede; font-size:12px; height:30px;
}

.display_box:hover
{
background:#3b5998;
color:#FFFFFF;
}
#shade
{
background-color:#00CCFF;

}
#here{
width:380px;
height:500px;
border:1px solid  grey;
display:none;
top:30%;
overflow:scroll;
 margin: 0px auto;
    margin-top: 151px;
    padding-left: 30px;
    padding-right: 30px;
    outline: none;

}
#here a{
display:block;
width:80%;
padding:6%;
text-decoration:none;
margin-left:20px;
font-size:20px;
border-bottom:2px solid grey;
}




</style>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
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

		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css7/styles.css" rel="stylesheet">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

  </head>
	<body>

<div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
    <ul class="sidebar-nav">
   
                <li class="sidebar-brand">
                    
                <li>
                    <a href="viewupload.php"><span class="font">View Profile</span><span class="glyphicon glyphicon-user mysize"></span></a>
                </li>
                <li>

                    <a href="#"><span class="font">Find Friends</span><span class="glyphicon glyphicon-search mysize"></span></a>
                </li>
                <li>
                    <a href="#"><span class="font">Chat History</span><span class="glyphicon glyphicon-time mysize"></span></a>
                </li>
                <li>
                    <a href="#"><span class="font">Friends</span><span class="glyphicon glyphicon-group mysize"></span></a>
                </li>
                <li>
                    <a href="accountsetting.php"><span class="font"> Account Setting</span><span class="glyphicon glyphicon-cog mysize"></span></a>
                </li>
                <li>
                    <a href="#"><span class="font">Conatct & Support</span><span class="glyphicon glyphicon-earphone mysize"></span></a>
                </li>
<li>
                    <a href="logout.php"><span class="font">Log Out</span><span class="glyphicon glyphicon-off mysize"></span></a>
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
        
        
        <li><a href="search1.php"><i class="glyphicon glyphicon-comment mysize"></i></a></li>
        <li><a href="#section3"><iclass="glyphicon glyphicon-user mysize"></i></a></li>
        <li><a href="#section3"><i class="glyphicon glyphicon-bell mysize"></i></a></li>
            <li><a href="#section3"><span class="mysize">Tech-newsfeed</span></a></li>

         <li><a href="#menu-toggle"id="menu-toggle"><i class="glyphicon glyphicon-th-list mysize"></i></a></li>
                          <li><a href="#search"><i class="glyphicon glyphicon-search mysize"></i></a></li>
  
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
      

    </div>
  </div>


</div>
</nav>





<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


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
<script>
$(document).ready(function(e){
$("#live").keyup(function(){
$("#here").show();
var x=$(this).val();
$.ajax({
type:'POST',
url:'live.php',
data:'q='+x,
success:function(data){
$("#here").html(data);
}
});
});
});
</script>


	</body>
</html>