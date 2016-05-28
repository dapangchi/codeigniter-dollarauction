<div id="loginH1"><?php echo $title; ?></div>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/register");?>

      
      <p>
            <?php echo lang('create_user_email_label', 'email');?> <br />
            <?php echo form_input($email);?>
      </p>

      <p>
            <?php echo lang('create_user_password_label', 'password');?> <br />
            <?php echo form_input($password);?>
      </p>

      <p>
            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
            <?php echo form_input($password_confirm);?>
      </p>


      <p><?php echo form_submit('submit', lang('register_user_submit_btn'));?></p>

<?php echo form_close();?>
