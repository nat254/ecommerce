<?php
// include Function  file
include_once('function.php');
// Object creation
$uemail=new DB_con();
// Getting Post value
$email= $_POST["emailAddress"];	
// Calling function
$sql=$uemail->emailAvailability($email);
$num=mysqli_num_rows($sql);
if($num > 0)
{
echo "<span style='color:red'> Email already associated with another account .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Email available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
?>