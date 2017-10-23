<?php require 'connections.php'; ?>
<?php 
	if(isset($_POST['Login'])) {
		//Forms		
		$username = $_POST['Username'];
		$password = $_POST['Password'];
		//Forms
		
		//Checks if user input is available
		$result = $con->query("SELECT * FROM tbl_user WHERE Username='$username' AND Password='$password'");
		$row = $result->fetch_array(MYSQLI_BOTH);
		//Checks if user input is available
		
		//Error handle if no user found
		if(mysqli_num_rows($result) > 0) {
			//Proceed
		} else {
			die ("Wrong username or password.<br> <a href='login.php'>Click here</a> to go back");	
		}
		//Error handle if no user found
		
		session_start();
		
		$_SESSION["Username"]=$username;
		
		header('Location: member.php');
		
	}




?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>

<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
<div id="header">
<h1>Daijoubu ?</h1>
</div>
<div id="nav">
	<ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="browse.php">Browse</a></li>
        <?php 
        if (@$_SESSION['Username']) {
                echo "<li><a href='member.php'>Member</a></li>";
                echo "<li><a href='logout.php'>Logout</a></li>";
            } else {
                echo "<li><a href='login.php'>Login</a></li>";
                echo "<li><a href='register.php'>Register</a></li>";
            }
        ?>
        <li><a href="search.php">Search</a></li>
        <li><a href="about.php">About</a><br></li>
	</ul>
</div>
<div id="content">
<form action="" method="post" name="LoginForm" id="LoginForm">
<ul>
<li>Username:</li>
<li><input name="Username" type="text" required="required" maxlength="20"></li>
<li>Passsword:</li>
<li><input name="Password" type="password" required="required" maxlength="20"></li>
<li><input name="Login" type="submit" class="button" id="Login" value="Login"></li>
</ul>
</form>
</div>
<div id="navfooter">
	<ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a><br></li>
	</ul>
</div>
<div id="ending">
    <p>Copyright 2017 by Iqbal Rifai. All Rights Reserved.</p>
</div>
</body>
</html>