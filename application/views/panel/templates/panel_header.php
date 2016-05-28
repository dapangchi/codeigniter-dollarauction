<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Panel zarządzania - Nevato</title>
  

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/panel.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css" />
<link rel="stylesheet" media="screen" type="text/css" href="<?php echo base_url(); ?>assets/css/colorpicker.css" />

<script src="<?php echo base_url();?>assets/scripts/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>assets/scripts/bootstrap.min.js"></script>


<script>
	$('.dropdown-toggle').dropdown();
</script>

<script>
jQuery(document).ready(function ($) {
    $('.tipper').tooltip({
        
        position: {
            my: "left top+15",
            at: "left bottom"
        },
        content: function(){
			return $(this).prop('title');
        },
       
    });

});
</script>
</head>
<body>
		<div id="navigation">
			<ul class="nav">
				<?php if($this->ion_auth->in_group('admin')): ?>
					<li><?php echo anchor('panel/main_company','O firmie');?></li>
                    <li class="dropdown"><?php echo anchor('panel/#','Kontakt <span class="caret"></span>', array('data-toggle'=>'dropdown'));?>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><?php echo anchor('panel/contact','Wysłane wiadomości');?></li>
							<li><?php echo anchor('panel/contact_data','Adres e-mail');?></li>
						    <li><?php echo anchor('panel/contact_content','Dane kontaktowe');?></li>   
						</ul>
                    </li>
					<li class="dropdown"><?php echo anchor('panel/#','Baza zdjęć <span class="caret"></span>', array('data-toggle'=>'dropdown'));?>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><?php echo anchor('panel/images','Obrazy');?></li>
						    <li><?php echo anchor('panel/images_categories','Kategorie obrazów');?></li>   
						</ul>
                    </li>
                   
                    <li><?php echo anchor('panel/settings','Ustawienia strony');?></li>								
										 

                    
                <?php endif; ?>
			</ul> 
		
			<ul class="nav right">
			<li><?php echo $this->ion_auth->get_user_email(); ?></li>
			<li class="divider-vertical"></li>
			<li><?php echo anchor('panel/logout','Wyloguj się');?></li>
			</ul>
		</div>
		
		<div id="container">
			
			<div id="content">
