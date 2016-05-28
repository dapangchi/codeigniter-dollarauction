<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
<title>Dollar</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/scripts/jquery.bxslider/jquery.bxslider.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/scripts/slider-products/jquery.flipster.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/scripts/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/scripts/slider-products/jquery.flipster.js"></script>
<script src="<?php echo base_url(); ?>assets/scripts/jquery.bxslider/jquery.bxslider.min.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="<?php echo base_url(); ?>assets/scripts/shiv.v3.7.2.js"></script>
<script src="<?php echo base_url(); ?>assets/scripts/respond.v1.4.2.min.js"></script>
<![endif]-->
</head>
<body>
<script>
var sourceSwap = function () {
var $this = $(this);
var newSource = $this.data('alt-src');
$this.data('alt-src', $this.attr('src'));
$this.attr('src', newSource);
}

$(function () {
$('img.xyz').hover(sourceSwap, sourceSwap);
});
</script>

<div id="header">
<div id="header-left">
<div class="header-register">
<a href="/"><i class="fa fa-home"></i> Home</a>
</div>
<div class="header-register">
<a href="/register"><i class="fa fa-user-plus"></i> Register</a>
</div>
<div class="header-login">
<a href="/login"><i class="fa fa-sign-in"></i> Login</a>
</div>
</div>

<div id="header-right">
<div id="hammer-header">
<a href="#"><i class="fa fa-shopping-cart"></i> <span>Cart</span></a>
</div>
<form id="search" action="" method="" accept-charset="utf-8">
<div class="form-group has-feedback">
<input type="text" placeholder="Search..." id="Search1" class="form-control">
<span class="fa fa-search form-control-feedback"></span>
</div>
</form>
</div>
<div id="header-middle">
<div id="logo">
<a href="http://dollarbid.isodevelopers.com/">
<img class="xyz" data-alt-src="<?php echo base_url(); ?>assets/images/logo-menu-hover.png" src="<?php echo base_url(); ?>assets/images/logo-menu.png" />
</a>
</div>
</div>
</div>
<div id="content">
