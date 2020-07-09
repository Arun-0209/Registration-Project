<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>
		 <div class="input-group">
			<label>Employee Name: </label>
			<input type="text" name="empage" >
		</div>
            <div class="input-group">
			<label>Employee Age: </label>
			<input type="text" name="empage" >
		</div>
		<div class="input-group">
			<label>DateOfBirth:</label>
			<input type="date" name="date" >
		</div>
		<div class="input-group">
			<label>Address:</label>
			<input type="text" name="address" >
		</div>
		<div class="input-group">
			<label>Qualification:</label>
			<input type="text" name="qulification" >
		</div>
		<div class="input-group">
			<label>PhoneNumber:</label>
			<input type="text" name="phonenumber" >
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>