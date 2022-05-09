<?php
$conn=new mysqli("localhost","root","","avechi");

if($conn->connect_error)
{
    die("Not connected".$conn->connect_error);

}
?>