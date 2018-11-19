<script>
    $(function() {

        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-bottom-center",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "10000",
            "timeOut": "10000",
            "extendedTimeOut": "10000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut",
            "rtl":true,
            "tapToDismiss": true
        }

        var errorHeader = $('.card .header');

        if ( errorHeader.length > 0 ) {

            if ( errorHeader.hasClass('error-messages') ) {

                errorHeader.hide(0);

                var messages = errorHeader.find('.alert ul li');

                messages.each(function(i){

                    setTimeout(function(){

                        toastr.warning(messages.eq(i).substr(1));

                    }, i * 1000);

                });

            }
        }

        var successHeader = $('div.card div.header div.alert-success');

        successHeader.hide(0);

        if ( successHeader.length > 0 ) {

            toastr.success( successHeader.text() );
        }

    });
</script>
