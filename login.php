<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>talksofcode</title>
  <link rel="stylesheet" type="text/css" href="CSS/style1.css">
</head>
<body style="background:#2E2B2B">
  <div    class="header">
  	<h2 style="color:white" >Login</h2>
  </div>

	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >

  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div  class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
