<?php
include"session.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="chatcss/style.css">
</head>
  <body>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>


<div id="chatbox">
<div id="topmenu"><a href="search1.php"><span class="friends"></span></a>

 <a href="conversation.php"><span class="friends></span></a><a href="chat.php"><span class="history"></span></a>

<a href="chat.php"><span class="friends"></span></a>
 </div>
<div id="friendslist">

<?php 
if(isset($_GET['UserId'])&& !empty($_GET['UserId'])){
header("location:search.php");

}
else {
$friendlist=mysql_query("SELECT * FROM register") or die(mysql_error());
while($run_user=mysql_fetch_array($friendlist)){
  $contactid=$run_user['UserId'];
$contact=$run_user['UserName'];
$photo=$run_user['UserImage'];
?>


<div id="friends">


<div class="friend ">

<?php
if(!empty($photo)){
?>
<p><img src="<?php echo $photo; ?>"width="40px"/>
<?php }
else
{
?>
<p><img src="default.jpg"width="40px"/>
<?php
}

?>

&nbsp;&nbsp;
<a href="search.php?UserId=<?php echo $contactid;?>" id="sd"/><strong><?php echo $contact;?></strong></a></p>



                <div class="status available"></div>
</div>
<?php
 }}?>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
        <script src="chatjs/index.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js'></script>
</body>
</html>