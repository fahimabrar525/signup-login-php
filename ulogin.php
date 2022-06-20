<?php
$error="";
if(isset($_GET["error"])){
	$error="Invalid username or password !";
	//echo "<span style='color:#ff1717;   position: relative;
    //top: 210px;left: 555px; font-weight:bold;'>".$_GET["error"]."</span>";
}
else{
	$error="";
}
session_start();
?>
<html>
<head>
<title>User Login Form</title>
<link rel="stylesheet" href="Login.css"/>
</head>
<body>
<div class="loginbox">
<span class="err"><?php echo $error;?></span>
<img src="login icon.png" class="login_icon">
<h1 class="login_here">Login Here</h1>
<form action="validate.php" method="get">
<p>Username</p>
<input type="text" name="username" placeholder="Enter Username">
<p>Password</p>
<input type="password" name="password"placeholder="Enter Password">
<input type="submit" value="Login">
<a href="#"> Lost your password?</a><br>
<a href="Register_page.php"target="_blank"> Don't have an account?</a>
</form>
</div>
</body>

</html>