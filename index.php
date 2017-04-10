<!DOCTYPE html>
<html>
<head>
<script src="text/javascript" src="js/jquery.js"></script>
</head>
<body>
<h2>Signup</h2>
<div id="Signup">
<form method="post" action="InsertUser.php">
<table>
<tr>
<td>Your name:</td><td><input type="text" name="UserName"></td>
</tr>
<tr>
<td>Your Email:</td><td><input type="email" name="UserMail"></td>
</tr>
 <tr>
<td>Password:</td><td><input type="password" name="UserPassword"></td>
</tr>

<tr>
<td></td><input type="submit" value="Sign up"></td>
</tr>
<?php
if(isset($_GET['success'])){
?>
<tr>
<td></td><span style="color:green">UserInserted</span></td>
</tr>
<?php
}
?>
</table>
</form>
</div>
</body>
</html>
