<div class="row">
    <div class="col-lg-12">
        
        <?php echo form_open_multipart($this->uri->uri_string(), array('class' => 'form-horizontal', 'id' => 'aform', 'autocomplete' => 'off')); ?>
            <div class="form-group <?php echo form_error('link-name') ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-2"><span class="red">*</span>Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="link-name" name="link-name" placeholder="Name" value="<?php echo set_value('link-name'); ?>" required>
                    <span class="help-inline"><?php echo form_error('link-name');?></span>
                </div>
            </div>
            
            <div class="form-group <?php echo form_error('link-url') ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-2"><span class="red">*</span>Link</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="link-url" name="link-url" placeholder="Link" value="<?php echo set_value('link-url'); ?>" required>
                    <span class="help-inline"><?php echo form_error('link-url');?></span>
                </div>
            </div>
            
            <div class="form-group <?php echo form_error('link-sort') ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-2"><span class="red">*</span>Sort</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="link-sort" name="link-sort" placeholder="Sort" value="<?php echo set_value('link-sort', 1); ?>" required>
                    <span class="help-inline"><?php echo form_error('link-sort');?></span>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-2">
                    <a class="btn btn-default" href="<?php echo admin_url('community/links'); ?>">Back</a>
                    <button class="btn btn-primary" type="submit" name="btn-save" value="1">Save</button>
                    <button class="btn btn-primary" type="submit" name="btn-save-edit" value="1">Save &amp; Continue</button>
                </div>    
            </div>
        <?php echo form_close(); ?>
                
    </div>
</div>