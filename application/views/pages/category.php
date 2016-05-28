

<div class="backgroundcontainer">
	
	<div class="content-width-home" style="min-width: 100%;">
		
	<!--	
	<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="row">
					<div class="col-xs-12">
						<div class="title">Most Popular Categories</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<img class="full-img" src="<?php echo base_url(); ?>assets/images/imgfront1.jpg" alt="" />
							<div class="title-categories-front">Men's Accesorizes </div>
					</div>
					
					<div class="col-xs-12 col-sm-6">
						<img class="full-img" src="<?php echo base_url(); ?>assets/images/imgfron2.jpg" alt="" />
							<div class="title-categories-front">Men's Shirts</div>
					</div>
				</div>
				
				
				<div class="row">
					<div class="col-xs-12">
						<img class="full-img" src="<?php echo base_url(); ?>assets/images/imgfront3.jpg" alt="" />
					</div>
				</div>
			</div>
			
			
			
			<div class="col-xs-12 col-sm-6">
				<img class="full-img" src="<?php echo base_url(); ?>assets/images/bid-everywhere.jpg" alt="" />
				
				<div class="row">
					<div class="col-xs-12"><div class="buy-best">buy best products just as you want</div></div>
				</div>
				
				<div class="row">
				
					<div class="col-xs-12 col-sm-6">
						<div class="box-icon-main"> 
							<i class="fa fa-shopping-cart"></i>Buy now and enjoy great products!
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6">
						<div class="box-icon-main">
							<i class="fa fa-gavel"></i>Bit with tickets and take amazing price!
						</div>	
					</div> 
				
				</div>
			</div>
		</div> 
		-->
		
			<div class="flipster">
		  <ul>
		  	<?php foreach ($lotteries as $lt): ?>
		  	<li>
		  		<img src="<?php echo base_url(); ?>assets/images/prizes/<?php echo $lt->photo ?>" alt="" />
					<div class="title-product-list"><h6><?php echo $lt->title ?></h6></div>
						<div class="buy-now-price">Buy Now <?php echo $lt->buy_price ?> tickets</div> 
						<div class="bit-price">Bid (1 ticket)</div>
						<div class="buy-now-product"><a href="" class="hvr-bounce-to-right">Buy Now</a><i class="fa fa-shopping-cart"></i></div>
						<div class="read-more-product"><i class="fa fa-info"></i><a href="products.php" class="hvr-bounce-to-left">Read More</a></div>
		  	</li>
		  	<?php endforeach; ?>
		  	
		  </ul>
		</div>
	</div>
<script>
$(function(){ $(".flipster").flipster(); });
</script>
</div>
	
	
