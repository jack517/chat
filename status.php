<?php
include "session.php";
if(isset($_POST['submit'])){
$UserStatus=$_POST['Status'];

 $qury=mysql_query("SELECT * FROM register WHERE UserId='$usercheck'");
while($row=mysql_fetch_array($qury)){
$s=$row['UserStatus'];
}
if($usercheck){

$update=mysql_query("UPDATE register SET UserStatus='$UserStatus' WHERE UserId='$usercheck'") or die();
if($update){
header("location:viewupload.php?status=2");
}
}
}
?>





