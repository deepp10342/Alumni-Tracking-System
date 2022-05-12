<?php
session_start();
include_once "connect.php";
$query="SELECT * FROM Alumni WHERE PUPREG_ID='" . $_GET['PUPREG_Id'] . "'";
$result=oci_parse($conn,$query);
oci_execute($result);
$row=oci_fetch_array($result);
?>
<html>
	<head>
		<title>Student Employment</title>
<link rel="stylesheet" type="text/css" href="../style/layout.css" />
</head>
	<body>
		<div class="main">
	
	</div>
	
      <div class="content">
<form  action="infoaddemployment.php" method="post">
Registration No:<input type="text"  id="reg" name="reg" value="<?php echo $_SESSION['reg']; ?>"><br>
<fieldset>
 <legend>Employment Information</legend>
 Emp_Id:<input type="text"  id="emp" name="emp" ><br>
 Job Title:<input type="text"  id="job" name="job"><br>
 Company Name:<input type="text"  id="company" name="company"><br>
 Salary:<input type="text" id="salary" name="salary"><br>
 Start_Time:<input type="text" id="start" name="start"><br>
 End_Time:<input type="text" id="end" name="end"><br>
 </fieldset>
 <fieldset>
 <legend>Current Address</legend>
  City:<input type="text" id="city" name="city" ><br>
 State:<input type="text" id="state" name="state"><br>
 Pincode:<input type="text" id="pin" name="pin"><br>
 </fieldset>
 <input type="Submit"  id="submit" name="submit" value= "submit"><br>  
</form>
</div>

   
 
  </body>
  </html>
