<?php if(is_array($output)): ?>
	
	<?php if(!empty($output['crud']->css_files)): ?>
	<?php foreach($output['crud']->css_files as $file): ?>
	    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	<?php endforeach; ?>
	<?php endif; ?>

	<?php if(!empty($output['crud']->js_files)): ?>
	<?php foreach($output['crud']->js_files as $file): ?>
	    <script src="<?php echo $file; ?>"></script>
	<?php endforeach; ?>
	<?php endif; ?>
	
<?php else: ?>
	
	<?php if(!empty($css_files)): ?>
	<?php foreach($css_files as $file): ?>
	    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	<?php endforeach; ?>
	<?php endif; ?>
	
	<?php if(!empty($js_files)): ?>
	<?php foreach($js_files as $file): ?>
	    <script src="<?php echo $file; ?>"></script>
	<?php endforeach; ?>
	<?php endif; ?>
<?php endif; ?>



<?php if($this->uri->segment(2) == "product_images"): ?>
<script>
$(document).ready(function(){
//$("#fine-uploader .qq-uploader .qq-upload-button div").remove();//html('Wybierz plik')
});
</script>
<?php endif; ?>

<?php if($this->uri->segment(2) == "profile_colors"): ?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/scripts/colorpicker.js"></script>
	<script>
	$(document).ready(function(){
	$('#field-color').ColorPicker({
	
	onSubmit: function(hsb, hex, rgb, el) {
	$(el).val(hex);
	$(el).ColorPickerHide();
	},
	onBeforeShow: function () {
	$(this).ColorPickerSetColor(this.value);
	}
	})
	.bind('keyup', function(){
	$(this).ColorPickerSetColor(this.value);
	});
	});
	</script>
<?php endif; ?>

<?php if($this->uri->segment(2) == "storage"): ?>
	<ol class="breadcrumb">
	<li class="active">Systemy</li>
	<?php if($this->uri->segment(3) == "edit"): ?>
	<li><a href="<?php echo site_url('panel/storage_set_divide/'.$this->uri->segment(4)); ?>">Podziały</a></li>
	<?php endif; ?>
	</ol>
<?php endif; ?>

<?php if($this->uri->segment(2) == "storage_set_divide"): ?>
	<ol class="breadcrumb">
	<li><a href="<?php echo site_url('panel/storage/edit/'.$this->session->userdata('id')); ?>">Systemy</a></li>
<li class="active">Podziały</li>
</ol>
<?php endif; ?>

<?php if($this->uri->segment(2) == "product"): ?>
	<ol class="breadcrumb">
	<li class="active">Drzwi</li>
	<?php if($this->uri->segment(3) == "edit"): ?>
		<li><a href="<?php echo site_url('panel/categories/'.$this->uri->segment(4)); ?>">Kategorie</a></li>
		<li><a href="<?php echo site_url('panel/product_door_color_names/'.$this->uri->segment(4)); ?>">Kolorystyka</a></li>
	<?php endif; ?>
	</ol>
<?php endif; ?>

<?php if($this->uri->segment(2) == "categories"): ?>
	<ol class="breadcrumb">
	<li><a href="<?php echo site_url('panel/product'); ?>">Drzwi</a></li>
<li class="active">Kategorie</li>
	<li><a href="<?php echo site_url('panel/product_door_color_names/'.$this->uri->segment(3)); ?>">Kolorystyka</a></li>
	</ol>
<?php endif; ?>

<?php if($this->uri->segment(2) == "product_door_color_names"): ?>
	<ol class="breadcrumb">
	<li><a href="<?php echo site_url('panel/product'); ?>">Drzwi</a></li>
	<li><a href="<?php echo site_url('panel/categories/'.$this->uri->segment(3)); ?>">Kategorie</a></li>
	<li class="active">Kolorystyka</li>
</ol>
<?php endif; ?>

<?php if($this->uri->segment(2) == "storage_set"): ?>
	<ol class="breadcrumb">
	<li><a href="<?php echo site_url('panel/storage/edit/'.$this->session->userdata('id')); ?>">Systemy</a></li>
<li><a href="<?php echo site_url('panel/storage_set_divide'.'/'.$this->session->userdata('id')); ?>">Podziały</a></li>
<li  class="active">Zestawy</li>
</ol>
<?php endif; ?>

