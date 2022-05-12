<?php

$conn=oci_connect('lovedeep','12345','localhost/XE');
if(!$conn)
{
	$m=oci_error();
	trigger_error(htmlentities($m['message'],ENT_QUTOES),E_USER_ERROR);
}
else
{
}

?>