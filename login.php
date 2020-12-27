
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mood Changer</title>
</head>

<body>

<link rel="stylesheet" href="login.css">
<div class="container">
<center><h1>Login</h1>
<?php
    require('db_connection.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['name'])) {
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        $email = mysqli_real_escape_string($con, $email);
        $pwd = stripslashes($_REQUEST['pwd']);
        $pwd = mysqli_real_escape_string($con, $pwd);
        // Check user is exist in the database
        $query    = "SELECT * FROM `registration` WHERE email='$email'
                     AND pwd='$pwd'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            // Redirect to user dashboard page
            header("Location: playlist.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Email/Password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
<form name="login" action="playlist.php" method="post"  >

<label for="email"><b>Email:-</b></label><br>
<input type="email" name="email" id="email" placeholder="Email" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="required" />
<br>
<label for="pwd"><b>Password:-</b></label><br>
<input type="password" name="pwd" id="pwd" placeholder="Password" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required="required" />
<br>
<input type="reset"  class="registerbtn" name="reset" value="Reset" />
<button type="submit" class="registerbtn">Login</button>
</form>
<?php 
	}
?>
</div>
 </center>
</body>
</html>

