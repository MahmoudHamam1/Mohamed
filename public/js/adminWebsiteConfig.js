$(document).ready(function() {
    $('.webConfig input[ name="logo"]').on('change', function(e) {
        readURLlogo(this);
    });

    $('.webConfig input[ name="loadingimage"]').on('change', function(e) {
        readURLlocation(this);
    });

    $('.websiteLogo span').on('click', function() {
        $('.webConfig input[ name="logo"]').click();
    })
    $('.websiteLocation span').on('click', function() {
        $('.webConfig input[ name="loadingimage"]').click();
    });
});

function readURLlogo(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.webConfig .websiteLogo img').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function readURLlocation(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.webConfig .websiteLocation img').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}