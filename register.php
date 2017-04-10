
<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("startup",$conn);
session_start();
?>



<?php
$usernameError=$passwordError=$emailError=$contactError="";
$UserName=$UserPassword=$UserMail=$UserContact="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
if(empty($_POST["username"])){
$usernameError="username is required";
}
else
{
$UserName=test_input($_POST["username"]);
if (!preg_match("/^[a-zA-Z0-9 ]*$/",$UserName)) {
       $usernameError = "Only letters,numbers and white space allowed"; 
     }
   }
   if(empty($_POST["password"])){
$passwordError="Paasword field is required";
}
else

{
$UserPassword=test_input(sha1($_POST["password"]));
 if(strlen($UserPassword)<6){
$passwordError="Password length must be atleast six";
}
}
if (empty($_POST["email"])) {
     $emailError = "Email is required";
   } else {
     $UserMail = test_input($_POST["email"]);
     // check if e-mail address syntax is valid or not
     if  (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$UserMail)) {
       $emailError = "Invalid email format";
     }
 }
if(empty($_POST['contact'])) {
$contactError= "Contact is required";
}
else {
$UserContact=test_input($_POST["contact"]);
if (!preg_match("/^[0-9 ]*$/",$UserContact)) {
$contactError="Inavlid contact format";
}
}

}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

$sql='INSERT into register(UserContact,UserName,UserMail,UserPassword) value('.$UserContact.',"'.$UserName.'","'.$UserMail.'","'.$UserPassword.'")';
$qury=mysql_query($sql);
if(!$qury){
echo 'an error occured'.mysql_error();}
else
{
echo '<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,intial-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

  </head>
<body>
<br>
<br>

<center>

<div class="container">
<div class="alert alert-success">
<strong>Your account has been suucessfully created! Click here to<a href="loginform.php">LOGIN</a></strong>
</div>
</div>
</center>
</body>
</html>';
}

?>
<!--php ends here--!>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->

    <title>Registration</title>
    
    
    
    
        <link rel="stylesheet" href="css2/style.css">

    
    
    
  </head>

  <body>

    <link href='http://fonts.googleapis.com/css/family=Open+Sans:400,300,700' rel='stylesheet' type='text/css2'>
<link href='http://fonts.googleapis.com/css/family=Sofia' rel='stylesheet' type='text/css2'>
<div class='login'>
  <h2>Register</h2>

<form method="post" action="register.php"> 
			
  <input name='username' placeholder='Username' type='text'>
<span class="error">* <?php echo $usernameError;?>
</span>
	
  <input id='pw' name='password' placeholder='Password' type='password'><span class="error">* <?php echo $passwordError;?></span>
	
  <input name='email' placeholder='E-Mail Address' type='text'>
<span class="error">* <?php echo $emailError;?></span>
	
  <input name='contact' placeholder='Contact' type='text' value="">
  <span class="error">* <?php echo $contactError;?></span>

  <div class='agree'>
    <input id='agree' name='agree' type='checkbox'>
    <label for='agree'></label>Accept rules and conditions
   </div>
  <input  class='animated' type="submit" value='Register'>
</form>

  <a class='forgot' href='#'>Already have an account</a>
</div>
    
         </body>
</html>
