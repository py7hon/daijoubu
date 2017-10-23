<?php require 'connections.php'; ?>
<?php
//collect
session_start();
$output = '';
	if(isset($_POST['search'])) {
		$searchq = $_POST['search'];
		$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
		
		$result = $con->query("SELECT * FROM tbl_user WHERE Username LIKE '%$searchq%'");
		$count = mysqli_num_rows($result);
		if($count == 0) {
			$output = 'There was no search results!';	
		} else {
			while($row = mysqli_fetch_array($result)) {
				$username = $row['Username'];
				
				$output .= '<div>'.$username.'</div>';	
			}
		}
	} 
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search</title>

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
<form action="search.php" method="post">
<ul>
<li>Search:
<input type="text" name="search" placeholder="Search of members...">
<input type="submit" value=">>"></li>
<li>Result:</li>
<li><?php
	echo "$output"; 
?></li>
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