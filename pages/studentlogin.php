
<html>
	<head>
		<title>Student login page</title>
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
    color: black;
font: 'Open Sans', sans-serif;
	 font-size: 20px;
    font-weight: normal;	
    padding:5px;  
}    
#Uname{  
    width: 200px;  
    height: 30px;  
    border: 1px solid #ccc;  
    border-radius: 3px;  
    padding-left: 8px;  
}  
#Pass{  
    width: 200px;  
    height: 30px;  
    border: 1px solid #ccc;
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
<h2>Login Page</h2>	<br>
    <form id="login" method="post" action="loginstu.php">    
       User Name  <input type="text" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
       Password   <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br> 
		<input type="submit" name="log" id="log" value="Log In Here">           
        <br><br>    
        create new account <a href="student.php">Sign up.</a>
    </form>     
</div>   
 
  </body>
  </html>
