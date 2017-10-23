<?php require 'connections.php'; ?>
<?php 
	session_start();
	$password = $_POST['Password'];
	
	$username = $_SESSION['Username'];
	
	$result = $con->query("SELECT * FROM tbl_user WHERE Password='$password'");
	$row = $result->fetch_array(MYSQLI_BOTH);
	if(mysqli_num_rows($result) > 0) {
			//Proceed
		} else {
			die ("Wrong password.<br> <a href='member.php'>Click here</a> to go back");	
		}
	$submit = $con->query("DELETE FROM tbl_user where Username='$username'");
	
	session_destroy();
	die("Account has been successfully deleted.<br> <a href='index.php'>Click Here</a> to go back");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>