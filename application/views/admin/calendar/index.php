<div class="row">
    <div class="col-lg-12" style="padding-bottom:50px;">        
        <?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal', 'id' => 'aform', 'autocomplete' => 'off')); ?>
        <div id="js-calendar" class='fc fc-ltr fc-unthemed'>
            <?php echo draw_calendar($month, $year, $events); ?>
        </div>
        <?php form_close(); ?>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->