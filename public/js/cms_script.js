$('#article').summernote({

    height: 250,
    toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['fontsize', ['fontsize']],
        ['fontname', ['fontname']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']],
    ],
});


String.prototype.permalink = function () {

    return this.toString().trim().toLowerCase().replace(/\s/g, '-');

};

$('.origin-text').on('input', function () {

    $('.target-text').val($(this).val().permalink());
});

/* File Upload*/

$('#image').on('change', function (e) {
    var fileName = e.target.files[0].name;
    $('.custom-file-label').html(fileName);
});
