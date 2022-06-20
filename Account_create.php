<?php
session_start();
if(isset($_SESSION["check"]) && $_SESSION["check"]=="success"){
echo "<h1 class='account_c'><center>Account created successfully</center></h1>";
}
else{
	header("Location:ulogin.php");
}
?>
<html>
<link rel="stylesheet" href="account_create.css"/>
<body>
<form action="us_logout.php">
<input class="log_out" type="submit" value="Logout">
</body>
</html>