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
    <title>course details</title> 
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
        <h1>Course Details</h1> 
        <table class="w3-table-all"> 
            <tr> 
                <th>course_id</th> 
                <th>course_name</th> 
                <th>course_duration</th> 
                <th>Department</th> 
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
</table> 
    </section> 
</body> 
  
</html> 