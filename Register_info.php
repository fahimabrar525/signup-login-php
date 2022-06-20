<?php

$first_name=$_GET["firstname"];
$last_name=$_GET["lastname"];
$user_name=$_GET["username"];
$user_pass=$_GET["password"];
$confirm_pass=$_GET["cpassword"];
$user_mail=$_GET["email"];
$b_month=$_GET["Month"];
$b_day=$_GET["day"];
$b_year=$_GET["year"];
$u_gender=$_GET["gd"];
$mobile_no=$_GET["phone"];
$u_country=$_GET["country"];

session_start();
$_SESSION["check"]="";

if ($first_name=="" || $last_name=="")
{
	header("Location:Register_page.php?error1=You must fill first and last name.");
}
elseif($user_name=="")
{
	header("Location:Register_page.php?error2=You can't leave username empty.");
}

elseif(strlen($user_name)<4)
{
	header("Location:Register_page.php?error3=Your username must have 4 characters.");
}


elseif(strlen($user_pass )<8)
{
	header("Location:Register_page.php?error4=Use at least 8 characters.");
}
elseif($user_pass !== $confirm_pass)
{
		header("Location:Register_page.php?error5=These passwords don't match.");
}

elseif($user_mail=="")
{
		header("Location:Register_page.php?error6=You can't leave it empty !");
}

elseif (!filter_var($user_mail,FILTER_VALIDATE_EMAIL))
{
		header("Location:Register_page.php?error7=Invalid email address !");
}
elseif($b_day=="")
{
		header("Location:Register_page.php?error8=You can't leave it empty !");
}
elseif($b_year=="")
{
		header("Location:Register_page.php?error9=You can't leave it empty !");
}
elseif($b_year=="")
{
		header("Location:Register_page.php?error9=You can't leave it empty !");
}

elseif(($b_month=="January" ||$b_month=="March" ||$b_month=="May" || $b_month=="July" ||$b_month=="August" ||$b_month=="October" || $b_month=="December" ) && $b_day>31)
{
		header("Location:Register_page.php?error10=Invalid date !");
}

elseif(($b_month=="April"||$b_month=="June"||$b_month=="September"||$b_month=="November") && $b_day>30)
{
		header("Location:Register_page.php?error11=Invalid date !");
}

elseif(($b_month=="February") && $b_day>28)
{
	header("Location:Register_page.php?error12=Invalid date !");
}


elseif($u_gender=="")
{
		header("Location:Register_page.php?error13=Please select one of them.");
}

elseif(strlen($mobile_no)<=10)
{
		header("Location:Register_page.php?error14=Invalid phone number !");
}
elseif($u_country=="")
{
		header("Location:Register_page.php?error15=You can't leave it empty.");
}


else{

$_SESSION["check"]="success";
$file=fopen('myfile.txt','a') or die("fle open error");
fwrite($file,$_GET['username']);
fwrite($file," ".$_GET['password']);
fwrite($file," ".$_GET['cpassword']);
fwrite($file," ".$_GET['lastname']);
fwrite($file," ".$_GET['firstname']);
fwrite($file," ".$_GET['email']);
fwrite($file,"-".$_GET['Month']);
fwrite($file,"-".$_GET['day']);
fwrite($file,"-".$_GET['year']);
fwrite($file,"-".$_GET['gd']);
fwrite($file,"-".$_GET['phone']);
fwrite($file,"-".$_GET['country']);
fwrite($file,"\r\n");
header("Location:Account_create.php?m=user");
}


?>


