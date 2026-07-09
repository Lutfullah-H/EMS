<?php
include "config/database.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select username, password from users where username = ?";

$stmt = $pdo->prepare($sql);

$stmt->execute([$username]);

$data = $stmt->fetch(PDO::FETCH_ASSOC);

if ($data)
{
	if (password_verify($password, $data['password']))
	{
		header("Location: dashboard.php");
		exit();
	}
	
	else
		{
			die("Invalid username or password");
		}
}
else
{
	die("Invalid username or password");
}


?>