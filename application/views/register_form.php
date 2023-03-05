<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
	@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,100,700,500);

body {
  padding-top: 90px;
  background:#eee !important;
  color:#666666;
  font-family: 'Roboto', sans-serif;
  font-weight:100;
}

body{
  width: 100%;
  background: -webkit-linear-gradient(left, #22d686, #24d3d3, #22d686, #24d3d3);
  background: linear-gradient(to right, #22d686, #24d3d3, #22d686, #24d3d3);
  background-size: 600% 100%;
  -webkit-animation: HeroBG 20s ease infinite;
          animation: HeroBG 20s ease infinite;
}

@-webkit-keyframes HeroBG {
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 100% 0;
  }
  100% {
    background-position: 0 0;
  }
}

@keyframes HeroBG {
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 100% 0;
  }
  100% {
    background-position: 0 0;
  }
}


.panel {
  border-radius: 5px;
  margin-top:100px;
  margin-bottom:100px;
}
label {
  font-weight: 300;
}
.panel-login {
   border: none;
  -webkit-box-shadow: 0px 0px 49px 14px rgba(188,190,194,0.39);
  -moz-box-shadow: 0px 0px 49px 14px rgba(188,190,194,0.39);
  box-shadow: 0px 0px 49px 14px rgba(188,190,194,0.39);
  }
.panel-login .checkbox input[type=checkbox]{
  margin-left: 0px;
}
.panel-login .checkbox label {
  padding-left: 25px;
  font-weight: 300;
  display: inline-block;
  position: relative;
}
.panel-login .checkbox {
 padding-left: 20px;
}
.panel-login>.panel-heading .tabs{
  padding: 0;
}
.panel-login h2{
  font-size: 20px;
  font-weight: 300;
  margin: 30px;
}
.panel-login>.panel-heading {
  color: #848c9d;
  background-color: #e8e9ec;
  border-color: #fff;
  text-align:center;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
  border-top-left-radius: 0px;
  border-top-right-radius: 0px;
  border-bottom: 0px;
  padding: 0px 15px;
}

.panel-login>.panel-heading .login {
  padding: 20px 30px;
  background:#fdfdfd;
  border-bottom-leftt-radius: 5px;
}
.panel-login>.panel-heading .register {
  padding: 20px 30px;
  background: rgb(200,16,46);
  border-bottom-right-radius: 5px;
}
.panel-login>.panel-heading a{
  text-decoration: none;
  color: #666;
  font-weight: 300;
  font-size: 16px;
  -webkit-transition: all 0.1s linear;
  -moz-transition: all 0.1s linear;
  transition: all 0.1s linear;
}
.panel-login>.panel-heading a#register-form-link {
  color: #fff;
  width: 100%;
  text-align: center;
}
.panel-login>.panel-heading a#login-form-link {
  color: #000;    
  width: 100%;
  text-align: center;
}

.panel-login input:hover,
.panel-login input:focus {
  outline:none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  border-color: #ccc;
}

.forgot-password {
  text-decoration: underline;
  color: rgb(200,16,46);
}
.forgot-password:hover,
.forgot-password:focus {
  text-decoration: underline;
  color: #666;
}


.navbar-header {
    float: left;
    padding: 15px;
    text-align: center;
    width: 100%;
    background-color:fdfdfd;
}
.navbar-brand {float:none;}

.navbar-default{
    background-color:#fdfdfd;
}
.nav-vote{
	background-color: rgb(200,16,46);
}
.nav{
    text-align:center;
}
</style>
<body>
	<!--Navigation bar showing the Simpler Trading Brand Image-->
<nav class="navbar nav-vote navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <h1 style="color: #fff">VOTES</h1>
    </div>
    
  </div>
</nav>

