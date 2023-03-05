<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="container">
		<h3>User Login</h3>
		<form action="<?=base_url('index.php/login'); ?>" method="post">
		<p style="color: #ff0000" id="error_message"></p>
		<div class="form-group">
			<label for="user_email">Email</label>
			<input class="form-control" type="text" required="" name="user_email" id="user_email"/>
		</div>
		<div class="form-group">
			<label for="user_pass">Password</label>
			<input class="form-control" type="password" required="" name="user_pass" id="user_pass"/>
		</div>
		
		<input class="btn" name="submit" type="submit" value="submit"/>
		
		</form>
		<p style="margin-top: 10px;">Not Registered Yet? <a href="<?= base_url('index.php/register'); ?>">Sign in</a></p>
	</div>
	
	<script>
	$('#error_message').hide();
	<?php if($this->session->userdata('error') != ''){ ?>
		$('#error_message').show();
		$('#error_message').html('<?= $this->session->userdata("error"); ?>');
	<?php } ?>
	
	</script>
	
</body>
</html>