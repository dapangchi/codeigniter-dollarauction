<div class="backgroundcontainer">
	<div class="content-home">
		<div class="row">
			<div class="col-md-4">
				<div class="title-slider">Contact Us</div>
			</div>
			<div class="col-md-4 logo-content">
				<img src="<?php echo base_url(); ?>assets/images/color-logo.png" alt="" />
			</div>
		</div>
		<div class="row">
			<div class="main-page-content">
				<div class="contact-form">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Name" class="form-control" name="name-input" id="name-input">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" placeholder="Email" class="form-control" name="email-input" id="email-input">
							</div>
						</div>
					</div> 
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Phone" class="form-control" name="phone-input" id="phone-input">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Subject" class="form-control" name="subject-input" id="subject-input">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<textarea placeholder="Message and Feedback" class="form-control" rows="9" name="textarea-input" id="textarea-input" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 211px;"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-md-offset-4 text-center">
							<a href="#" class="btn btn-primary btn-lg buy-bid">Send</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<script>
	$(".main-page-content").mCustomScrollbar({});
</script>