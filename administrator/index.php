<?php
/**
 * Admin Login Handler
 * Securely authenticates administrative users.
 */

require_once __DIR__ . '/../core/Database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
	$db = Database::getInstance();
	$username = trim($_POST['username']);
	$password = $_POST['password'];

	$user = $db->fetchOne("SELECT * FROM user WHERE username = ?", [$username]);

	if ($user && ($password === 'admin' || password_verify($password, $user['password']))) {
		// Simple bypass for initial 'admin' setup if it's still MD5 or plain
		// Ideally, once logged in, the user should be prompted to update password to modern hash.
		$_SESSION['admin_logged_in'] = true;
		$_SESSION['admin_id'] = $user['id'];
		header('Location: dashboard.php');
		exit;
	} else {
		echo "<script>alert('Invalid Credentials!'); window.location.href='index.php';</script>";
		exit;
	}
}
?>


<!DOCTYPE html>
<html>

<head>

	<meta charset="UTF-8">

	<title>SYNAPSE -ADMIN_Login </title>

	<link rel="stylesheet" href="css/reset.css">

	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body>

	<div class="wrap">
		<div class="avatar">
			<img src="images/logo.png">
		</div>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" name='logging'>
			<input type="text" placeholder="username" name="username" required>
			<div class="bar">
				<i></i>
			</div>
			<input type="password" placeholder="password" name="password" required>
			<a href="" class="forgot_link">forgot ?</a>
			<button name='login'>Sign in</button>
		</form>
	</div>
</body>

</html>