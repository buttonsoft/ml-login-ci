<!DOCTYPE html>
<html>
<head>
	<title>Login Authentication</title>
</head>
<body>
<?php echo form_open('auth/authtentication'); ?>
<p>Username : <br />
<input type="text" name="username" placeholder="Username" autofocus/></p>
<p>Password : <br />
<input type="password" name="password" placeholder="Password" autofocus/></p>
<p><button type="submit">Login</button></p>
<?php echo form_close(); ?>
</body>
</html>