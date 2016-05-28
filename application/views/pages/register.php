<script>
	$('.login-button').click(function(event){
	alert('a');
	event.preventDefault()
	$('#submit').click();
	
});
$("#login, #register").on("submit", function(event) {
	event.preventDefault();
	$.ajax({
		url : "auth/register",
		type : "post",
		data : $(this).serialize(),
		dataType : "json",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			
			alert(result);
		},
		fail : (function(status) {
			console.log(status);
		})
	});
});
</script>
<?php var_dump($_POST); ?>
<?php echo 'lel'; ?>

<style>
	body {
		overflow: auto;
	}
</style>
<div class="backgroundcontainer">
	<div class="content-width-home">
	
		<div class="row">
			
			<div class="login-panel">
				<div class="login">
					<h2 style="margin-bottom: 5px;" class="text-center">Join dollarbid</h2>
					<p style="text-align: center">Already using dollarbid? <strong><a href="">Login</a></strong></p>
					
					<div class="row">
						<div class="col-xs-12 col-sm-10 col-sm-offset-1">
							<form id="register" action="/auth/register" method="post">
								<?php echo validation_errors('<div class="error">', '</div>'); ?>
							<div class="input-login">
								<i class="fa fa-user"></i><input type="text" id="FirstName" name="FirstName" required placeholder="Full Name">
							</div>								
							<div class="input-login">
								<i class="fa fa-user"></i><input type="text" id="Username" name="Username" required placeholder="Username">
							</div>	
							<div class="input-login">
								<i class="fa fa-envelope"></i><input type="text" id="Email" name="Email" required placeholder="Email">
							</div>	
							<div class="input-login">
								<i class="fa fa-lock"></i><input type="text" id="password" name="password" required placeholder="Password">
							</div>
							<div class="input-login">
								<i class="fa fa-lock"></i><input type="text" id="password_confirm" name="password_confirm" required placeholder="Confirm password">
							</div>	

								<div class="row">
									<div class="col-xs-6">
										<div class="checkbox-login">
											<input type="checkbox" name="remember" value="yes"> <label for="remember"><a target="_self" href="/policies" class="policies-menu">Terms of Service</a></label>	
										</div>	
									</div>	
								</div>
								
								<div class="row mT10 text-center">
									<div class="col-xs-12">
										<button class="btn btn-block login-button">Register Now</button>
									</div>
								</div>
							
								<div class="row mT10">
									<div class="col-xs-12">
										<button class="btn btn-block btn-fb"><i class="fa fa-facebook"></i> Login using Facebook</button>
									</div>
									
									<div class="col-xs-12 mT10">
										<button class="btn btn-block btn-tw"><i class="fa fa-twitter"></i> Login using Twitter</button>
									</div>
								</div>
							
								
								<div class="row mT10">
									<div class="col-xs-12">
										<p class="terms-reg">By clicking the "Register Now" you confirm that you have read and agree to dollarbid's <strong><a target="_self" href="/policies" class="policies-menu">Terms of Service</a></strong> and <strong><a target="_self" class="privacy-reg" href="#">Privacy Policy</a></strong>. You also confirm that you are 18 years of age.</p>
									</div>
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
$('.policies-menu').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/policies/",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		},
		error : function(result) {
			$(document).html("Error");
		},
		fail : (function(status) {
			alert('fl');
			$(document).html("Fail");
		}),
		beforeSend : function(d) {
			$('#content').empty();
			$('#content').append("<center><strong style='color:red'>Please Wait...<br><img height='400' width='400' src='http://sierrafire.cr.usgs.gov/images/loading.gif' /></strong></center>");
		}
	});
});

/* Register Tab */
$('.privacy-reg').click(function() {
	$('#slider-right-ten').animate({
		'right' : '0'
	}, 600);
	$('.privacy-reg').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('#close-slide11').click(function() {
	$('#slider-right-ten').animate({
		'right' : '-60%'
	}, 600);
	$('#close-slide10').delay(600).animate({
		'marginRight' : '0px'
	}, 200);
});

$('.privacy-reg').click(function() {
	$('#slider-right').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-two').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-three').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-four').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-five').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-six').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-seven').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eight').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-nine').animate({
		'right' : '-60%'
	}, 600);
	$('#slider-right-eleven').animate({
		'right' : '-60%'
	}, 600);
});
</script>
