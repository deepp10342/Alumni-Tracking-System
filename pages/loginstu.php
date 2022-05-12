<?php
session_start();
include_once "connect.php";
$username=$_POST['Uname'];
$password=$_POST['Pass'];
$_SESSION['variable']=$username;
$query="select USERNAME,PASSWORD from users where USERNAME='$username' and PASSWORD='$password'";
$PRACTICE=oci_parse($conn,$query);
$r=oci_execute($PRACTICE);
$row =oci_fetch_array($PRACTICE,$r);
if(!empty($row))
{
	if(!is_null($row['USERNAME']==$username)&& ($row['PASSWORD']==$password))
	{
header('Location: updateconnect.php?username=$username');
 
}

}
else{
echo "<script> alert('PLEASE CHECK YOUR username AND PASSWORD') </script>";
}
?>
