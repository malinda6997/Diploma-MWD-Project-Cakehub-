

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>register form</title>
<!-- custom css file link -->

<link rel="stylesheet" href="css/style1.css"> 

<!-- validate script -->

<script>
function validateform()
{
var a=document.getElementById('uname').value;
var b=document.getElementById('email').value;
var c=document.getElementById('phone').value;
var d=document.getElementById('password').value;
var e=document.getElementById('cpassword').value;
if(a=="")
{
alert("username should not be empty");
return false;
}
if(b=="")
{
alert("email should not be empty");
return false;
}
if(c=="")
{
alert("uphone no should not be empty");
return false;
}
if(d=="")
{
alert("Password should not be empty");
return false;
}
if(d != e)
{
alert("Passwords did not match");
return false;
}
}
</script>
<!-- end validate script -->
</head>
<body>
<div class="form-container">
<form action="r_form.php" method="post">
<h2>  <center> REGISTER NOW </center></h2>
<input type="text" name="uname" placeholder="enter your name"
id="uname">
<input type="email" name="email" placeholder="enter your email"
id="email">
<input type="number" name="phone" placeholder="enter your phone no"
id="phone">
<input type="password" name="password" placeholder="enter your
password" id="password">
<input type="password" placeholder="confirm your password"
name="cpassword" id="cpassword">
<center>
<input type="submit" name="submit" value="register now" class="button" 
onclick="validateform()"> </center>

<p>already have an account? <a href="login.php">login now</a></p>

</form>
</div>
</body>
</html>