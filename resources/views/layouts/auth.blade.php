<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Class Plus CRM</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('/theme-assets/vendor/bootstrap/css/bootstrap.min.rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('/theme-assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/theme-assets/vendor/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/theme-assets/vendor/parsleyjs/css/parsley.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:200,300,400,500,700,800,900&amp;subset=arabic" rel="stylesheet">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('/template-assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/template-assets/css/rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('/template-assets/css/color_skins.css') }}">
    <style>
        html,body {font-family: 'Tajawal', sans-serif;}
        .row .card .error-messages {padding: 0}
        .row .card .header {padding: 0!important;}
        .alert {
            padding: .5rem 2rem 0;
            margin-bottom: 0.5rem;
            border-radius: 0;
            border-top-right-radius: .55rem;
            border-top-left-radius: .55rem;
        }
        .parsley-errors-list li {
            font-size: 1em;
            margin-top: 5px;
        }
        .auth-main .card, .card .header {
            padding:0;
        }

        .auth-main .lead {
            margin-top: 20px
        }

    </style>
    @yield('style')
</head>

<body class="theme-cyan rtl">

@yield('content')


@yield('script')
</body>
</html>
