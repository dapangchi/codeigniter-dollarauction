$(document).on('change', '.btn-file :file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
});

$('.datepicker-input').datepicker({
    weekStart: 1,
    autoclose: true,
    todayHighlight: true,
    format: 'yyyy-mm-dd',
});

$('.monthpicker-input').datepicker({
    format: "mm-yyyy",
    startView: "months", 
    minViewMode: "months",
    autoclose: true,
});