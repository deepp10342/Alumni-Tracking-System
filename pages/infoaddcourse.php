<?php
include_once "connect.php";
if(isset($_POST["submit"]))
if((!empty($_POST["cid"]))&&(!empty($_POST["course"]))&&(!empty($_POST["duration"]))&&(!empty($_POST["dname"])))
{
$id=$_POST["cid"];
$course_N=$_POST["course"];
$duration=$_POST["duration"];
$dept= $_POST["dname"];
$sid= oci_parse($conn,"INSERT INTO Course(Course_ID,Course__name,Course_duration,Dept_Name)VALUES(:cid, :course, :dur, :dept1)");

oci_bind_by_name($sid, ":cid",$id);
oci_bind_by_name($sid, ":course",$course_N);
oci_bind_by_name($sid, ":dur",$duration);
oci_bind_by_name($sid, ":dept1",$dept);
 oci_execute($sid);
echo '<script> window.location="addcourse.php"; alert("row inserted") </script>';
}
else
{
	'<script>  window.location="addcourse.php" ;alert("error row inserted")</script>';
}

?>