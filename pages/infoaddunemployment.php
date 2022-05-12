<?php
include_once "connect.php";
$reg=$_POST["reg"];
 $id=$_POST["emp"];
 $job=$_POST["rd"];
 $do=$_POST["do"];
 $salary=$_POST["salary"];
 $emp=$_POST["ro"];
 echo"hello";
  if($reg !=''||$id !=''){
	  $query="insert into unemployment(PUPREG_Id,employed,doingJob,mca,finance,desire)values($reg,'$id','$job','$do','$salary','$emp')";
 $stid= oci_parse($conn,$query);
 echo $query;
   oci_execute($stid);
    echo "<script>alert('Data Add succefully')
        </script>";
		 header('Location: student.php');
	oci_commit($conn);
	 }
  else
  {
	  echo "<script> alert('error')</script>";
  }
 ?>