<?php require 'connections.php'; ?>
<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Member</title>

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
<ul>
<li>
<?php 
	if (@$_SESSION['Username']) {
			echo "Welcome, ".$_SESSION['Username']."!<br>";
		} else {
		 die("You must be logged in.<br> <a href='index.php'>Click here</a> to go back.");	
		}
?>
</li>
</ul>
<ul>
<li>Change Password</li>
<li><form action="changepassword.php" method="post" name="ChangePassword" id="ChangePassword"></li>
<li>Old Password:</li>
<li><input name="old_password" type="password" maxlength="20"></li>
<li>New Password:</li>
<li><input name="new_password" type="password" maxlength="20"></li>
<li>Confirm Password:</li>
<li><input name="confirm_new_password" type="password" maxlength="20"></li>
<li><input name="Submit" type="submit" class="button" id="Submit" value="Submit"></li>
</form>
</ul>

<ul>
<li>Delete Account</li>
<form action="deleteaccount.php" method="post" name="DeleteAccount" id="DeleteAccount">
<li>Password:</li>
<li><input name="Password" type="password" maxlength="20"></li>
<li><input name="Delete" type="submit" class="button" id="Delete" value="Delete"></li>
</form>
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
</body>
</html>