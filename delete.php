<?php
include "session.php";
$delete=mysql_query("DELETE FROM register WHERE UserId='$usercheck'");
if($delete){

header("location:index.html");
}
else
{
echo mysql_error();
}
?>
