
<?php
include "session.php";
?>
<?php
$currentError=$newError="";
$CurrentPassword=$NewPassword="";
if(isset($_POST['update'])){


$CurrentPassword=$_POST['CurrentPassword'];
$NewPassword=sha1($_POST['NewPassword']);


if($CurrentPassword==$userpassword){
 $updated=mysql_query("UPDATE register SET UserPassword ='$NewPassword' WHERE UserId='$usercheck'") or die();

 if($updated){
header("location:accountsetting.php?success=1");
}
else

{
echo mysql_error();
}
}
else
{
header("location:accountsetting.php?error=1");

}
 }

?>


