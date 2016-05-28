<script>
	$('.login-button').click(function(event){
	alert('a');
	event.preventDefault()
	$('#submit').click();
	
});
$("#login, #register").on("submit", function(event) {
	event.preventDefault();
	alert('b');
	if ($("#register").exists()) {
		var action = "/auth/register"
	} else if ($("#login").exists()) {
		var action = "/auth/login"
	}
	$.ajax({
		url : action,
		type : "post",
		data : $(this).serialize(),
		dataType : "json",
		success : function(msg) {
			//alert(msg);
			$('#content').empty();
			$('#content').append(msg);
			//$(document).html(msg);
		}
	});
});

$('.forgot-pass').click(function(event) {
	event.preventDefault()
	//alert('start');
	var page = $(this).attr('href');
	$.ajax({
		type : 'POST',
		url : "/forgotpsw/",
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
</script>
<div class="backgroundcontainer">
	<div class="content-width-home">
	
		<div class="row">
			
			<div style="margin-top: -53px;" class="login-panel">
				<div class="login">
					<h2 style="text-align: center">Please Login</h2>
					
					<div class="row">
						<div class="col-xs-12 col-sm-10 col-sm-offset-1">
							<form id="login" action="auth/login" method="post">
							<div class="input-login">
								<i class="fa fa-user"></i><input type="text" name="Username" required placeholder="Username or Email">
							</div>	
							
							<div class="input-login">
								<i class="fa fa-lock"></i><input type="password" name="Password" required placeholder="Password">
							</div>	

								<div class="row">
									<div class="col-xs-6">
										<div class="checkbox-login">
											<input type="checkbox" name="remember" value="yes"> <label for="remember">Remember me</label>	
										</div>	
									</div>	
									
									<div class="col-xs-6 text-right">
										<a class="forgot-pass" href="/forgotpsw">Forgot Password?</a>
									</div>
								</div>
								
								<div class="row mT10 text-center">
									<div class="col-xs-12">
										<button class="btn btn-block login-button">Login Now</button>
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
							</form>
						</div>					
					</div>
				</div>
			</div>
	
		</div>
		
	</div>
</div>	
