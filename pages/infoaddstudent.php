<?php
session_start();
include_once "connect.php";
$username=$_POST["Uname"];
$reg=$_POST["reg"];
 $name= $_POST["full"];
 $course=$_POST["course"];
  $marks=$_POST["marks"];
  $city=$_POST["city"];
  $state=$_POST["state"];
  $mobile=$_POST["num"];
  $id=$_POST["email"];
  $country=$_POST["country"];
  $pincode=$_POST["pin"];
  if($reg !=''||$name !=''){
  $stid=oci_parse($conn,"insert into Alumni(Username,Alumni_Name,PUPREG_ID,Course_Name,CGPA,City,State,Phone_Number,Email,Country,Pincode)
  values('$username','$name','$reg','$course','$marks','$city','$state','$mobile','$id','$country','$pincode')");
    oci_execute($stid);
		 echo '<script>alert("row inserted") </script>';
		 oci_commit($conn);
  }
  else
  {
	  echo "<script> alert('error')</script>";
  }
 ?>
 <?php
 $_SESSION['reg']=$reg;
 ?>
 <html>
 <head>
 <title>dialog</title>
 </head>
 <body>
 
 <div>  
<dialog id="myFirstDialog" style="width:50%;background-color:white;border:3px soild black;">  
<p> you are employed or unemployed click on :  
<a href="addemployment.php?PUPREG_Id=<?php echo $reg;?>">Employment</a>  or  <a href="unemployment.php?PUPREG_Id=<?php echo $reg;?>">Unemployment</a> </p>  

<button id="hide">Close</button>  
</dialog>  
<button id="show">next</button>  
</div>  
<script type="text/JavaScript">  
(function() {    

    var dialog = document.getElementById('myFirstDialog');    
    document.getElementById('show').onclick = function() {    
        dialog.show();    
    };    
	
    document.getElementById('hide').onclick = function() {    
        dialog.close();    
    };    	
})();   
</script> 
</body>
</html>