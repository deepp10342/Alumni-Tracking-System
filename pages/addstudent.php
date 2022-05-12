<?php
session_start();
include_once "connect.php";
$query="select * from users where username='" . $_GET['Uname'] . "'";
$PRACTICE=oci_parse($conn,$query);
oci_execute($PRACTICE);
$row =oci_fetch_array($PRACTICE);
?>
<html>
<head>
<title>Addstudent</title>
<link rel="stylesheet" type="text/css" href="../style/layout.css" />
</head>
<body>
<div class="main">
</div>

<div class="content">
<form  action="infoaddstudent.php" method="post">
 User Name  <input type="text" name="Uname" id="Uname" value="<?php echo $_SESSION['variable']; ?>">    
 <fieldset>
 <legend>Personal Information</legend>
 Registration No:<input type="text"  id="reg" name="reg" required><br>
 Full Name:<input type="text"  id="full" name="full" required><br>
 Course Name:<input type="text"  id="course" name="course" required ><br>
 CGPA:<input type="text"  id="marks" name="marks" required><br>
 </fieldset>
 <fieldset>
 <legend>Home Address</legend>
  City:<input type="text" id="city" name="city" ><br>
 State:<input type="text" id="state" name="state"><br>
 country :<input type="text" id="country" name="country"><br>
 Pincode:<input type ="number" id="pin" name="pin"><br>
 </fieldset>
 <fieldset>
 <legend>Contact</legend>
 Contact Number<input type="text"  id="num" name="num" ><br>
 Email<input type="text"  id="email" name="email"><br>
 </fieldset>
 
 <input type="Submit"  id="submit" name="submit" value= "submit"><br>  
</form>
</div>

</body>
</html>