<?php
include "session.php";
?>
<?php

$hash=$_GET['hash'];
$message_query1=mysql_query("SELECT userone,usertwo FROM messagegroup WHERE hash='$hash'");
$run_message1=mysql_fetch_array($message_query1);
$userone1=$run_message1['userone'];
$userone2=$run_message1['usertwo'];


if($userone1==$usercheck){
$select_id1=$userone2;
}
else{
$select_id1=$userone1;
}
$userget1=mysql_query("SELECT * FROM register WHERE UserId='$select_id1'");
$run_user1=mysql_fetch_array($userget1);
$displayimage=$run_user1['UserImage'];
$select_name=$run_user1['UserName'];


?>

<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="online/style.css">
    <link rel='stylesheet prefetch' href="chatcss/font.css">
<link rel='stylesheet prefetch' href='chatcss/scroll.css'>
  
        <link rel="stylesheet" href="chatuicss/style.css">
<script src='jquery/jquery.min.js'></script>
<script src='chatjs/scroll.js'></script>
<script src='chatjs/index.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="chat">
  <div class="chat-title">

    <h1><?php echo $select_name;?></h1>
    <h1> online</h1>
    <figure class="avatar">
<?php if(!empty($displayimage)){
?>
      <img src="<?php echo $displayimage;?>" /></figure>
<?php } else{
?><img src="default.jpg" />
</figure><?php }?></div>

  <div class="messages">
  
<?php
$hash=$_GET['hash'];
$message_query=mysql_query("SELECT fromid,message FROM messages WHERE gorup_hash='$hash'");
while($run_message=mysql_fetch_array($message_query)){
$fromid=$run_message['fromid'];
$message=$run_message['message'];
$user_query=mysql_query("SELECT UserImage FROM register WHERE UserId='$fromid'");
$run_user=mysql_fetch_array($user_query);
$message_image=$run_user['UserImage'];
?>  <?php
if($fromid==$usercheck){?>

 <p class="message message-personal"><?php echo $message;?></p>
<?php }
else{
?>
<p class="message-person"><?php echo $message;?></p>

<?php
}}?> 

</div>
  


<div class="message-box">
<form method="post" action="">


<?php
if(isset($_POST['message']) && !empty($_POST['message'])){
$newmessage=$_POST['message'];
$time=date("y-m-d H:i:s",time());
mysql_query("INSERT into messages VALUES('','$hash','$usercheck','$select_id1','$newmessage')");
header("location:livechat.php?hash=".$hash);
}

?>  <textarea type="text" class="message-input" name="message" placeholder="Type message..."></textarea>
    <button type="submit" class="message-submit" name="submit">Send</button></form>
</div>
</div>



<script>
$('.messages').scrollTop($('.messaages')[0].scrollHeight);
</script>



</body>
</html>





