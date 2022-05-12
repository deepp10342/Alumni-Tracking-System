<?php

include_once "connect.php";
$query = 'select Alumni.PUPREG_ID,Alumni.Alumni_Name,Alumni.CGPA,Alumni.Course_Name,Alumni.Email,Alumni.Phone_Number,Employment.Emp_Id,Employment.Job_Position,Employment.Company_Name,Employment.Salary,Employment.City,Employment.Start_Time,Employment.End_Time from Alumni,Employment where Alumni.PUPREG_ID=Employment.PUPREG_Id';
$stid = oci_parse($conn, $query);
$r = oci_execute($stid);
oci_commit($conn);
?>
<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <title>Alumni details</title> 
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
    <section> 
        <h1>Alumni Details</h1> 
        <table class="w3-table-all"> 
            <tr> 
                
         <th>PUPREG_Id</th>
<th>Full Name</th>
<th>CGPA</th>
<th> Course Name</th>
<th>Email</th>
<th>Contact_Number</th>
<th>Emp_Id</th>
<th>Job_Position</th>
<th>Company_Name</th>
<th>Salary</th>
<th>Current_City</th>
<th>Start_Time</th>
<th>End_time</th>
            </tr> 
			<?php
			while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
   print '<tr>';
   foreach ($row as $item) {
      print '<td>'.($item!==null ?htmlentities($item,ENT_QUOTES):'&nbsp ').'</td>';
   }
  print '</tr>';
}
?>