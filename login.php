<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>login form</title>
<!-- custom css file link -->
<link rel="stylesheet" href="css/style1.css">
<!-- validate script -->
<script>
function validateform()
{
var e=document.getElementById('uname').value;
var p=document.getElementById('password').value;
if(e=="")
{
alert("username should not be empty");
return false;
}
if(p=="")
{
alert("Password should not be empty");
return false;
}
}
</script>
<!-- end validate script -->
</head>
<body>
<div class="form-container">
<form action="l_form.php" method="post">
<h2> <center> LOGIN NOW </center>  </h2>
<input type="text" name="uname" placeholder="enter your username" id
="uname">
<input type="password" name="password" placeholder="enter your password"
id ="password">
<center>
<input type="submit" name="submit" value="login" class="button"
onclick="validateform()"> </center>
<p>don't have an account? <a href="register.php">register
now</a></p>
</form>
</div>
</body>
</html>