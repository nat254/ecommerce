<?php
define ('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'avechi');

class DB_con{
    function __construct()
    {
        $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
        $this->dbh=$con;

        //checking connection
        if(mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL database: " . mysqli_connect_error(); 
        }
    }

    //email availability
    public function emailAvailability($email)
    {
        $result = mysqli_query($this->dbh,"select email FROM tbl_users WHERE email='$email");
        return $result;
    }

    //registration
    public function registration($fname,$lname,$email,$password,$gender)
    {
        $results = mysqli_query($this->dbh,"insert into tbl_users(first_name,last_name,email,password,gender) values('$fname','$lname','$email','$password','$gender')");
        return $results;
    }

    //sign in
    public function signIn($email)
    {
        $result=mysqli_query($this->dbh,"select user_id,first_name,last_name from tbl_users where email='$email'");
        return $result;
    }

    public function profile($userID)
    {
      $query= mysqli_query($this->dbh,"select * from tbl_users where user_id='$userID'");
      $result=mysqli_fetch_array($query);
      return $result;
    }

    public function editProfile($userID,$firstname,$lastname,$email,$gender)
    {
        $query= mysqli_query($this->dbh,"update tbl_users set first_name = '$firstname', last_name = '$lastname', email = '$email', gender = '$gender' where user_id='$userID'");
        return $query;
    }
}
?>