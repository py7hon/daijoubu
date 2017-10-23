<?php require 'connections.php'; ?>
<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Daijoubu ?</title>

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
<h2>Welcome!</h2>
<center><img src="welcomew.jpg"></img></center>
<p>What is Daijoubu? This site serves the latest update and episodes about different anime series. Feel free to check things out and don't forget to register!</p>
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