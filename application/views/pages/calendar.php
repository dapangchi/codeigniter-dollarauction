<div class="backgroundcontainer">
	<div class="content-home">
		<div class="row">
			<div class="col-md-4">
				<div class="title-slider">Calendar</div>
			</div>
			<div class="col-md-4 logo-content">
				<img src="<?php echo base_url(); ?>assets/images/color-logo.png" alt="" />
			</div>
		</div>
		<div class="row">
			<div class="main-page-content calendar">
				<h2>January</h2>
				<table id="calendar" border="0" cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<th class="first">Sunday</th>
							<th>Monday</th>
							<th>Tuesday</th>
							<th>Wednesday</th>
							<th>Thursday</th>
							<th>Friday</th>
							<th class="last">Saturday</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="inactive">27</td>
							<td class="inactive">28</td>
							<td class="inactive">29</td>
							<td class="inactive">30</td>
							<td class="inactive">31</td>
							<td>1</1td>
							<td>2</td>
						</tr>
						<tr>
							<td>3</td>
							<td>4</td>
							<td>5</td>
							<td>6
								<a href="#" data-toggle="modal" data-target="#product2"><img src="/assets/images/recent-product-2.jpg" /></a>
							</td>
							<td>7</td>
							<td>8</1td>
							<td>9</td>
						</tr>
						<tr>
							<td>10</td>
							<td>11</td>
							<td>12</td>
							<td>13</td>
							<td>14</td>
							<td>15</1td>
							<td>16</td>
						</tr>
						<tr>
							<td>17</td>
							<td>18</td>
							<td>19</td>
							<td>20</td>
							<td>21</td>
							<td>22
								<a href="#" data-toggle="modal" data-target="#product3"><img src="/assets/images/recent-product-3.jpg" /></a>
							</1td>
							<td>23</td>
						</tr>
						<tr>
							<td>24</td>
							<td>25</td>
							<td>26
								<a href="#" data-toggle="modal" data-target="#product5"><img src="/assets/images/recent-product-5.jpg" /></a>
							</td>
							<td>27</td>
							<td>28</td>
							<td>29</1td>
							<td>30</td>
						</tr>
						<tr>
							<td>31</td>
							<td class="inactive">1</td>
							<td class="inactive">2</td>
							<td class="inactive">3</td>
							<td class="inactive">4</td>
							<td class="inactive">5</1td>
							<td class="inactive">6</td>
						</tr>
					</tbody>
				</table>
				
				<!-- Modal content for products -->

				<!-- Product 2 -->
				<div class="modal fade" id="product2" role="dialog">
				  <div class="modal-dialog">
				  
					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Product 2</h4>
					  </div>
					  <div class="modal-body">
						<img src="/assets/images/recent-product-2.jpg" />
						<h5>$99.99</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis dapibus massa, sit amet pulvinar est. Sed consequat, nisi eget mollis pulvinar, quam neque lacinia mauris, et rhoncus dui nisl vel purus. Nulla vitae faucibus nunc, eu venenatis tellus.</p>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn-default" data-dismiss="modal">Close</button>
					  </div>
					</div>
					
				  </div>
				</div>
				
				<!-- Product 3 -->
				<div class="modal fade" id="product3" role="dialog">
				  <div class="modal-dialog">
				  
					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Product 3</h4>
					  </div>
					  <div class="modal-body">
						<img src="/assets/images/recent-product-3.jpg" />
						<h5>$99.99</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis dapibus massa, sit amet pulvinar est. Sed consequat, nisi eget mollis pulvinar, quam neque lacinia mauris, et rhoncus dui nisl vel purus. Nulla vitae faucibus nunc, eu venenatis tellus.</p>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn-default" data-dismiss="modal">Close</button>
					  </div>
					</div>
					
				  </div>
				</div>
				
				<!-- Product 5 -->
				<div class="modal fade" id="product5" role="dialog">
				  <div class="modal-dialog">
				  
					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Product 5</h4>
					  </div>
					  <div class="modal-body">
						<img src="/assets/images/recent-product-5.jpg" />
						<h5>$99.99</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis dapibus massa, sit amet pulvinar est. Sed consequat, nisi eget mollis pulvinar, quam neque lacinia mauris, et rhoncus dui nisl vel purus. Nulla vitae faucibus nunc, eu venenatis tellus.</p>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn-default" data-dismiss="modal">Close</button>
					  </div>
					</div>
					
				  </div>
				</div>
				
			</div>
		</div>
	</div>
</div>

<script>
	$(".main-page-content").mCustomScrollbar({});
</script>