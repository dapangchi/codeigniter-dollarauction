<div id="loginH1"><?php echo $title; ?></div>

<?php if(!empty($message)): ?>
<div id="infoMessage"><?php echo $message;?></div>
<?php endif; ?>

<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'indentity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <!--p>
    <?php //echo lang('login_remember_label', 'remember');?>
    <?php //echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p-->


  <div id="loginButton"><?php echo form_submit('submit', lang('login_submit_btn'));?></div>

<?php echo form_close();?>