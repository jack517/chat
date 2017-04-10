<?php
include"session.php";
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
$sourcePath = $_FILES['userImage']['tmp_name'];
$targetPath = "profile/".$_FILES['userImage']['name'];
if($_FILES['userImage']['name']){

move_uploaded_file($sourcePath,$targetPath); 
$query=mysql_query("UPDATE register SET UserImage='$targetPath' WHERE UserId='$usercheck'");
}
}
}
?>


