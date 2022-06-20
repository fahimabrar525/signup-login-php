
<?php
session_start();
if(isset($_SESSION["check"]) && $_SESSION["check"]=="success"){
	echo "<center><h1 class='fn'>Login Successful</h1></center> ";

}
else{
	header("Location:ulogin.php");
}
if(isset($_GET["u_name"])){
echo "<center><h1 class='wl'>Welcome </h1></center> ";
echo "<h1 class='usn'>".$_GET["u_name"]."</h1>";
}
?>
<html>
<link rel="stylesheet" href="home.css"/>
<body>
<form action="us_logout.php">
<input class="lo" type="submit" value="Logout">
</body>
</html>

