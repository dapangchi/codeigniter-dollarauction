<?php
    $no_str = array('1st', '2nd', '3rd', '4th', '5th', '6th', '7th', '8th', '9th', '10th');
?>
<div class="row">
    <div class="col-lg-12">        
        <div class="pull-right" style="margin-top:-70px;">&nbsp;</div>
        
        <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="data-table">
            <colgroup>
                <col width="200"/>
                <col width=""/>
                <col width="100"/>
            </colgroup>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0; ?>
                <?php foreach($no_str as $ind => $str) { ?>
                <tr>
                    <td class="text-middle"><?php echo $str; ?> Reason</td>
                    <td class="text-middle"><?php echo isset($rows[$ind]) ? character_limiter($rows[$ind]->content, 100) : ''; ?></td>
                    <td class="text-center text-middle">
                        <?php $i++; ?>
                        <a class="btn btn-info btn-sm" title="Edit" href="<?php echo admin_url("reason/edit/$i"); ?>"><i class="glyphicon glyphicon-edit"></i></a>
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