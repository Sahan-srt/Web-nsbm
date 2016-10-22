<?php
  session_start();
  include 'DB.php';
 
  if (isset($_POST['login'])) {
  	
  	
  	$username = strip_tags($_POST['username']);
  	$password = strip_tags($_POST['password']);

  	$username = stripslashes($username);
	$password = stripslashes($password);


		$username = mysqli_real_escape_string($DB,$username);
		$password = mysqli_real_escape_string($DB,$password);


		$sql = "SELECT * FROM users WHERE username ='$username' ";
		$query = mysqli_query($DB,$sql);

	$row = mysqli_fetch_array($query);
	 $id =$row['id'];
	 $db_password = $row['password'];

	 if( $password == $db_password){

	 	$_SESSION['username']=$username;
	 	$_SESSION['id'] = $id;
	 	header("Location:lmshome.php");

	 }
  }



 ?>


<html>
<head>
	<title>GREEN UNI LOGIN</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
      <div id="form">
      	<div id="inside">
      <h2 id="heading">GREEN UNIVERSITY LOGIN</h2>
     <form  id="element" action="loginhome.php" method="post"> <div id="fields">
     	<input class="kotu" type="text" id="username" name="username" placeholder="Green ID" autofocus="">
     	<input class="kotu" type="password" name="password" id="password" placeholder="Password" autofocus="">
     	</div><div id="but">
     	<input id="submit" type="submit" name="login" value="Login">
     	</div>
     	
     	</div>	
     </form></div>
</body>
</html>