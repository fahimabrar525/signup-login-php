<?php
	$u=$_GET['username'];
	$p=$_GET['password'];
	$myfile = fopen("myfile.txt", "r") or die("Unable to open file!");
	
	$flag=false;
	session_start();
	$_SESSION["check"]="";
	while($c=fgets($myfile)){
		$b=trim($c);
		$a=explode(" ",$b);
		
		
		if(($a[0]==$u)  && ($a[1]==$p)){
		$flag=true;
		$u_name=$a[3];
		break;
		
}

	}
	if($flag==true)
	{
		$_SESSION["check"]="success";
		header("Location:home.php?u_name=$u_name");
	}
	else 
	header("Location:ulogin.php?error=Invalid username or password");
	
	fclose($myfile);
	
	
?>