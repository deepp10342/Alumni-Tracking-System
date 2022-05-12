<html>
<head>
<title>AddCourse</title>
<link rel="stylesheet" type="text/css" href="../style/layout.css" />
</head>
<body>
<div class="main">
<h1> </h1>
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
<div class="content">
 <form  action="infoaddcourse.php" method="post">
 <fieldset>
 <legend>Course Information</legend>
 Course Id:<input type="text" id="cid" name="cid" required=""><br>
 Course Name:<input type="text" id="course" name="course" required=""><br>
 Duration:<input type="text" id="duration" name="duration" required=""><br>
 Dept Name:<input type="text" id="dname" name="dname" required=""><br>
 </fieldset>
 <input type="Submit" name="submit" value= "submit"><br>  
</form>
</div>

</body>
</html>