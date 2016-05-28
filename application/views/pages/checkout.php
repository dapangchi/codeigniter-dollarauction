<div class="backgroundcontainer">
	<div class="content-home">
		<div class="row">
			<div class="col-md-4">
				<div class="title-slider">Check it Out</div>
			</div>
			<div class="col-md-4 logo-content">
				<img src="<?php echo base_url(); ?>assets/images/color-logo.png" alt="" />
			</div>
		</div>
		<div class="row">
			<div class="main-page-content">
				<div class="white-page-content checkout">				
					<div class="row">
						<div class="col-md-12">
							<h2>Product Information</h2>
						</div>
					</div>
					<div class="row mb20">
						<div class="col-md-2">
							<img class="img-responsive" src="<?php echo base_url(); ?>assets/images/product-thumb.jpg" alt="" />
						</div>
						<div class="col-md-10">
							<table class="table">
								<tbody>
									<tr>
										<td class="check-title">Product Name:</td>
										<td>Rayban Glass</td>
									</tr>
									<tr>
										<td class="check-title">Description:</td>
										<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </td>
									</tr>
									<tr>
										<td class="check-title">Total:</td>
										<td>$100</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h2>Account Information</h2>
						</div>
					</div>
					<div class="row mb20">
						<div class="col-md-6">
							<div class="form-group">
								<label for="text-input" class="col-md-3 control-label">First Name :</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="text-input" id="text-input">
								</div>
							</div>
							<div class="form-group">
								<label for="text-input" class="col-md-3 control-label">Last Name :</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="text-input" id="text-input">
								</div>
							</div>
							<div class="form-group">
								<label for="text-input" class="col-md-3 control-label">Email Address :</label>
								<div class="col-md-9">
									<input type="email" class="form-control" name="text-input" id="text-input">
								</div>
							</div>
							<div class="form-group">
								<label for="select" class="col-md-3 control-label">Country :</label>
								<div class="col-md-9">
									<select size="1" class="form-control" name="select" id="select">
										<option value="0">Please select</option>
										<option value="1">Option #1</option>
										<option value="2">Option #2</option>
										<option value="3">Option #3</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h2>Payment Information</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="text-input" class="col-md-3 control-label">Card Number :</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="text-input" id="text-input">
								</div>
							</div>
							<div class="form-group">
								<label for="text-input" class="col-md-3 control-label">Card Holder :</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="text-input" id="text-input">
								</div>
							</div>
							<div class="form-group">
								<label for="text-input" class="col-md-3 control-label">Card Code :</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="text-input" id="text-input">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 text-center">
							<a class="btn btn-lg order-yellow" href="#">Submit Order</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(".main-page-content").mCustomScrollbar({});
	
	$(document).ready(function(){
		$('#recent-products').bxSlider({
			slideWidth: 300,
			minSlides: 5,
			maxSlides: 5,
			slideMargin: 1,
			pager: false
		});
	});
</script>