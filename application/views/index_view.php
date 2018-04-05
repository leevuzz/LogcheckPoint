<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>EI2405 Checkpoint UNI</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href='<?php echo base_url("assets/css/bootstrap.css"); ?>'/>
	<link rel="stylesheet" href='<?php echo base_url("assets/css/bootstrap-theme.css"); ?>'/>

	<!-- Font Awesome -->
	<link rel="stylesheet" href='<?php echo base_url("assets/css/font-awesome.css"); ?>'/>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

	<!-- My Js -->
	<script src="<?php echo base_url('assets/js/logFile.js'); ?>"></script>
	
	<!-- My css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<h1>Welcome</h1>
			<form class="form" action = "<?php echo base_url('login/login_user') ?>" method="post">
				<input type="text" name="user_name" placeholder="Username" required="required">
				<input type="password" name="pass_word" placeholder="Password" required="required">
				<button type="submit" name="dangnhap" id="login-button">Login</button>
			</form>
		</div>
		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</body>
</html>
