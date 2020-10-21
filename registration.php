<?php 
	session_start();
	header('location:login.php');//redirects user back to login page after registration

	$con = mysqli_connect('localhost', 'root'); 
	//connection to the local database with the username and password
	//here password is not given as it is not set

	mysqli_select_db($con, 'userregistration');
	//after connection, we look for user registration database

	$name = $_POST['user'];
	$pass = $_POST['password'];
	//after getting connected to database,
	// username store in the name variable and password in pass

	$s = " select * from usertable where name = '$name'";

	$result = mysqli_query($con, $s);

	$num = mysqli_num_rows($result);

	if($num == 1){ //checks whether any person with the same username exists or not
		echo "Username Already Taken";
	}else{
		$reg= " insert into usertable(name, password) values ('$name', '$pass')";
		mysqli_query($con, $reg);
		echo "Registration Successfull";
	}

 ?>