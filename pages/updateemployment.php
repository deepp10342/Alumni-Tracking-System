<?php
include_once 'connect.php';
if(count($_POST)>0) {
	$query = oci_parse($conn, "UPDATE Alumni SET  ALUMNI_NAME='" . $_POST["full"]. "',COURSE_NAME='" . $_POST["course"]. "' ,CGPA='" . $_POST["marks"] . "',PHONE_NUMBER='".$_POST["num"]."',EMAIL='".$_POST["email"]."' WHERE PUPREG_ID='" . $_POST['reg'] . "'");
	$result = oci_execute($query, OCI_DEFAULT);  
	$query=oci_parse($conn,"UPDATE Employment SET EMP_ID='". $_POST["emp"]."',JOB_POSITION='".$_POST["job"]."',COMPANY_NAME='".$_POST["company"]."',SALARY='".$_POST["salary"]."',START_TIME='".$_POST["start"]."',END_TIME='".$_POST["end"]."',CITY='".$_POST["city"]."' WHERE PUPREG_ID='" . $_POST['reg'] . "'" );
	$result = oci_execute($query, OCI_DEFAULT); 
	if($result)  
	{  
		oci_commit($conn);
		function function_alert($message) {  
    echo "<script>alert('$message');
	</script>"; 
	header('location:employemntstudent.php');
} 
function_alert("Data Updated Successfully !"); 
 
} 
	else{
		echo "<script> alert('Error')</script>";
	}
}
$query="SELECT * FROM Alumni WHERE PUPREG_ID='" . $_GET['PUPREG_Id'] . "'";
$result=oci_parse($conn,$query);
oci_execute($result);
$row=oci_fetch_array($result);
$query="SELECT * FROM Employment WHERE PUPREG_ID='" . $_GET['PUPREG_Id'] . "'";
$result=oci_parse($conn,$query);
oci_execute($result);
$row1=oci_fetch_array($result);
?>
<html>
<head>
<title>updatestudent</title>
<link rel="stylesheet" type="text/css" href="../style/layout.css" />
</head>
<body>
<div class="main">
</div>
<div class="sidebar">
   <a href="studentlogin.php">Log Out</a>
</div>
<div class="content">
<form  action="" method="post">
 <fieldset>
 <legend>Personal Information</legend>
 Full Name:<input type="text"  id="full" name="full" value="<?php echo $row['ALUMNI_NAME']; ?>"><br>
 Course Name:<input type="text"  id="course" name="course" value="<?php echo $row['COURSE_NAME']; ?>"><br>
 CGPA:<input type="text"  id="marks" name="marks"value="<?php echo $row['CGPA']; ?>"><br>
 </fieldset>
 <fieldset>
 <legend>Contact</legend>
 Contact Number<input type="text"  id="num" name="num" value="<?php echo $row['PHONE_NUMBER']; ?>"><br>
 Email<input type="text"  id="email" name="email" value="<?php echo $row['EMAIL']; ?>"><br>
 </fieldset>
 <fieldset>
 <legend>Employment Information</legend>
 Emp_Id:<input type="text"  id="emp" name="emp"  value="<?php echo $row1['EMP_ID']; ?>"><br>
 Job Title:<input type="text"  id="job" name="job"  value="<?php echo $row1['JOB_POSITION']; ?>"><br>
 Company Name:<input type="text"  id="company" name="company" value="<?php echo $row1['COMPANY_NAME']; ?>"><br>
 Salary:<input type="text" id="salary" name="salary"  value="<?php echo $row1['SALARY']; ?>"><br>
 Start_Time:<input type="text" id="start" name="start"  value="<?php echo $row1['START_TIME']; ?>"><br>
 End_Time:<input type="text" id="end" name="end"  value="<?php echo $row1['END_TIME']; ?>"><br>
 </fieldset>
 <fieldset>
 <legend>Current Address</legend>
  City:<input type="text" id="city" name="city"  value="<?php echo $row1['CITY']; ?>"><br>
 </fieldset>
 <input type="Submit"  id="submit" name="submit" value= "submit"><br>  
</form>
</div>

</body>
</html>