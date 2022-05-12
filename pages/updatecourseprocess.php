<?php

include_once "connect.php";
$query = 'select * from Course';
$stid = oci_parse($conn, $query);
$r = oci_execute($stid);
?>
<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <title>course update</title> 
	<link rel="stylesheet" type="text/css" href="../style/layout.css" />
   
</head>  
<body> 
<div class="main">
</div>
<div class="sidebar">
  <a href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="dashboard.php">Dashboard</a>
 <a href="addcourse.php"> Add Course</a>
  <a href="updatecourseprocess.php"> update Course</a>
   
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
 
  
  
      <a href="loginpage.php"> Log Out</a>
</div>
    <section> 
        <h1>Course Details</h1> 
        <table class="w3-table-all"> 
            <tr> 
                <th>Course_Id</th> 
                <th>Course_Name</th> 
                <th>Course_Duration</th> 
                <th>Department</th> 
				<th>Action</th>
            </tr> 
			<?php  
$i=0;
while($objResult=oci_fetch_array($stid,OCI_RETURN_NULLS+OCI_ASSOC))  
{  
?>
<tr>
<td><?php echo $objResult["COURSE_ID"];?></td>
<td><?php echo $objResult["COURSE__NAME"];?></td>
<td><?php echo $objResult["COURSE_DURATION"];?></td>
<td><?php echo $objResult["DEPT_NAME"];?></td>
<td><a href="updationcourse.php?COURSE_Id=<?php echo $objResult["COURSE_ID"]; ?>">Edit</a></td>
</tr>
<?php
}
?>

	</table>
</body>
</html>