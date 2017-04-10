  <?php
include "session.php";
$select=$_GET['UserId'];
?>
   <?php
   $friendlist=mysql_query("SELECT * FROM register WHERE(UserId='".$select."')");
   $run_user=mysql_fetch_array($friendlist);
  $contact=$run_user['UserName'];
$photo=$run_user['UserImage'];


     
?>


<!doctype html>
<head>
    <link rel="stylesheet" href="css/normalize.css">

    <link rel='stylesheet prefetch' href="chatcss/font.css">
<link rel='stylesheet prefetch' href='chatcss/scroll.css'>

        <link rel="stylesheet" href="chatuicss/style.css">
</head>
<body>
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
  </div> <div class="message-box">
   


<form method="post" action="">

<?php
if(isset($_POST['message']) &&!empty($_POST['message'])){
$random=rand();
$select=$_GET['UserId'];
$message=$_POST['message'];

$check_con=mysql_query("SELECT  hash FROM messagegroup WHERE (userone='$usercheck' and usertwo='$select') or (userone='$select' and usertwo='$usercheck')");
$row=mysql_num_rows($check_con);
$red=mysql_fetch_array($check_con);
$hred=$red['hash'];
if($row==1){


echo "<script>alert('conersation already started')</script>";
header("location:livechat.php?hash=".$hred);
}

else{
mysql_query("INSERT into messagegroup VALUES('$usercheck','$select','$random')");
mysql_query("INSERT into messages VALUES('','$random','$usercheck','$message')");

echo '<script>alert("Your first message is a request to your sender");</script';

} 
}
?>  <textarea type="text" class="message-input" name="message" placeholder="Type message..."></textarea>
    <button type="submit" class="message-submit" name="submit">Send</button></form>
    </div>
</div>

     <script src='jquery/jquery.min.js'></script>
<script src='chatjs/scroll.js'></script>
  
    
  </body>
</html>
    
    
    
  </body>
</html>
