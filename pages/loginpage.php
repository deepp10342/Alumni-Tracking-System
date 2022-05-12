<html>
	<head>
		<title>website</title>
	<link rel="stylesheet" type="text/css" href="../style/style1.css" />	
	</head>
	<body>
	<div class="main">
	
	</div>
	<div class="div1">

		<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="student.php">StudentDashboard</a></li>
  <li><a href="loginpage.php">Login</a></li>
  </ul>
 
  </div>
 
   <div id="form_wrapper">
    <div id="form_left">
	<form action="login.php" method="post">
      <img src="../images/avtar.jpg" alt="computer icon" />
    </div>
    <div id="form_right">
      <h1>Admin Login</h1>
      <div class="input_container">
        <input placeholder="Username"type="user" name="User"id="User"class="input_field"/>
      </div>
      <div class="input_container">
        <input placeholder="Password"type="password" name="Password"id="field_password"class="input_field"/>
      </div>
      <input type="submit" name="submit" value="Login"id="submit"class="input_field"/>
    </div>
  </div>

 </body>
</html>
