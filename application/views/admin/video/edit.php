<div class="row">
    <div class="col-lg-12">
        <?php echo form_open_multipart($this->uri->uri_string(), array('class' => 'form-horizontal', 'id' => 'aform', 'autocomplete' => 'off')); ?>
            <div class="form-group <?php echo form_error('vdo-title') ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-2">Title</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="vdo-title" name="vdo-title" placeholder="Title" value="<?php echo set_value('vdo-title', $row->vdo_title); ?>">
                    <span class="help-inline"><?php echo form_error('vdo-title');?></span>
                </div>
            </div>
            
            <div class="form-group <?php echo form_error('vdo-link') ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-2">Link</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="vdo-link" name="vdo-link" placeholder="Link" value="<?php echo set_value('vdo-link', $row->vdo_link); ?>">
                    <span class="help-inline"><?php echo form_error('vdo-link');?></span>
                </div>
            </div>
            
            <div class="form-group <?php echo isset($vdo_image_message) ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-2">Image</label>
                <div class="col-sm-8">
                    <div class="vdo-img-box" style="margin-bottom:5px;">
                        <img src="<?php echo thumbnail($row->vdo_image, 300, 300); ?>" id="vdo-image-img"/>
                    </div>
                    
                    <span class="btn btn-default btn-file">
                        Browse <input type="file" id="vdo-image" name="vdo-image">
                    </span><br/>
                    <span class="help-inline"><?php echo isset($vdo_image_message) ? $vdo_image_message : '';?></span>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-2">
                    <a class="btn btn-default" href="<?php echo admin_url('video'); ?>">Back</a>
                    <button class="btn btn-primary" type="submit" name="btn-save" value="1">Save</button>
                    <button class="btn btn-primary" type="submit" name="btn-save-edit" value="1">Save &amp; Continue</button>
                </div>    
            </div>
        <?php echo form_close(); ?>
                
    </div>
</div>