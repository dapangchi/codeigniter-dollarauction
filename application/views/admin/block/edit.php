<div class="row">
    <div class="col-lg-12">
        <?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal', 'id' => 'aform', 'autocomplete' => 'off', 'onsubmit' => "return postForm()")); ?>
            <div class="form-group <?php echo form_error('blk-title') ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-2"><span class="red">*</span>Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="blk-title" name="blk-title" placeholder="Title" value="<?php echo set_value('blk-title', $row->blk_title); ?>">
                    <span class="help-inline"><?php echo form_error('blk-title');?></span>
                </div>
            </div>
            
            <div class="form-group <?php echo form_error('blk-content') ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-2"><span class="red">*</span>Content</label>
                <div class="col-sm-10">
                    <textarea id="blk-content" name="blk-content"><?php echo set_value('blk-content', $row->blk_content); ?></textarea>
                    <span class="help-inline"><?php echo form_error('blk-content');?></span>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button class="btn btn-primary" type="submit" name="btn-save" value="1">Save</button>
                </div>    
            </div>
        <?php echo form_close(); ?>
                
    </div>
</div>