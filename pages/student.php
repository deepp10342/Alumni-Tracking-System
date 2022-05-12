
<html>
	<head>
		<title>Student</title>
<link rel="stylesheet" type="text/css" href="../style/style1.css" />
<style>
.login{  
        width: 382px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 80px;  
        background-color:#BDBDBD;  
        border-radius: 15px ; 
		
          
}  
h2{  
    text-align: center;  
    color:black;  
    padding:5px;  
	font: 'Open Sans', sans-serif;
	
}    
#Uname{  
    width: 200px;  
    height: 30px;  
    border: 1px soild #ccc;  
    border-radius: 3px;  
    padding-left: 8px;  
}  
#Pass{  
    width: 200px;  
    height: 30px;  
    border: 1px soild #ccc;  
    border-radius: 3px;  
    padding-left: 8px;  
      
}  
#log{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;    
}  

a{  
    float:center-left;
}	</style>
	</head>
	<body>
		<div class="main">
	
	</div>
	<div class="div1">
		<ul>
  <li><a  href="index.php">Home</a></li>
  <li><a href="about.php" >About</a></li>
  <li><a href="student.php">StudentDashboard</a></li>
  <li><a href="loginpage.php">Login</a></li>
  </ul>
  </div>
      
    <div class="login"> 
<h1>Sign Up</h1>	<br>
    <form id="login" method="post" action="signup.php">    
	
       User Name  <input type="text" name="Uname" id="Uname" placeholder="Username" required>    
        <br><br>    
       Password   <input type="Password" name="Pass" id="Pass" placeholder="Password" required>    
        <br><br> 
Confirm Password <input type="Password" name="Pass1" id="Pass" placeholder="Password" required>		
       <br><br> 
	   <input type="submit" name="submit1" id="submit1" value="submit">       
        <br><br>    
        Already have an account? <a href="studentlogin.php">Login here.</a> 
    </form>     
</div>   
 
  </body>
  </html>
