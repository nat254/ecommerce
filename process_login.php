<?php
session_start();

require_once("connect.php");

// call the login() function if register_btn is clicked
if (isset($_POST['login'])) {
	login();
}

// LOGIN USER
function login(){
	global $conn, $email;
    $errors=[];

	// grap form values
	$email = $_POST['emailAddress'];
	$password = $_POST['password'];

	// make sure form is filled properly
	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		

		$query = "SELECT * FROM users WHERE email='$email' AND userpassword='$password' LIMIT 1";
		$results = mysqli_query($conn, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
               header("location:pages/index.php");
               exit();
                
            
		}else {
		array_push($errors, "Wrong email/password combination");
		echo "Details do not match";
		}

        
	}
}
?>