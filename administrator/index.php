<?php
include('includes/db.php');

if(isset($_POST['login'])){
				$username=$_POST['username'];
				$password1=$_POST['password'];
				$password=md5($password1);
				
				$check="select * from user where username='$username' and password='$password'";
				$query=mysqli_query($con,$check);   
				$count_rows=mysqli_num_rows($query);
				if ($count_rows>0){
					header('location:dashboard.php');}
				else {
					echo "<script>
						alert('Invalid Username or Password!');</script>";
						header('location:index.php');}
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
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" name= 'logging'> 
		<input type="text" placeholder="username"  name="username" required>
		<div class="bar">
			<i></i>
		</div>
		<input type="password" placeholder="password" name="password" required>
		<a href="" class="forgot_link">forgot ?</a>
		<button name='login' >Sign in</button>
		</form>
	</div>
</body>
</html>


