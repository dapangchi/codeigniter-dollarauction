<div class="row">
    <div class="col-lg-12">
        
        <?php echo form_open_multipart($this->uri->uri_string(), array('class' => 'form-horizontal', 'id' => 'aform', 'autocomplete' => 'off')); ?>
            <input type="hidden" id="image_data" name="image_data" value="">
            
            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="text-right">
                        <a class="btn btn-default" href="<?php echo admin_url('promotion'); ?>">Back</a>
                        <button class="btn btn-primary btn-save" type="submit" name="btn-save" value="1">Save</button>
                        <button class="btn btn-primary btn-save" type="submit" name="btn-save-edit" value="2">Save &amp; Continue</button>
                    </div>
                </div>              
            </div>
            
            <div class="form-group <?php echo form_error('title') ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-2">Title</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo set_value('title', $row->title); ?>" required>
                    <span class="help-inline"><?php echo form_error('title');?></span>
                </div>
            </div>
            
            <!--<div class="form-group <?php //echo form_error('url') ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-2">Url</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="url" name="url" placeholder="Url" value="<?php //echo set_value('url', $row->url); ?>">
                    <span class="help-inline"><?php //echo form_error('url');?></span>
                </div>
            </div>-->
            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="title">Images</label>
                <div class="col-sm-8">
                    <div class="table-responsive">
                        <table id="image-table" class="table table-bordered">
                        <colgroup>
                            <col width="100"/>
                            <col width=""/>
                            <col width=""/>
                            <col width="100"/>
                            <col width="100"/>
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="text-center">Thumbnail</th>
                                <th>Label</th>
                                <th>Url</th>
                                <th class="text-center">Sort</th>
                                <th class="text-center">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($images as $img) { ?>
                            <tr class="old" data-index="<?php echo $img->id; ?>">
                                <td>
                                    <img src="<?php echo thumbnail($img->image, 100, 100); ?>" class="thumbnail" width="100"/>
                                </td>
                                <td><input type="text" class="img-label form-control" value="<?php echo $img->label; ?>"/></td>
                                <td><input type="text" class="img-url form-control" value="<?php echo $img->url; ?>"/></td>
                                <td><input type="text" class="img-sort form-control" value="<?php echo $img->sort; ?>"/></td>
                                <td>
                                    <input type="checkbox" class="img-remove form-control" value="1" style="display:none;"/>
                                    <input type="button" class="btn btn-danger btn-remove" value="Remove"/>
                                </td>    
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5">
                                    <input type="file" name="file_upload" id="file_upload" />
                                </td>
                            </tr>
                        </tfoot>    
                        </table>
                    </div>                        
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="text-right">
                        <a class="btn btn-default" href="<?php echo admin_url('promotion'); ?>">Back</a>
                        <button class="btn btn-primary btn-save" type="submit" name="btn-save" value="1">Save</button>
                        <button class="btn btn-primary btn-save" type="submit" name="btn-save-edit" value="1">Save &amp; Continue</button>
                    </div>
                </div>              
            </div>
        <?php echo form_close(); ?>
                
    </div>
</div>


<table style="display:none;">
<tr id="row-template" class="new">
    <td>
        <div class="place-holder" data-src=""><span>Roll Over for preview</span></div>
        <img src="<?php echo Template::theme_url('images/spacer.gif'); ?>" class="thumbnail" width="100" style="display:none;"/>
    </td>
    <td><input type="text" class="img-label form-control"/></td>
    <td><input type="text" class="img-url form-control"/></td>
    <td><input type="text" class="img-sort form-control"/></td>
    <td>
        <input type="checkbox" class="img-remove form-control" style="display:none;"/>
        <input type="button" class="btn btn-danger btn-remove" value="Remove"/>
    </td>
</tr>
</table>