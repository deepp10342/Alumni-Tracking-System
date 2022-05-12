<?php
include_once 'connect.php';  
$query = "DELETE FROM Course WHERE COURSE_ID = '".$_GET["COURSE_Id"]."' ";  
$stid = oci_parse($conn,$query);  
$r = oci_execute($stid);  
if($r)  
{  
oci_commit($conn);
        
    echo '<script>alert("Data deleted Successfully");
	window.location="coursedelete.php";
	</script>';  
}  

else  
{   
    echo '<script>alert("error deleted");
	</script>';  
 
}   
  
?>