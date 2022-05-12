<?php

include_once "connect.php";
$query="SELECT * FROM Alumni WHERE PUPREG_ID='" . $_GET['PUPREG_Id'] . "'";
$result=oci_parse($conn,$query);
oci_execute($result);
$row=oci_fetch_array($result);
?>
<html>
	<head>
		<title>Student Unemployment</title>
<link rel="stylesheet" type="text/css" href="../style/layout.css" />
</head>
	<body>
		<div class="main">
	
	</div>
	
           <div class="content">
<form  action="infoaddunemployment.php" method="post">
<br><br>
Registration No:<input type="text"  id="reg" name="reg" value="<?php echo $row['PUPREG_ID']; ?>"><br>
<fieldset>
 <legend>UnEmployment Information</legend>
 <br>
 if never employed,what is reason why you are not yet employed:<input type="text"  id="emp" name="emp" ><br>
 Have you been seeking for job?:<input type="radio"  id="rd" name="rd" value="YES" >Yes <input type="radio"  id="rd" name="rd" value="NO">No<br>
 Since MCA, what have you been doing?:<input type="text"  id="do" name="do"><br>
 How did you finance your living?:<input type="text" id="salary" name="salary"><br>
 Do you still desire to look for an employment?:<input type="radio" id="ro" name="ro" value="YES">Yes<input type="radio" id="ro" name="ro" Value ="NO">No<br>
 
</fieldset>
  <input type="Submit"  id="submit" name="submit" value= "submit"><br>  
</form> 
 
  </body>
  </html>
