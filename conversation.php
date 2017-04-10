<?php
include "session.php";
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
if(isset($_GET['hash'])&& !empty($_GET['hash'])){
header("location:livechat.php");
}


else{
$get_con=mysql_query("SELECT *  FROM messagegroup WHERE userone='$usercheck' OR usertwo='$usercheck'");
while($run_con=mysql_fetch_array($get_con)){
$hash=$run_con['hash'];
$userone=$run_con['userone'];
$usertwo=$run_con['usertwo'];
if($userone==$usercheck){
$select_id=$usertwo;
}
else{
$select_id=$userone;
}
$userget=mysql_query("SELECT *FROM register WHERE UserId='$select_id'");
while($run_user=mysql_fetch_array($userget)){
$displayimage=$run_user['UserImage'];
$select_name=$run_user['UserName'];

 ?>
<div id="friends">
<div class="friend ">


<?php
if(!empty($displayimage)){
?>
<p><img src="<?php echo $displayimage; ?>"width="40px"/>
<?php }
else
{
?>
<p><img src="default.jpg"width="40px"/>
<?php
}

?>



<a href="livechat.php?hash=<?php echo $hash;?>"/><strong><?php echo $select_name; ?></strong></a></p>



                <div class="status available"></div>

</div>
<?php
} }}?>

</div>
</div>
</div>


</body>
</html>