<?php
include_once "connect.php";
$reg=$_POST["reg"];
 $id=$_POST["emp"];
 $company=$_POST["company"];
 $job=$_POST["job"];
 $salary=$_POST["salary"];
 $start=$_POST["start"];
 $end=$_POST["end"];
 $city=$_POST["city"];
 $state=$_POST["state"];
$pincode=$_POST["pin"];
 
  if($reg !=''||$id !=''){
 $stid= oci_parse($conn, "insert into Employment(PUPREG_Id,Emp_Id,Company_Name,Salary,Job_Position,Start_Time,End_Time,city,state,pincode)
 values('$reg','$id','$company','$salary','$job','$start','$end','$city','$state','$pincode')");
 
   oci_execute($stid);
   echo '<script>alert("Data Add succefully")
	</script>';
	 header('Location: student.php');
	oci_commit($conn);
	 }
  else
  {
	  echo "<script> alert('error')</script>";
  }
 ?>