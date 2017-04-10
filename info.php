 <?php
include "session.php";
if(isset($_POST['submit'])){

$CurrentCity=$_POST['currentcity'];
$HomeTown=$_POST['hometown'];
$Work=$_POST['Work'];

if($usercheck){

$update=mysql_query("UPDATE register SET HomeTown='$HomeTown' ,CurrentCity='$CurrentCity' ,Work='$Work' WHERE UserId='$usercheck'") or die();
if($update){
header("location:viewupload.php?sta=2");
}
}
}
?>
