<?php
session_start();
if(session_destroy()){
header("location:loginform.php");

}
else
{
echo "err";
}

?>