<!-- Panel with Login tab and Register Tab-->
<div class="container">
   <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-login">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-6 tabs">
              <a href="#" class="active" id="login-form-link"><div class="login">Login</div></a>
            </div>
            <div class="col-xs-6 tabs">
              <a href="#" id="register-form-link"><div class="register">Register</div></a>
            </div>
          </div>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              <form id="login-form" action="#" method="post" role="form" style="display: block;">
                <h1 class="text-center">Login to your Account</h1>
                  <br/>
                  <p style="color: red;" class="error">No user found</p>
                  <div class="form-group">
                    <input type="text" name="user_email" id="useremail" tabindex="1" class="form-control" placeholder="Email" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="passwrd" id="passwrd" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  
                  <div class="form-group">     
                        <input type="button" name="login-submit"  onclick="login_user()" id="login-submit" tabindex="4" class="btn btn-danger btn-lg btn-block" value="Login">
                  </div>
                  
              </form>
              <form id="register-form" action="#" method="post" role="form" style="display: none;">
                <h1 class="text-center">Register Now</h1>
                <br/>
                <p style="color: #00ff00" id="success_message"></p>
				<p style="color: #ff0000" id="error_message"></p>
                <br/>
                  <div class="form-group">
                    <input type="text" name="user_name" id="user_name" tabindex="1" class="form-control" placeholder="Name" value="">
                  </div>
                  <div class="form-group">
                    <input type="email" name="user_email" id="user_email" tabindex="1" class="form-control" placeholder="Email" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="user_pass" onblur="check_pass()" id="user_pass" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  
                  <div class="form-group">
                    <input class="form-control" onblur="check_pass()" type="password" required="" name="conf_pass" id="conf_pass"/>
                  </div>
                  
                  <div class="form-group">
                    <input type="text" name="user_phone" id="user_phone" tabindex="3" class="form-control" placeholder="Phone number">
                  </div>
                  
                  <div class="form-group">
                    <input class="form-control" autocomplete="off" type="text" name="dob" id="dob" placeholder="Date of birth"/>
                  </div>
                  
                  <div class="form-group">
                    <input type="button"  onclick="add_user()" name="register-submit" id="register-submit" tabindex="4" class="btn btn-danger btn-lg btn-block" value="Click to Register">
                  </div>
                  
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>

	<script>
	// Javascript to toggle the background colors of the register and //login tabs.
$(function() {
    $('#login-form-link').click(function(e) {
    	$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('.register').css({"background":"rgb(200,16,46)"});
		$('.login').css({"background":"#fdfdfd"});
		$('.login').css({"color":"#000"});
		$('.register').css({"color":"#fff"});
		e.preventDefault();
	});
	
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
 		$('.login').css({"background":"rgb(200,16,46)"});
 		$('.login').css({"color":"#fff"});
 		$('.register').css({"color":"#000"});
		$('.register').css({"background":"#fdfdfd"});
		
		e.preventDefault();
	});

});

	
	$('#success_message').hide();
	$('#error_message').hide();
	
	$('#dob').datepicker({
		'dateFormat' : 'dd/mm/yy',
		'maxDate' : 0,
	});
	function check_pass(){
		var user_pass = $('#user_pass').val();
		var conf_pass = $('#conf_pass').val();
		if(user_pass != conf_pass && conf_pass != '' && user_pass != ''){
			$('#user_pass').val('');
		}
	}
	function login_user() {
		let email = $('#useremail').val();
		let user_pass = $('#passwrd').val();
		$('#errormessage').hide();
		$('#successmessage').hide();
		if(!email){	
			$('#error_message').show();
			$('#error_message').html('Email is required!');		
			return false;
		}
		if(!ValidateEmail(email)){			
			return false;
		}
		if(!user_pass){
			$('#error_message').show();
			$('#error_message').html('Password is required!');
	    	return false;
		}
		$.post("<?=base_url('register/userpass_validation'); ?>",
		  {
		    user_email: email,
		    user_pass:user_pass,
		  },
		  function(data, status){
		  	//$('#success_message').show();
			//$('#success_message').html('User Logged In successfully!');
		  	if(data=='no_err'){
				$('.error').show();
				//$('.error').html('User name or Password is not correct!');
			    return false;
			}else if(data=='success'){
				window.location.href = "<?=base_url('user'); ?>";
			}
		  	
		  });
	}
	
	function add_user() {
		let email = $('#user_email').val();
		let user_pass = $('#user_pass').val();
		let conf_pass = $('#conf_pass').val();
		$('#error_message').hide();
		$('#success_message').hide();
		if(!email){	
			$('#error_message').show();
			$('#error_message').html('Email is required!');		
			return false;
		}
		if(!ValidateEmail(email)){			
			return false;
		}
		if(!user_pass || !conf_pass){
			$('#error_message').show();
			$('#error_message').html('Password is required!');
	    	return false;
		}
		$.post("<?=base_url('register/add_user_data'); ?>",
		  {
		    user_name: $('#user_name').val(),
		    user_email: email,
		    user_pass:user_pass,
		    dob: $('#dob').val(),
		    user_phone: $('#user_phone').val(),
		    user_gender: $('input[name="user_gender"]').val(),
		  },
		  function(data, status){
		  	if(data=='user_exists'){
				$('#error_message').show();
				$('#error_message').html('Email already exists!');
			    return false;
			}
		  	$('#success_message').show();
			$('#success_message').html('User registered successfully!');
		  });
	}
	function ValidateEmail(mail) 
	{
	 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
	  {
	    return (true)
	  }
	  $('#error_message').show();
		$('#error_message').html('You have entered an invalid email address!');
	    return (false)
	}

	</script>
	
</body>
</html>