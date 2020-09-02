
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Online Quiz</title>

 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script> 
</head>

<body style="background:lightgrey;">
<div class="header">
<div class="row">
<h1 style="text-align:center"> Welcome to Online Quiz System!</h1>
<p style="text-align:center">Please do login for proceeding into your account!</p>

<form  action="login.php?q=index.php" method="POST">
<fieldset>
<h3><span>Student Log In</span></h3>
<div>
  <label for="email"></label>  
  <span>E-mail : </span><input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
</div>
<label for="password"></label>
<span>Password : </span><input id="password" name="password" placeholder="Enter your Password" type="password"><br>
<button type="submit">Log in</button>
</fieldset>
</form>
</div>

  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>
<h3><span>Registration</span></h3>
  <label for="name"></label>  
  <span>Name : </span><input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text"><br>
    
  <label for="gender"></label>
  <span>Gender : </span><select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
  <option value="Male">Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option> </select><br>

  <label for="name"></label>  
  <span>College : </span><input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text"><br>
    
  <label for="email"></label>
  <span>Email : </span><input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email"><br>

  <label for="mob"></label>  
  <span>Mobile Number : </span><input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number"><br>
    
  <label for="password"></label>
  <span>Password : </span><input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password"><br>

  <label for="cpassword"></label>
  <span>Confirm Password :</span><input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password"><br>
  
<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>

<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" class="sub" value="Sign Up" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form>

<fieldset>
<div id="login">
<h4><span>ADMIN  LOGIN</span></h4>

<form role="form" method="post" action="admin.php?q=index.php">

<span>Admin ID : </span><input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/><br>

<span>Password : </span><input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/><br>

<br><input type="submit" name="login" value="Login"/>
</form>
</div>
</fieldset><br>
    
<fieldset>
<div id="login">
<h4><span>LECTURER  LOGIN</span></h4>

<form role="form" method="post" action="register.php?q=index.php">

<span>Lecturer ID : </span><input type="text" name="uname" maxlength="20"  placeholder="Lecturer user id" class="form-control"/><br>

<span>Password : </span><input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/><br>

<br><input type="submit" name="login" value="Login"/>
</form>
</div>
</fieldset>
    
       

</div>
</body> 
</html>
