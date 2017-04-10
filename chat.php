<?php
include "session.php";
$select=$_GET['UserId'];

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

	<div id="friendslist">
    	<div id="topmenu">
        	<a href="chat.php"><span class="friends"></span></a>
            <span class="chats"></span>
 <span class="history"></span>
<a href="#"><p class="glyphicon glyphicon-tasks size"></p></a>

        </div>
<div id="friends"><br><br>


 <?php
if(isset($_GET['UserId'])&&!empty($_GET['UserId'])){
header("location:sendmessage.php");
}
 
  else{

$friendlist=mysql_query("SELECT * FROM register") or die(mysql_error());
while($run_user=mysql_fetch_array($friendlist)){
  $contactid=$run_user['UserId'];
$contact=$run_user['UserName'];
$photo=$run_user['UserImage'];
?>
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
<a href="sendmessage.php?UserId=<?php echo $contactid;?>" id="sd"/><strong><?php echo $contact;?></strong></a></p>



                <div class="status available"></div>
</div>
<?php
 }}
  ?>

            <div id="chatview" class="p1">    	
        <div id="profile">

            <div id="close">
                <div class="cy"></div>
                <div class="cx"></div>
            </div>
            
            <p></p>            </div>
        <div id="chat-messages">
        	<label>Thursday 02</label>
            
            <div class="message">
            	<img src="chatpics/1_copy.jpg" />
                <div class="bubble">
                	Really cool stuff!
                    <div class="corner"></div>
                    <span>3 min</span>
                </div>
            </div>
            
            <div class="message right">
            	<img src="chatpics/2_copy.jpg" />
                <div class="bubble">
                	Can you share a link for the tutorial?
                    <div class="corner"></div>
                    <span>1 min</span>
                </div>
            </div>
            
               	
        <div id="sendmessage">
        	<input type="text" value="Send message..." />
            <button id="send"></button>
        </div>
    
    </div>
</div>

            

              </div>  
     
        </div>                
        
    
    
     
   
</div>	


    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
        <script src="chatjs/index.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js'></script>

    
  </body>
</html>
