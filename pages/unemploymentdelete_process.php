
<?php
	include_once 'connect.php';  
$query = "DELETE from unemployment WHERE PUPREG_ID='".$_GET["PUPREG_Id"]."'  ";  
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
	header('location:unemploymentdelete.php');
} 
function_alert("Data deleted Successfully !"); 
 
} 

else  
{  
oci_rollback($conn); //*** RollBack Transaction ***//  
$e = oci_error($stid);  
echo " <srcipt> alert(' Error Delete [".$e['message']."]') </script>";  
}  
?>
