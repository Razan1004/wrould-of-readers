<?php
$name=$_POST["name"];
$email=$_POST["email"];
$username=$_POST["username"];
$pass=$_POST["password"];
$c_pass=$_POST["c_password"];
$age=$_POST["age"];
$bir=$_POST["birthdate"];
$gender=$_POST["gender"];


if(preg_match("/[a-zA-Z]{4,15}/",$username))
	{
		$con=mysqli_connect("localhost", "root", "", "project");
		if(!$con)
		{
			die("Error:" . mysqli_error());
		}
		
		mysqli_query($con,"INSERT INTO `signin` (`name`, `email`, `username`, `password`, `c_password`, `age`, `birthdate`, `gender`)
		VALUES ('$name', '$email', '$username', '$pass', '$c_pass', '$age', '$bir', '$gender');");
		
		
		mysqli_close($con);
		
		echo "Successfully";
		
		
	}
	
?>