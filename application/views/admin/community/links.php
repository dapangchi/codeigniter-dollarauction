<div class="row">
    <div class="col-lg-12">        
        <div class="pull-right" style="margin-top:-70px;">
            <a class="btn btn-primary" href="<?php echo admin_url('community/link_create'); ?>">Create Link</a>
        </div>
        
        <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="data-table">
            <colgroup>
                <col width="90"/>
                <col width="200"/>
                <col width=""/>
                <col width="100"/>
                <col width="160"/>
                <col width="100"/>
            </colgroup>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Link</th>
                    <th>Sort</th>
                    <th>Created</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0; ?>
                <?php foreach($rows as $r) { $i++; ?>
                <tr>
                    <td class="text-right"><?php echo $i; ?></td>
                    <td><?php echo $r->name; ?></td>
                    <td><?php echo $r->link; ?></td>
                    <td class="text-right"><?php echo $r->sort; ?></td>
                    <td class="text-center"><?php echo date('Y-m-d H:i', strtotime($r->created_at)); ?></td>
                    <td class="text-center">
                        <a class="btn btn-info btn-sm" title="Edit" href="<?php echo admin_url("community/link_edit/$r->id"); ?>"><i class="glyphicon glyphicon-edit"></i></a>
                        <a class="btn btn-danger btn-sm" title="Remove" href="<?php echo admin_url("community/link_delete/$r->id"); ?>"><i class="glyphicon glyphicon-remove"></i></a>
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