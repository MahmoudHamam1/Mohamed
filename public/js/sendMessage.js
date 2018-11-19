$(function() {
    $('.connect form').on('submit', function(e) {
        e.preventDefault();
        SendData();
    })
});

function SendData() {
    $formData = $('.connect form').serialize();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: '/sendMessage',
        type: 'post',
        data: $formData,
        beforeSend: function() {
            $('.connect form input[type="text"]').val('');
            $('.connect form textarea').val('');
            $('.alert-success ul').html('');
            $('.alert-danger ul').html('');
            $('.alert-success').css('display', 'none');
            $('.alert-danger').css('display', 'none');
        },
        success: function(data) {
            $('.connect form input[type="text"]').val('');
            $('.connect form textarea').val('');
            $('.alert-success ul').append('<li>' + data + '</li>');
            $('.alert-success').css('display', 'inline');
        },
        error: function(err) {
            $.each(err.responseJSON.errors, function(index, val) {
                $('.alert-danger ul').append('<li>' + val + '</li>');
            });
            $('.alert-danger').css('display', 'inline');
        }
    });
}