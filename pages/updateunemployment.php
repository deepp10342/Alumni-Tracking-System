<?php
include_once 'connect.php';
if(count($_POST)>0) {
	$query = oci_parse($conn, "UPDATE Alumni SET  ALUMNI_NAME='" . $_POST["full"]. "',COURSE_NAME='" . $_POST["course"]. "' ,CGPA='" . $_POST["marks"] . "',PHONE_NUMBER='".$_POST["num"]."',EMAIL='".$_POST["email"]."' WHERE PUPREG_ID='" . $_POST['reg'] . "'");
	$result = oci_execute($query, OCI_DEFAULT);  
	$query=oci_parse($conn,"UPDATE unemployment SET EMPLOYED='". $_POST["emp"]."',DOINGJOB='".$_POST["rd"]."',MCA='".$_POST["do"]."',FINANCE='".$_POST["salary"]."',DESIRE='".$_POST["ro"]."' WHERE PUPREG_ID='" . $_POST['reg'] . "'" );
	$result = oci_execute($query, OCI_DEFAULT); 
	if($result)  
	{  
		oci_commit($conn);
		function function_alert($message) {  
    echo "<script>alert('$message');
	</script>"; 
	header('location:updateunemploymentprocess.php');
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
$query="SELECT * FROM unemployment WHERE PUPREG_ID='" . $_GET['PUPREG_Id'] . "'";
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
 Registration No:<input type="text"  id="reg" name="reg" value="<?php echo $row['PUPREG_ID'];?>"<br>
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
 <legend>UnEmployment Information</legend>
 <br>
 if never employed,what is reason why you are not yet employed:<input type="text"  id="emp" name="emp" value="<?php echo $row1['EMPLOYED']; ?>"><br>
 Have you been seeking for job?:<input type="text"  id="rd" name="rd" value="<?php echo $row1['DOINGJOB']; ?>"><br>
 Since MCA, what have you been doing?:<input type="text"  id="do" name="do" value="<?php echo $row1['MCA']; ?>"><br>
 How did you finance your living?:<input type="text" id="salary" name="salary" value="<?php echo $row1['FINANCE']; ?>" ><br>
 Do you still desire to look for an employment?:<input type="text" id="ro" name="ro" value="<?php echo $row1['DESIRE']; ?>"<br> 
</fieldset>
 <input type="Submit"  id="submit" name="submit" value= "submit"><br>

<p>if you are employed then click on here to register in employed </p><a href="updateaddemployment.php?PUPREG_Id=<?php echo $row["PUPREG_ID"];?>">EMPLOYED</a>
</form>
</div>

</body>
</html>