<?php if($this->uri->segment(2) == "storage_elements"): ?>
	<ol class="breadcrumb">
	<li><a href="<?php echo site_url('panel/storage/edit/'.$this->session->userdata('id')); ?>">Systemy</a></li>
<li><a href="<?php echo site_url('panel/storage_set_divide'.'/'.$this->session->userdata('id')); ?>">Podziały</a></li>
<li  class="active">Rozwinięcie podziału</li>
</ol>
<?php endif; ?>

<?php if($this->uri->segment(2) == "storage_categories"): ?>
	<ol class="breadcrumb">
	<li><a href="<?php echo site_url('panel/storage/edit/'.$this->session->userdata('id')); ?>">Systemy</a></li>
<li><a href="<?php echo site_url('panel/storage_set_divide'.'/'.$this->session->userdata('id')); ?>">Podziały</a></li>
<li><a href="<?php echo site_url('panel/storage_elements'.'/'.$this->session->userdata('setid')); ?>">Rozwinięcie podziału</a></li>
<li class="active">Kategorie</li>
</ol>
<?php endif; ?>

<?php if($this->uri->segment(2) == "storage_set_categories"): ?>
	<ol class="breadcrumb">
	<li><a href="<?php echo site_url('panel/storage/edit/'.$this->session->userdata('id')); ?>">Systemy</a></li>
<li><a href="<?php echo site_url('panel/storage_set_divide'.'/'.$this->session->userdata('id')); ?>">Podziały</a></li>
<li><a href="<?php echo site_url('panel/storage_set'.'/'.$this->session->userdata('setid')); ?>">Zestawy</a></li>
<li class="active">Kategorie</li>
</ol>
<?php endif; ?>

<?php if($this->uri->segment(2) == "profile_element_color_names"): ?>
	<ol class="breadcrumb">
	<li><a href="<?php echo site_url('panel/storage/edit/'.$this->session->userdata('id')); ?>">Systemy</a></li>
<li><a href="<?php echo site_url('panel/storage_set_divide'.'/'.$this->session->userdata('id')); ?>">Podziały</a></li>
<li><a href="<?php echo site_url('panel/storage_elements'.'/'.$this->session->userdata('setid')); ?>">Rozwinięcie podziału</a></li>
<li class="active">Kolorystyka</li>
</ol>
<?php endif; ?>

<?php if($this->uri->segment(2) == "profile_color_names"): ?>
	<ol class="breadcrumb">
	<li><a href="<?php echo site_url('panel/storage/edit/'.$this->session->userdata('id')); ?>">Systemy</a></li>
<li><a href="<?php echo site_url('panel/storage_set_divide'.'/'.$this->session->userdata('id')); ?>">Podziały</a></li>
<li><a href="<?php echo site_url('panel/storage_set'.'/'.$this->session->userdata('setid')); ?>">Zestawy</a></li>
<li class="active">Kolorystyka</li>
</ol>
<?php endif; ?>

	<?php if($this->uri->segment(2) == "element_title"): ?>

<li style="margin-bottom: 5px;" class="btn btn-default dropdown"><?php echo anchor('panel/#','Wybierz język <span class="caret"></span>', array('data-toggle'=>'dropdown'));?>
<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
							<?php foreach ($output['extra'] as $cat): ?>
								<li><?php echo anchor('panel/element_title/'.$cat->id.'', $cat->name);?></li>
							<?php endforeach; ?>
</ul>
</li>
<?php endif; ?>

<?php if(is_array($output)): ?>
	

	

<?php if($this->uri->segment(2) == "images"): ?>
	<li style="margin-bottom: 5px;" class="btn btn-default dropdown"><?php echo anchor('panel/#','Wybierz katalog <span class="caret"></span>', array('data-toggle'=>'dropdown'));?>
<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
							<?php foreach ($output['extra'] as $cat): ?>
								<li><?php echo anchor('panel/images/'.$cat->id.'', $cat->name);?></li>
							<?php endforeach; ?>
</ul>
</li>
	<?php endif; ?>

	
	<?php echo $output['crud']->output; ?>
	
<?php else: ?>
	<?php if(!empty($output)): ?>
	<?php echo $output; ?>
	<?php endif; ?>
<?php endif; ?>