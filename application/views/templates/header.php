<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <?php echo $angular = (isset($angular_module) ? 'ng-app="'.$angular_module.'"' : '') ?>>
	<head>
		<title><?php echo $title; ?></title>
		
		<link rel="stylesheet" href="<?php echo base_url('assets/libs/bootstrap/css/bootstrap.min.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/libs/bootstrap/css/bootstrap-theme.min.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/libs/fontawesome/css/font-awesome.min.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/theme_one/css/default.css');?>">
		<script type="text/javascript" src="<?php echo base_url('assets/libs/jquery/jquery-1.11.3.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/libs/jquery/jquery-migrate-1.2.1.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/libs/bootstrap/js/bootstrap.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/libs/angular/angular.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/theme_one/js/script.js');?>"></script>
	</head>
    <body>