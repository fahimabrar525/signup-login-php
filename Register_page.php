<?php
$error1="";
$error2="";
$error3="";
$error4="";
$error5="";
$error6="";
$error7="";
$error8="";
$error9="";
$error10="";
$error11="";
$error12="";
$error13="";
$error14="";
$error15="";
if(isset($_GET["error1"])){
	$error1="You must fill first and last name.";
}
elseif(isset($_GET["error2"])){
	$error2="You can't leave username empty.";
}
elseif(isset($_GET["error3"])){
	$error3="Your username must have 4 characters.";

}
elseif(isset($_GET["error4"])){
	
	$error4="Use at least 8 characters.";


}
elseif(isset($_GET["error5"])){

	$error5="These passwords don't match.";

}
elseif(isset($_GET["error6"])){

	$error6="You can't leave it empty.";
}
elseif(isset($_GET["error7"])){

	$error7="Invalid email address !";
}
elseif(isset($_GET["error8"])){

	$error8="You can't leave it empty.";
}
elseif(isset($_GET["error9"])){

	$error9="You can't leave it empty.";
}
elseif(isset($_GET["error10"])){

	$error10="Invalid date !";
}
elseif(isset($_GET["error11"])){

	$error11="Invalid date !";
}

elseif(isset($_GET["error12"])){

	$error12="Invalid date !";
}
elseif(isset($_GET["error13"])){

	$error13="Please select one of them.";
}
elseif(isset($_GET["error14"])){

	$error14="Invalid phone number !";
}
elseif(isset($_GET["error15"])){

	$error15="You can't leave it empty.";
}


else{
$error1="";
$error2="";
$error3="";
$error4="";
$error5="";
$error6="";
$error7="";
$error8="";
$error9="";
$error10="";
$error11="";
$error12="";
$error13="";
$error14="";
$error15="";

}
session_start();
?>

<html>
<head>
<title>User Registration Form</title>
<link rel="stylesheet" href="Register.css"/>
</head>
<body>
<div class="registerbox">

<p class="warning1"><small><?php echo $error1;?></small></p>
<p class="warning2"><small><?php echo $error2;?></small></p>
<p class="warning3"><small><?php echo $error3;?></small></p>
<p class="warning4"><small><?php echo $error4;?></small></p>
<p class="warning5"><small><?php echo $error5;?></small></p>
<p class="warning6"><small><?php echo $error6;?></small></p>
<p class="warning7"><small><?php echo $error7;?></small></p>
<p class="warning8"><small><?php echo $error8;?></small></p>
<p class="warning9"><small><?php echo $error9;?></small></p>
<p class="warning10"><small><?php echo $error10;?></small></p>
<p class="warning11"><small><?php echo $error11;?></small></p>
<p class="warning12"><small><?php echo $error12;?></small></p>
<p class="warning13"><small><?php echo $error13;?></small></p>
<p class="warning14"><small><?php echo $error14;?></small></p>
<p class="warning15"><small><?php echo $error15;?></small></p>

<img src="register_icon.png" class="register_icon">
<h1>Sign Up</h1>
<form action="Register_info.php" method="get">
<p>Name</p>
<input type="text" name="firstname" placeholder="First">
<input type="text" name="lastname" placeholder="Last">
<p>Choose your username</p>
<input type="text" name="username" >
<p>Create a password</P>
<input type="password" name="password">
<p>Confirm your passwrod</p>
<input type="password" name="cpassword">
<p>Email address</P>
<input type="text" name="email" >
<p>Birthday</p>
Month<select name="Month">
<option value="January" selected>January</option>
<option value="February" selected>February</option>
<option value="March" selected>March</option>
<option value="April" selected>April</option>
<option value="May" selected>May</option>
<option value="June" selected>June</option>
<option value="July" selected>July</option>
<option value="August" selected>August</option>
<option value="September" selected>September</option>
<option value="October" selected>October</option>
<option value="November" selected>November</option>
<option value="December" selected>December</option>
</select>
<input type="text" name="day" placeholder="Day">
<input type="text" name="year" placeholder="Year"><br>
<p>Gender</p><br>
		<Input type="radio" name="gd" value="Male">Male
	   <Input type="radio" name="gd" value="Female">Female
		<Input type="radio" name="gd"value="Other">Other<br><br>
		<p>Mobile phone</p>
		<input type="text" name="phone" >
		<p>Country</P>
		<input type="text" name="country"><br>
		
		<input type="submit" value="Register">

</form>
</div>
</body>
</html>