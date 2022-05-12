<?php
session_start();
include_once "connect.php";
$Uname=$_POST["Uname"];
 $Pass= $_POST["Pass"];
 $Pass1=$_POST["Pass1"];
 $_SESSION['variable']=$Uname; 
  
  $stid=oci_parse($conn,"insert into users(username,password,confirm)values('$Uname','$Pass','$Pass1')");
echo $stid;
  oci_execute($stid);
		if(!empty($stid))
	{
header('Location: addstudent.php?Uname='.$Uname.'');
 
}

else{
echo "<script> PLEASE CHECK YOUR username AND PASSWORD </script>";
} 
		 oci_commit($conn);

 ?>
 