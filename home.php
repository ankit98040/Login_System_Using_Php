<?php 

session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
	//if username is not set, redirect to home page
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home</title>
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<style type="text/css">
 		.container{
 			padding-top: 90px;
 		}
 	</style>
 </head>
 <body>

 	<div class="container">
 	<h1 style="font-family: fantasy;">Welcome <?php echo $_SESSION['username']; ?>
 		
 	</h1>

 	<a class="float-right" href="logout.php">LOGOUT</a>
 	
 	</div>
 
 </body>
 </html>