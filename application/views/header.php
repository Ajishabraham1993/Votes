<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>QnA</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/jquery.datetimepicker.css"/>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<style>
  		.mt-0 {
		  margin-top: 0 !important;
		}

		.ml-1 {
		  margin-left: 10px !important;
		}
		.mx-1 {
		  margin-left: 10px !important;
		  margin-right: 10px !important;
		}
		.mn-1 {
		  margin-top: 10px !important;
		  margin-bottom: 10px !important;
		}
		.ml-1 {
		  margin-left: 10px !important;
		}
		.mr-1 {
		  margin-right: 10px !important;
		}

		.ml-2 {
		  margin-left: 20px !important;
		}
		.mx-2 {
		  margin-left: 20px !important;
		  margin-right: 20px !important;
		}
		.mn-2 {
		  margin-top: 20px !important;
		  margin-bottom: 20px !important;
		}
		.ml-2 {
		  margin-left: 20px !important;
		}
		.mr-2 {
		  margin-right: 20px !important;
		}
		.right{
			float: right;
		}
		.left{
			float: left;
		}
aside{
  width: 300px;
  min-height: 100vh;
  height: auto;
  background: rgb(200,16,46)
}
aside nav{
  font-size: 1em;
  padding:1em 0 1em 1em 
}
aside nav ul{
  list-style:none;
}
aside nav ul a li {
  color: #fff;
  position:relative;
  padding:1em 0 1em 1em;
}
aside nav ul a.active li {
  color: #000;
  background: rgb(255 255 255);
  border-radius: 0.5em 0em 0em 0.5em;
}
aside nav ul a li:hover {
  color: #000;
  background: rgb(255 255 255);
  border-radius: 0.5em 0em 0em 0.5em;
}
aside nav ul a li:hover::before {
    content: '';
    position: absolute;
    background: orange;
    right: 0px;
    top: -1em;
    border-radius: 0em 0em 0.5em 0em;
    border: rgb(200,16,46) 0.5em solid;
    box-shadow: 0.5em 0.5em 0 0 rgb(255 255 255);
}
aside nav ul a li:hover::after {
    content: '';
    position: absolute;
    background: orange;
    right: 0px;
    bottom: -1em;
    border-radius: 0em 0.5em 0.5em 0em;
    border: rgb(200,16,46) 0.5em solid;
    box-shadow: 0.5em -0.5em 0 0 rgb(255 255 255);
}
aside nav ul a{
  color: inherit;
  text-decoration: none;
}
  	</style>
</head>
<body>
<div style="display: flex;">
	<aside>
	  <nav>
	    <ul>
	      <a class="<?php if($this->uri->segment('2')==""){ ?>active<?php } ?>" href="<?= base_url('user') ?>"><li>Dashboard</li></a>
	      <a class="<?php if($this->uri->segment('2')=="add_vote"){ ?>active<?php } ?>" href="<?= base_url('user/add_vote') ?>"><li>Add votes</li></a>
	      <a class="<?php if($this->uri->segment('2')=="show_vote"){ ?>active<?php } ?>" href="<?= base_url('user/show_vote') ?>"><li>View votes</li></a>
	      <a onclick="log_out()" href="#"><li>Log out</li></a>
	    </ul>
	  </nav>
	</aside>
	<div class="container">