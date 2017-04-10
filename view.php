<?php
include "home.php";
$qury=mysql_query("SELECT * FROM register WHERE UserId='$usercheck'");
while($row=mysql_fetch_array($qury)){
$loc=$row['UserImage'];
if($row['UserImage']==""){
 echo  "<img src='profile/default.jpg' width='200' height='200' />";
}

else
{

 echo "<img src='$loc' width='200' height='200' />";

}
}
?>
