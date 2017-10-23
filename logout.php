<?php require 'connections.php'; ?>
<?php 
session_start();

session_destroy();

header('Location: index.php');
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