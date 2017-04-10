
<?php
include "session.php";
?>
<?php
$currentError=$newError="";
$CurrentMail=$NewMail="";
if(isset($_POST['update'])){


$CurrentMail=$_POST['CurrentMail'];
$NewMail=$_POST['NewMail'];


if($CurrentMail==$usermail){
 $update=mysql_query("UPDATE register SET UserMail='$NewMail' WHERE UserId='$usercheck'") or die();

 if($update){
header("location:accountsetting.php?emailupdate=1");
}
else

{
echo mysql_error();
}
}
else
{
header("location:accountsetting.php?updatefailed=1");

}
 }

?>

