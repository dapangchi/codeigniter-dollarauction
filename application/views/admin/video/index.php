<div class="row">
    <div class="col-lg-12">        
        <div class="pull-right" style="margin-top:-70px;">
            <a class="btn btn-primary" href="<?php echo admin_url('video/create'); ?>">Create Video</a>
        </div>
        
        <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="data-table">
            <colgroup>
                <col width="90"/>
                <col width="100"/>
                <col width=""/>
                <col width="160"/>
                <col width="100"/>
            </colgroup>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Created</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0; ?>
                <?php foreach($rows as $r) { $i++; ?>
                <tr>
                    <td class="text-right"><?php echo $i; ?></td>
                    <td class="text-center"><img src="<?php echo thumbnail($r->vdo_image, 50, 50); ?>" style="width:50px;"/></td>
                    <td><a href="<?php echo admin_url("video/edit/$r->vdo_id"); ?>"><?php echo $r->vdo_title; ?></a></td>
                    <td class="text-center"><?php echo date('Y-m-d H:i', strtotime($r->vdo_created_at)); ?></td>
                    <td class="text-center">
                        <a class="btn btn-info btn-sm" title="Edit" href="<?php echo admin_url("video/edit/$r->vdo_id"); ?>"><i class="glyphicon glyphicon-edit"></i></a>
                        <a class="btn btn-danger btn-sm" title="Remove" href="<?php echo admin_url("video/delete/$r->vdo_id"); ?>"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr> 
                <?php } ?>
            </tbody>
            </table>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->