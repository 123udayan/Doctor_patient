<?php session_start();?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Pharma</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->
</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">
			<i class="rt-icon2-cross2"></i>
		</span>
	</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="./">
				<div class="form-group bottommargin_0"> <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input"> </div> <button type="submit" class="theme_button">Search</button> </form>
		</div>
	</div>
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->
		</div>
	</div>
	<!-- eof .modal -->
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			
			<!-- Header Start -->
			<?php include('./comnpages/header.php'); ?>
			<!--Header End -->
			
			<section class="page_breadcrumbs ls ms section_padding_25 bg_image">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="small">Login</h2>
						</div>
					</div>
					<ol class="breadcrumb bottom_breadcrumbs">
						<li> <a href="./">
						Home
						</a> </li>						 
						<li class="active">Login</li>
					</ol>
				</div>
			</section>
			<section class="ls section_padding_top_100 section_padding_bottom_75 columns_padding_25">
				<div class="container">
					<div class="row">
						 
							<center>
							 
							<form class="form-horizontal checkout shop-checkout" action="testlogin.php" method="post" role="form">
								 
								<div class="form-group validate-required" id="billing_first_name_field"> <label for="billing_first_name" class="col-sm-3 control-label">
							<span class="grey"><b>Email:</b></span>
							<!--<span class="required">*</span>-->
						</label>
									<div class="col-sm-6"> 
									<input type="email" class="form-control " name="email" id="billing_first_name" placeholder="" value=""> </div>
								</div>
								<div class="form-group validate-required" id="billing_last_name_field"> <label for="billing_last_name" class="col-sm-3 control-label">
							<span class="grey"><b>Password:</b></span>
							<!--<span class="required">*</span>-->
						</label>
									<div class="col-sm-6"> <input type="password" class="form-control " name="password" id="billing_last_name" placeholder="" value=""> </div>
								</div>
								 
								<div class="form-group"> 
								<!--<label for="order_comments" class="col-sm-3 control-label">
							<span class="grey">Order Notes:</span>
						</label>-->
									<div class="col-sm-11"> 
									<input type="submit" id="sub" name="btn_login" value="Login" />
									<!--<textarea name="order_comments" class="form-control" id="order_comments" placeholder="" rows="5"></textarea>--> 
									</div>
								</div>
							</form>
						</div>
						
						</center>
						<!--eof .col-sm-8 (main content)-->
						<!-- sidebar -->
						
						
						
							 
						<!-- eof aside sidebar -->
					</div>
				</div>
			</section>
			
			<!-- Start Footer -->
			<?php include('./comnpages/footer.php'); ?>			
			<!-- End Footer -->
			
			
			</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
</body>

</html>