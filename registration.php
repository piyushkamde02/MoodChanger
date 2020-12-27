<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mood Changer</title>
</head>


<body>

<link rel="stylesheet" href="registration.css">
<div class="container">
<center><h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
<?php
$con = mysqli_connect('127.0.0.1','root','');
  if(!$con)
  {
    echo "$not connected to server";
  }
  if(!mysqli_select_db($con,'moodchanger'))
  {
    echo "Database not selected";
  }
    //require('db_connection.php');
    // When form submitted, insert values into the database.
    if (isset($_POST['name'])) {
        // removes backslashes
      $name = $_POST['name'];
      $phno = $_POST['phno'];
      $email = $_POST['email'];
      $pwd = $_POST['pwd'];
      $address = $_POST['address'];
     /*   $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
        $name = mysqli_real_escape_string($con, $name);
		$phno    = stripslashes($_REQUEST['phno']);
        $phno    = mysqli_real_escape_string($con, $phno);
		$email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $pwd = stripslashes($_REQUEST['pwd']);
        $pwd = mysqli_real_escape_string($con, $pwd);
		$address = stripslashes($_REQUEST['address']);
        $address = mysqli_real_escape_string($con, $address);*/
        $query    = "INSERT into registration(name, phno, email,pwd,address)
                     VALUES ('$name','$phno','$email', '$pwd', '$address')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } 
?>

</center>
</div>
</body>
</html>
