<?php
include "session.php";
$select=$_GET['UserId'];
?>


<!DOCTYPE html>
<html >
  <head>
    
    
    <link rel="stylesheet" href="css/normalize.css">

    <link rel='stylesheet prefetch' href="chatcss/font.css">
<link rel='stylesheet prefetch' href='chatcss/scroll.css'>

        <link rel="stylesheet" href="chatuicss/style.css">

    
    
    
  </head>

  <body>

   <?php
   $friendlist=mysql_query("SELECT * FROM register WHERE(UserId='".$select."')");
   $run_user=mysql_fetch_array($friendlist);
  $contact=$run_user['UserName'];
$photo=$run_user['UserImage'];

     
?>
 
<div class="chat">
  <div class="chat-title">
    <h1><?php echo $contact;?></h1>
    <h2> online</h2>
    <figure class="avatar">
<?php if(!empty($photo)){
?>
      <img src="<?php echo $photo;?>" /></figure>
<?php } else{
?><img src="default.jpg" /></figure><?php }?>
  </div>
  <div class="messages">
    <div class="messages-content"></div>
  </div>  <div class="message-box">
  <?php
if(isset($_POST['submit'])){
if(isset($_POST['message']) &&!empty($_POST['message'])){
$random=rand();
$check_con=mysql_query("SELECT  * FROM messagegroup WHERE (userone='$usercheck' and usertwo='$select') or (userone='$select' and usertwo='$usercheck')") or die(mysql_error());

$result=mysql_fetch_array($chek_con);
$hack=$result['hash'];

if(!empty($hack)){
echo "hhhjcddcndcndkcndlcdfnvfdvbcfcvnkdfnvckdfcdcidrcdlckpdhcfjvtjovtjsmbhulgyahu";
}

else{
$rt="INSERT into messagegroup VALUES('$usercheck','$select','$random')";

 if(mysql_query($rt)){
echo "Conv";
}
else{
echo mysql_error();
}
}
}
} 
?><form method="post" action="">


    <textarea type="text" class="message-input" name="message" placeholder="Type message..."></textarea>
    <button type="submit" class="message-submit" name="submit">Send</button></form>
  </div>

</div>
<div class="bg"></div>
    <script src='jquery/jquery.min.js'></script>
<script src='chatjs/scroll.js'></script>

        <script src="chatuijs/index.js"></script>

    
    
    
  </body>
</html>
