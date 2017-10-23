<?php require 'connections.php'; ?>
<?php 
	if(isset($_POST['Register'])) {
		session_start();
		//Forms
		$username = strtolower (strip_tags ($_POST['Username']));
		$password = strip_tags ($_POST['Password']);
		$confirmpassword = $_POST['Confirm_Password'];
		$email = strtolower (strip_tags ($_POST['Email']));
		$confirmemail = $_POST['Confirm_Email'];
		//Forms
		
		//Password & Email Confirmation
		if ($password == $confirmpassword) { 
			//Proceed
		} else if ($email == $confirmemail) { 
			die ("Sorry, your password didn't match<br>. <a href='register.php'>Click here</a> to go back."); 
		} else {
			die ("Sorry, your password didn't match.<br> Sorry, your email didn't match.<br> <a href='register.php'>Click here</a> to go back."); 
		} if($email == $confirmemail) { 
			//Proceed
		} else {
			die ("Sorry, your email didn't match.<br> <a href='register.php'>Click here</a> to go back."); }
		//Password & Email Confirmation
		
		//Username & Email Check
		$usercheck = $con->query("SELECT * FROM tbl_user WHERE Username ='$username'");
		if(mysqli_num_rows($usercheck) > 0) {
			die ("Sorry, that user already exists.<br> <a href='register.php'>Click here</a> to go back.");
		}
		$emailcheck = $con->query("SELECT * FROM tbl_user WHERE Email ='$email'");
		if(mysqli_num_rows($emailcheck) > 0) {
			die ("Sorry, that email has been already used.<br> <a href='register.php'>Click here</a> to go back.");
		}
		//Username & Email Check
		
		//Inserting the data to DB
		$sql = $con->query("INSERT INTO tbl_user (Username, Password, Email)Values('{$username}','{$password}','{$email}')");
		//Inserting the data to DB
		
		header('Location: login.php'); //It will direct to Login form
	}









?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>

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
<form action="" method="post" name="RegisterForm" id="RegisterForm">
<ul>
<li>Username:</li>
<li><input name="Username" type="text" required="required" maxlength="20"></li>
<li>Password:</li>
<li><input name="Password" type="password" required="required" maxlength="20"></li>
<li>Confirm Password:</li>
<li><input name="Confirm_Password" type="password" required="required" maxlength="20"></li>
<li>Email:</li>
<li><input name="Email" type="text" required="required" maxlength="50"></li>
<li>Confirm Email:</li>
<li><input name="Confirm_Email" type="text" required="required" maxlength="50"></li>
<li><input name="Register" type="submit" class="button" id="Register" value="Register"></li>
</ul>
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
</form>
</body>
</html>