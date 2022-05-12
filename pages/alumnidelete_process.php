
<?php
	include_once 'connect.php';  
$query = "DELETE from Employment WHERE PUPREG_ID='".$_GET["PUPREG_Id"]."'  ";  
$stid = oci_parse($conn,$query);  
$r = oci_execute($stid); 
$query = "DELETE from Alumni WHERE PUPREG_ID='".$_GET["PUPREG_Id"]."'  ";  
$stid = oci_parse($conn,$query);  
$r = oci_execute($stid); 
if($r)  
{  
oci_commit($conn);//*** Commit Transaction ***//

function function_alert($message) { 
        
    echo "<script>alert('$message');
	
	</script>"; 
	header('location:employmentdelete.php');
} 
function_alert("Data deleted Successfully !"); 
 
} 

else  
{  
oci_rollback($conn); //*** RollBack Transaction ***//  
$e = oci_error($stid);  
echo "<script> alert('Error Delete [".$e['message']."]')</script>";  
}  
?>
