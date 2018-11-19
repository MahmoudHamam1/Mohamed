$(document).ready(function() {
    $('.webConfig input[ name="About"]').on('change', function(e) {
        readURLAbout(this);
    });

    $('.webConfig input[ name="entertainment"]').on('change', function(e) {
        readURLentertainment(this);
    });
    $('.webConfig input[ name="education"]').on('change', function(e) {
        readURLeducation(this);
    });

    $('.webConfig input[ name="services"]').on('change', function(e) {
        readURLservices(this);
    });
    $('.webConfig input[ name="hotel_tourism"]').on('change', function(e) {
        readURLhotel_tourism(this);
    });

    $('.webConfig input[ name="footer1"]').on('change', function(e) {
        readURLfooter1(this);
    });
    $('.webConfig input[ name="footer2"]').on('change', function(e) {
        readURLfooter2(this);
    });

    $('.webConfig input[ name="footer3"]').on('change', function(e) {
        readURLfooter3(this);
    });

    $('.About span').on('click', function() {
        $('.webConfig input[ name="About"]').click();
    });

    $('.entertainment span').on('click', function() {
        $('.webConfig input[ name="entertainment"]').click();
    });
    $('.education span').on('click', function() {
        $('.webConfig input[ name="education"]').click();
    });

    $('.services span').on('click', function() {
        $('.webConfig input[ name="services"]').click();
    });
    $('.hotel_tourism span').on('click', function() {
        $('.webConfig input[ name="hotel_tourism"]').click();
    });

    $('.footer1 span').on('click', function() {
        $('.webConfig input[ name="footer1"]').click();
    });
    $('.footer2 span').on('click', function() {
        $('.webConfig input[ name="footer2"]').click();
    });

    $('.footer3 span').on('click', function() {
        $('.webConfig input[ name="footer3"]').click();
    });
});

function readURLAbout(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.webConfig .About img').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function readURLentertainment(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.webConfig .entertainment img').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function readURLeducation(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.webConfig .education img').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function readURLservices(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.webConfig .services img').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function readURLhotel_tourism(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.webConfig .hotel_tourism img').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function readURLfooter1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.webConfig .footer1 img').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function readURLfooter2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.webConfig .footer2 img').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function readURLfooter3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.webConfig .footer3 img').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}