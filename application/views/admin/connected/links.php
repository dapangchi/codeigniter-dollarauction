<div class="row">
    <div class="col-lg-12">
        <?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal', 'id' => 'aform', 'autocomplete' => 'off', 'onsubmit' => "return postForm()")); ?>
            <div class="form-group">
                <label class="control-label col-sm-2">Facebook</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook" value="<?php echo set_value('facebook', $settings['social_facebook']); ?>">
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-sm-2">Google</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="google" name="google" placeholder="Google" value="<?php echo set_value('google', $settings['social_google']); ?>">
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-sm-2">Linkedin</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Linkedin" value="<?php echo set_value('linkedin', $settings['social_linkedin']); ?>">
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-sm-2">Twitter</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter" value="<?php echo set_value('twitter', $settings['social_twitter']); ?>">
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-sm-2">Pinterest</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="pinterest" name="pinterest" placeholder="Pinterest" value="<?php echo set_value('pinterest', $settings['social_pinterest']); ?>">
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-sm-2">Youtube</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="youtube" name="youtube" placeholder="Youtube" value="<?php echo set_value('youtube', $settings['social_youtube']); ?>">
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-2">
                    <button class="btn btn-primary" type="submit" name="btn-save" value="1">Save</button>
                </div>    
            </div>
        <?php echo form_close(); ?>
                
    </div>
</div>