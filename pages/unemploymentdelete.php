<?php

include_once "connect.php";
$query = 'select  Alumni.PUPREG_ID,Alumni.Alumni_Name,Alumni.CGPA,Alumni.Course_Name,Alumni.City,Alumni.Email,Alumni.Phone_Number,unemployment.employed,unemployment.doingjob,unemployment.mca,unemployment.finance,unemployment.desire from Alumni,unemployment where Alumni.PUPREG_ID=unemployment.PUPREG_Id';
$stid = oci_parse($conn, $query);
$r = oci_execute($stid);
?>
<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <title>Alumni Deletion details</title> 
	<link rel="stylesheet" type="text/css" href="../style/layout.css" />
   
</head> 
  
<body> 
<div class="main">
</div>
<div class="sidebar">
  <a href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="dashboard.php">Dashboard</a>

      <a href="addcourse.php">Add Course</a>
    <a href="updatecourseprocess.php">Update Course</a>
   <div class="dropdown">
    <button class="button"> Delete Alumni Details</button>
    <div class="dropdown-content">
       <a href="employmentdelete.php"> Employment Student</a>
	  <a href="unemploymentdelete.php"> Unemployment Student</a>
      <a href="coursedelete.php">Course</a>
    </div>
  </div>

     
   
  <div class="dropdown">
    <button class="button">Alumni Information</button>
    <div class="dropdown-content">
      <a href="viewemployment.php">Employment Student</a>
      <a href="viewunemployment.php">Unemployment Student</a>
	  <a href="viewcourse.php">Course</a>
    </div>
  </div>
  
   
 
   <a href="loginpage.php">Log Out</a>
</div>

        <h1>Unemployment Student Details</h1> 
        <table class="w3-table-all"> 
            <tr> 
                       
  <th>PUPREG_Id</th>
<th>Full Name</th>
<th>CGPA</th>
<th>Course_Name</th>
<th>Contact_Number</th>
<th>Email</th>
<th>if never employed,what is reason why you are not yet employed</th>
<th> Have you been seeking for job?</th>
<th>Since MCA, what have you been doing?</th>
<th>How did you finance your living?</th>
<th>Do you still desire to look for an employment?</th>
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
<td><?php echo $objResult["COURSE_NAME"];?>
<td><?php echo $objResult["PHONE_NUMBER"];?></td>
<td><?php echo $objResult["EMAIL"];?></td>
<td><?php echo $objResult["EMPLOYED"];?></td>
<td><?php echo $objResult["DOINGJOB"];?></td>
<td><?php echo $objResult["MCA"];?></td>
<td><?php echo $objResult["FINANCE"];?></td>
<td><?php echo $objResult["DESIRE"];?></td>
<td><a href="unemploymentdelete_process.php?PUPREG_Id=<?php echo $objResult["PUPREG_ID"];?>">Delete</a></td>
</tr>
<?php
}
?>

	</table>
</body>
</html>