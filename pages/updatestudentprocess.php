<?php
session_start();
include_once "connect.php";
$query = "select Alumni.PUPREG_ID,Alumni.Alumni_Name,Alumni.CGPA,Alumni.Course_Name,Alumni.Email,Alumni.Phone_Number,Employment.Emp_Id,Employment.Job_Position,Employment.Company_Name,Employment.Salary,Employment.City,Employment.Start_Time,Employment.End_Time from Alumni,Employment where Alumni.PUPREG_ID=Employment.PUPREG_Id and Alumni.username='".$_SESSION['variable']."' ";
$stid = oci_parse($conn, $query);
$r = oci_execute($stid);
?>
<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <title>Alumni updation details</title> 
	<link rel="stylesheet" type="text/css" href="../style/layout.css" />
   
</head> 
  
<body> 
<div class="main">

</div>
<div class="sidebar">

    
  <a href="studentlogin.php">Log Out</a>
</div>

        <h1>Alumni Details</h1> 
       <table class="w3-table-all"> 
            <tr> 
                       
 <th>PUPREG_Id</th>
<th>Full Name</th>
<th>CGPA</th>
<th>Course_Name</th>
<th>Contact_Number</th>
<th>Email</th>
<th>Emp_Id</th>
<th>Job_Title</th>
<th>Comapny Name</th>
<th>Salary</th>
<th>Start_Time</th>
<th>End_Time</th>
<th>Current_City</th>
<th>Action</th>
 	</tr>
<?php  
$i=0;
while($objResult=oci_fetch_array($stid,OCI_RETURN_NULLS+OCI_ASSOC))  
{  
?>
<tr>
<td><?php echo $objResult["PUPREG_ID"];?></td>
<td><?php echo $objResult["ALUMNI_NAME"];?></td>
<td><?php echo $objResult["CGPA"];?></td>
<td><?php echo $objResult["COURSE_NAME"];?></td>
<td><?php echo $objResult["PHONE_NUMBER"];?></td>
<td><?php echo $objResult["EMAIL"];?></td>
<td><?php echo $objResult["EMP_ID"];?></td>
<td><?php echo $objResult["JOB_POSITION"];?></td>
<td><?php echo $objResult["COMPANY_NAME"];?></td>
<td><?php echo $objResult["SALARY"];?></td>
<td><?php echo $objResult["START_TIME"];?></td>
<td><?php echo $objResult["END_TIME"];?></td>
<td><?php echo $objResult["CITY"];?></td>
<td><a href="updateemployment.php?PUPREG_Id=<?php echo $objResult["PUPREG_ID"];?>">Edit</a></td>
</tr>
<?php
}
?>

	</table>
</body>
</html>