
<html>
<head>
<title>dashboard</title>
<link rel="stylesheet" type="text/css" href="../style/layout.css" />
</head>
<body>
<div class="main">

</div>
<div class="sidebar">
<ul>
 <li> <a href="index.php">Home</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="dashboard.php">Dashboard</a></li>

     <li> <a href="addcourse.php"> Add Course</a></li>
    <li><a href="updatecourseprocess.php">Update Course</a></li>
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
  
  

      <li><a href="loginpage.php"> Log Out</a></li>
	  </ul>
</div>

<!-- Page content -->
<div class="content">
 <h1> <marquee direction="left"> welcome to Alumni Information .......</marquee></h1>

  <img class="mySlides" src="../images/background/2.jpg" width="100%" >
 
</div>
</body>
</html>