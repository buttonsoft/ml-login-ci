<!DOCTYPE html>
<html>
<head>
	<title>Welcome to member page</title>
</head>
<body>
<h1>hay welcome to, your login as <?php echo $username; ?> </h1>
<p><a href="<?php echo base_url().'index.php/member/logout'; ?>">Logout</a></p>
</body>
</html>