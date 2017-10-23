<?php require 'connections.php'; ?>
<?php 
	session_start();
	
	$changepass = $_POST['old_password'];
	$newpass = $_POST['new_password'];
	$confirmnewpass = $_POST['confirm_new_password'];
	$username = $_SESSION['Username'];
	
	if ($newpass == $confirmnewpass) {
		//Proceed
	} else {
		die ("The New Password didn't match.<br> <a href='member.php'>Click here</a> to go back.");
	}
	
	$result = $con->query("SELECT * FROM tbl_user WHERE Password='$changepass'");
	$row = $result->fetch_array(MYSQLI_BOTH);
	if(mysqli_num_rows($result) > 0) {
			//Proceed
		} else {
			die ("Wrong password.<br> <a href='member.php'>Click here</a> to go back");	
		}
		
	$submit = $con->query("UPDATE tbl_user SET Password='$newpass' WHERE Username='$username' AND Password='$changepass'");
	
	die ("Password has been successfully changed.<br> <a href='member.php'>Click here</a> to go back");
	
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