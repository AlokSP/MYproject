<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:index.html');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
	<a href="logout.php">LogOut</a>

</body>
</html>