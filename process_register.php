<?php
session_start();
require_once("connect.php");

if(isset($_POST["submit"]))
{

    $firstname=$_POST["fname"];
    $lastname=$_POST["lname"];
    $email=$_POST["emailAddress"];
    $password=$_POST["pass"];
    $password2=$_POST["cpass"];
   

    $sql_insert="INSERT INTO users(firstname,lastname,email,userpassword) VALUES('$firstname','$lastname','$email','$password')";
    $results=$conn->query($sql_insert);
    $_SESSION['message']="Account created successfully";
    header("location:pages/login.php");
     
}

if ($password!== $password2) {
    die("Password and Confirm password should match!");   
}


$sql_check="SELECT * FROM users WHERE email = '$email' LIMIT 1";

$results=$conn->query($sql_check);
$user=$results->fetch_assoc();

if($user){
    
    if($user['email']==$email)
    {
        die("Email already exists");
    }
}


if($conn->query($sql_insert)==true)
{
    echo "Data inserted successfully";
}
else{
    echo "Error in inserting data".$conn->error;
}

?>