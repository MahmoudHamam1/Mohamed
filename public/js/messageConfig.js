$(function() {
    $('* .viewMessage').on('click', function() {
        getMessage($(this).attr('id'));
    });
    $('* .cancel').on('click', function() {
        $('.showMessage').fadeOut(300);
    });
});

function getMessage(id) {
    $.ajax({
        url: "/website/messages/" + id,
        type: 'get',
        success: function(respond) {
            $('.showMessage h3').html(respond['email']);
            $('.showMessage p').html(respond['message']);
            $('.showMessage').fadeIn(300);
        }
    });
}