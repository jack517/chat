<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("startup",$conn);
 session_start();
$usercheck=$_SESSION['UserId'];
$sql=
"SELECT *FROM register WHERE(UserId='".$usercheck."')";
$qury=mysql_query($sql);
$result=mysql_fetch_array($qury);
$login_session=$result['UserId'];
$userpassword=$result['UserPassword'];
$username=$result['UserName'];
$usermail=$result['UserMail'];
$userstatus=$result['UserStatus'];

if(!isset($login_session)){
header("location:index.html");
}

?>