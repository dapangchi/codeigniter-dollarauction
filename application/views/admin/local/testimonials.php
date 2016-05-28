<div class="row">
    <div class="col-lg-12">        
        <div class="pull-right" style="margin-top:-70px;">
            <a class="btn btn-primary" href="<?php echo admin_url('testimonial/create'); ?>">Create Tetimonial</a>
        </div>
        
        <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="data-table">
            <colgroup>
                <col width="90"/>
                <col width="100"/>
                <col width=""/>
                <col width="120"/>
                <col width="150"/>
                <col width="160"/>
                <col width="100"/>
            </colgroup>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>City</th>
                    <th>Created</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0; ?>
                <?php foreach($rows as $r) { $i++; ?>
                <tr>
                    <td class="text-right text-middle"><?php echo $i; ?></td>
                    <td class="text-center text-middle"><img src="<?php echo thumbnail($r->tstm_avatar, 50, 50); ?>" style="width:50px;"/></td>
                    <td class="text-middle"><?php echo $r->tstm_name; ?></td>
                    <td class="text-center text-middle"><?php echo $r->tstm_date; ?></td>
                    <td class=" text-middle"><?php echo $r->tstm_city; ?></td>
                    <td class="text-center text-middle"><?php echo date('Y-m-d H:i', strtotime($r->tstm_created_at)); ?></td>
                    <td class="text-center text-middle">
                        <a class="btn btn-info btn-sm" title="Edit" href="<?php echo admin_url("local/testimonial_edit/$r->tstm_id"); ?>"><i class="glyphicon glyphicon-edit"></i></a>
                        <a class="btn btn-danger btn-sm" title="Remove" href="<?php echo admin_url("local/testimonial_delete/$r->tstm_id"); ?>"><i class="glyphicon glyphicon-remove"></i></a>
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