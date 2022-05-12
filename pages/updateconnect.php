<?php
session_start();
include_once "connect.php";
$query = "select * from Employment where PUPREG_Id in (select PUPREG_ID from Alumni where username ='".$_SESSION['variable']."') ";
$stid = oci_parse($conn, $query);
$r = oci_execute($stid);
$i=0;
while($row=oci_fetch_array($stid,OCI_RETURN_NULLS+OCI_ASSOC))
{
	$i++;
}
if($i>0)
{
	header('location:updatestudentprocess.php');
}
if($i==0)
{
	header('location:updateunemploymentprocess.php');
}
oci_commit($conn);
?>