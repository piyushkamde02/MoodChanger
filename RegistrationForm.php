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
<form name="registration" action="registration.php" method="post"  >
<label for="name"><b>Name:-</b></label><br>
<input type="text" name="name" id="name"   placeholder="First Name" autocomplete="off" size="30" maxlength="30" required="required">
<br>
<label for="phno"><b>Phone Number:-</b></label><br>
<input type="tel" id="phno" name="phno" placeholder="Phone Number" autocomplete="off" pattern="[0-9]{10}" maxlength="10" required="required" autofocus="autofocus" />
<br>
<label for="email"><b>Email:-</b></label><br>
<input type="email" name="email" id="email" placeholder="Email" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="required" />
<br>
<label for="pwd"><b>Password:-</b></label><br>
<input type="password" name="pwd" id="pwd" placeholder="Password" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required="required" />
<br>
<label for="address"><b>Address:-</b></label><br>
<input type="text" name="address" id="address" placeholder="Address" autocomplete="off" autofocus="autofocus">
<br>
<input type="submit" class="registerbtn" value="submit">
<input type="reset"  class="registerbtn" name="reset" value="Reset" />

</form>
</div>
 <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
 </center>
</body>
</html>
