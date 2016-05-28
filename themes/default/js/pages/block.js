// Init full text editor
$('#blk-content').summernote({
	height: 300,
	minHeight: null,
	maxHeight: null
});

var postForm = function() {
    var content = $('textarea[name="blk-content"]').html($('#blk-content').code());
}