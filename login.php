<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("startup",$conn);
session_start();

?>
<?php
$msg='';

if($_SERVER["REQUEST_METHOD"] == "POST"){
$id=$_POST["email"];
$pass=sha1($_POST["password"]);


$sql=
"SELECT *FROM register WHERE(UserMail='".$id."'and UserPassword='".$pass."')";
$qury=mysql_query($sql);
$result=mysql_fetch_array($qury);
if($result[0]>0)
{

  $_SESSION['UserId']=$result['UserId'];
$_SESSION['UserMail']=$result['UserMail'];
 header("location:home.php");

}
else
{
$msg="Wrong Email or Password.Please retry";
header("location:loginform.php?msg=$msg");
}

}
 ?>