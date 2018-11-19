$(function() {
    $('* .viewslide').on('click', function() {
        getMessage($(this).val());
    });
    $('* .cancel').on('click', function() {
        $('.editslide').fadeOut(300);
        $('.body').css('opacity', 1);
    });
});

function getMessage(id) {
    $.ajax({
        url: "/sliders/" + id,
        type: 'get',
        success: function(respond) {
            $('.editslide input[name="ar[title]"]').val(respond['translations'][0]['title']);
            $('.editslide input[name="en[title]"]').val(respond['translations'][1]['title']);
            $('.editslide textarea[name="ar[description]"]').html(respond['translations'][0]['description']);
            $('.editslide textarea[name="en[description]"]').html(respond['translations'][1]['description']);
            $('.editslide form').attr('action', '/sliders/' + id);
            $('.editslide').fadeIn(300);
            $('.body').css('opacity', 0.2);
        }
    });
}