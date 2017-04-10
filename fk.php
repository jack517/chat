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

<div id="chatview" class="p1">    	
        <div id="profile">

            <div id="close">
                <div class="cy"></div>
                <div class="cx"></div>
            </div>
            
            <p>Miro Badev</p>
            <span>miro@badev@gmail.com</span>
        </div>
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
</body>
</html>
