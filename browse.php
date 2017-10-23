<?php require 'connections.php'; ?>
<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Browse</title>

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
	<div id="animelist">
            <center><h1>Anime List</h1></center>
            <ul>
            <li><a href="Anime/Amagi Brilliant Park/info100.php">Amagi Brilliant Park</a></li>
            <li><a href="Anime/Danna ga Nani wo Itteiru ka Wakaranai Ken/info101.php">Danna ga Nani wo Itteiru ka Wakaranai Ken</a></li>
            <li><a href="Anime/Grisaia no Kajitsu/info102.php">Grisaia no Kajitsu</a></li>
            <li><a href="Anime/Shingeki no Kyojin/info103.php">Shingeki no Kyojin</a></li>
            <li><a href="Anime/Shinmai Maou no Testament/info104.php">Shinmai Maou no Testament</a></li>
            </ul>
    </div>
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