<?php
include_once 'connect.php';
if(count($_POST)>0) {
	$query = oci_parse($conn, "UPDATE Course SET  COURSE__NAME='" . $_POST["course"]. "',COURSE_DURATION='" . $_POST["duration"]. "' ,DEPT_NAME='" . $_POST["dname"] . "' WHERE COURSE_ID='" . $_POST['cid'] . "'");
	$result = oci_execute($query, OCI_DEFAULT);  
	if($result)  
	{  
		oci_commit($conn); 
    echo '<script>alert("Data update succefully");
	window.location="updatecourseprocess.php";
	</script>';  
 
} 
	else{
		echo '<script>alert("Data update succefully");
		</script>';  
	}
	
}

$query="SELECT * FROM Course WHERE COURSE_ID='" . $_GET['COURSE_Id'] . "'";
$result=oci_parse($conn,$query);
oci_execute($result);
$row=oci_fetch_array($result);
?>
<html>
<head>
<title>updatecourse</title>
<link rel="stylesheet" type="text/css" href="../style/layout.css" />
</head>
<body>
<div class="main">
</div>
<div class="sidebar">
 <a href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="dashboard.php">Dashboard</a>
 <a href="addcourse.php"> Add Course Details</a>
  <a href="updatecourseprocess.php"> update Course Details</a>
   
   <div class="dropdown">
    <button class="button"> Delete Alumni Details</button>
    <div class="dropdown-content">
      <a href="studentdelete.php">Student</a>
      <a href="coursedelete.php">Course</a>
    </div>
  </div>
 
  
      <a href="viewcourse.php"> view Course</a>
  
  
      <a href="loginpage.php"> Log Out</a>
</div>
<div class="content">
 <form  action="" method="post">
 <fieldset>
 <legend>Course Information</legend>
 Course Id:<input type="text" id="cid" name="cid" value="<?php echo $row['COURSE_ID']; ?>"  required><br>
 Course Name:<input type="text" id="course" name="course" value= "<?php echo $row['COURSE__NAME']; ?>" ><br>
 Duration:<input type="text" id="duration" name="duration" value="<?php echo $row['COURSE_DURATION']; ?>"><br>
 Dept Name:<input type="text" id="dname" name="dname" value="<?php echo $row['DEPT_NAME']; ?>"><br>
 </fieldset>
 <input type="Submit" name="submit" value= "submit"><br>  
</form>
</div>

</body>
</html>