<div class="row">
    <div class="col-lg-12">
        
        <?php echo form_open_multipart($this->uri->uri_string(), array('class' => 'form-horizontal', 'id' => 'aform', 'autocomplete' => 'off')); ?>
            <div class="form-group <?php echo form_error('title') ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-2"><span class="red">*</span>Title</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo set_value('title'); ?>" required>
                    <span class="help-inline"><?php echo form_error('title');?></span>
                </div>
            </div>
            
            <div class="form-group <?php echo form_error('content') ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-2"><span class="red">*</span>Content</label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="content" name="content" placeholder="Content" rows="5" required><?php echo set_value('content'); ?></textarea>
                    <span class="help-inline"><?php echo form_error('content');?></span>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-2">
                    <a class="btn btn-default" href="<?php echo admin_url('step'); ?>">Back</a>
                    <button class="btn btn-primary" type="submit" name="btn-save" value="1">Save</button>
                    <button class="btn btn-primary" type="submit" name="btn-save-edit" value="1">Save &amp; Continue</button>
                </div>    
            </div>
        <?php echo form_close(); ?>
                
    </div>
</div>