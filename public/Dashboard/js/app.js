$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

$('#sidebarToggle').click(function () {
    var url_collapse = $(this).data('url');
    $.get(url_collapse);
});

//Pretty file selector
$('.pretty-file-selector button').click(function (e) {
    $(this).closest('.pretty-file-selector').find('input[type=file]').trigger('click');
});