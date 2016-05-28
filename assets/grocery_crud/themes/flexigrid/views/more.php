<?php  

	$this->set_css($this->default_theme_path.'/flexigrid/css/flexigrid.css');
	$this->set_js($this->default_theme_path.'/flexigrid/js/jquery.form.js');
	$this->set_js($this->default_theme_path.'/flexigrid/js/flexigrid-edit.js');
	
//$this->set_js('assets/grocery_crud/js/jquery_plugins/jquery.fancybox.pack.js');
//
//$this->set_css('assets/grocery_crud/css/jquery_plugins/fancybox/jquery.fancybox.css');
//
//$this->set_js('assets/grocery_crud/js/jquery_plugins/load-image.min.js');
//$this->set_js('assets/grocery_crud/js/jquery_plugins/jquery.easing-1.3.pack.js');
//$this->set_js('assets/grocery_crud/js/jquery_plugins/config/jquery.fancybox.config.js');


$this->set_css($this->default_css_path.'/ui/simple/'.grocery_CRUD::JQUERY_UI_CSS);
$this->set_css($this->default_css_path.'/jquery_plugins/file_upload/file-uploader.css');
$this->set_css($this->default_css_path.'/jquery_plugins/file_upload/jquery.fileupload-ui.css');

$this->set_js($this->default_javascript_path.'/jquery_plugins/ui/'.grocery_CRUD::JQUERY_UI_JS);
$this->set_js($this->default_javascript_path.'/jquery_plugins/tmpl.min.js');
$this->set_js($this->default_javascript_path.'/jquery_plugins/load-image.min.js');

$this->set_js($this->default_javascript_path.'/jquery_plugins/jquery.iframe-transport.js');
$this->set_js($this->default_javascript_path.'/jquery_plugins/jquery.fileupload.js');
$this->set_js($this->default_javascript_path.'/jquery_plugins/config/jquery.fileupload.config.js');

//Fancybox
$this->set_css($this->default_css_path.'/jquery_plugins/fancybox/jquery.fancybox.css');

$this->set_js($this->default_javascript_path.'/jquery_plugins/jquery.fancybox.pack.js');
$this->set_js($this->default_javascript_path.'/jquery_plugins/jquery.easing-1.3.pack.js');	
$this->set_js($this->default_javascript_path.'/jquery_plugins/config/jquery.fancybox.config.js');	

?>

<div class="flexigrid crud-form" style='width: 100%;'>
	<div class="mDiv">
		<h3>
			<div class='ftitle-left'>
				Szczegóły <?php echo $subject?>
			</div>		
			<div class='clear'></div>				
		</h3>
		<!--div title="<?php echo $this->l('minimize_maximize');?>" class="ptogtitle">
			<span></span>
		</div-->	
	</div>
<div id='main-table-box'>
	
	<div class='form-div'>
		<?php
		$counter = 0; 
			foreach($fields as $field)
			{
				$even_odd = $counter % 2 == 0 ? 'odd' : 'even';
				$counter++;
		?>
			<div class='form-field-box <?php echo $even_odd?>' id="<?php echo $field->field_name; ?>_field_box">
				<div class='form-display-as-box' id="<?php echo $field->field_name; ?>_display_as_box">
					<?php echo $input_fields[$field->field_name]->display_as?><?php echo ($input_fields[$field->field_name]->required)? "<span class='required'>*</span> " : ""?> :
				</div>
				<div class='form-input-box' id="<?php echo $field->field_name; ?>_input_box">
					<?php echo $input_fields[$field->field_name]->input?>
				</div>
				<div class='clear'></div>	
			</div>
		<?php }?>
		<?php if(!empty($hidden_fields)){?>
		<!-- Start of hidden inputs -->
			<?php 
				foreach($hidden_fields as $hidden_field){
					echo $hidden_field->input;
				}
			?>
		<!-- End of hidden inputs -->
		<?php }?>		
		<div id='report-error' class='report-div error'></div>
		<div id='report-success' class='report-div success'></div>		
	</div>
	<div class="pDiv">
		<!--div class='form-button-box'>
			<input type='submit' value='<?php echo $this->l('form_update_changes'); ?>' class="btn btn-large"/>
		</div-->

<div class='form-button-box'>
			<input type='button' value='<?php echo $this->l('form_back'); ?>' onclick='javascript: return goBackToList()' class="btn btn-large" />
</div>
		
		<div class='clear'></div>	
	</div>
	
</div>
</div>	
<script>
	var validation_url = '<?php echo $validation_url?>';
	var list_url = '<?php echo $list_url?>';

	var message_alert_edit_form = "<?php echo $this->l('alert_edit_form')?>";
	var message_update_error = "<?php echo $this->l('update_error')?>";
</script>