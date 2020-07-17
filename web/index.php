<!DOCTYPE html>
<html>
<head>
<title>My hao</title>
<!--Custom Theme files-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Register Login Widget template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login Signup Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Jura:400,300,500,600' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
</head>
<body>
<h1>Register to My Hao</h1>
<!-- main -->
<div class="main">
<!--login-profile-->

<!--login-profile-->
<!--signin-form-->
<div class="w3">
<div class="signin-form profile">
<h3>Login</h3>

<div class="login-form">
<form action="../login.php" method="post">
<input type="email" name="email" placeholder="E-mail" required="">
<input type="password" name="password" placeholder="Password" required="">
<div class="tp">
<input type="submit" value="LOGIN NOW">
</div>
</form>
<?php if (isset($_GET['unlogin'])): ?>
<p style="color: red">incorrect details try again</p>
<?php endif ?>
</div>

<p><a href="#"> Don't have an account?</a></p>
</div>
</div>
<div class="agile">
<div class="signin-form profile">
<h3>Register</h3>

<div class="login-form">
<form action="../register.php" method="post">
<input type="email" name="email" placeholder="E-mail" required="">
<input type="text" name="name" placeholder="Username" required="">
<input type="text" placeholder="ID/PASSPORT" name="id">
<input type="password" name="password" placeholder="Password" required="">

<input type="submit" value="REGISTER">
</form>
</div>
<p><a href="#"> By clicking register, I agree to your terms</a></p>
<?php if (isset($_GET['already'])): ?>
<p style="color: red"> email already exists</p>
<?php endif ?>
</div>
</div>
<div class="clear"></div>
<!--//signin-form-->
</div>
<div class="copyright">
<p> &copy; 2020 Register Login Widget </p>
</div>
</body>
</html>