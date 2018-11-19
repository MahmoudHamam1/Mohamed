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
    <link rel="stylesheet" href="{{ asset('/theme-assets/vendor/toastr/toastr.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:200,300,400,500,700,800,900&amp;subset=arabic" rel="stylesheet">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('/template-assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/template-assets/css/rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('/template-assets/css/color_skins.css') }}">
    <style>

        html,body {font-family: 'Tajawal', sans-serif;}
        a.text-black { color:#000; transition: color 0.3s ease-out }
        a.text-black:hover { color:#0774ea }
        .nav-search-input { width: 218px }
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

        input.parsley-success, select.parsley-success, textarea.parsley-success,
        input.parsley-error, select.parsley-error, textarea.parsley-error {
            background-color: #fff!important;
        }

        #toast-container.toast-bottom-center > div, #toast-container.toast-top-center > div {
            margin-bottom:0.5em
        }

        .pad-btm1em {
            padding-bottom: 1em;
            padding-right: 1em
        }

        .red {
            color: red
        }

        .md_style {
            margin: 0 1em
        }

        p.page_title {
            margin:1em 1em 0 0 !important;
            font-size:18px;
            font-weight: bold;
        }

        .fix_empty {
            left: -60px !important;
            top: 50px !important;
        }


    </style>
    @yield('style')
</head>

<body class="theme-cyan rtl">

    @include('loading-page.loading-page')

    <div id="wrapper">

        @include('dashboard.top_nav')
        @include('dashboard.sidebar')

        @yield('content')

    </div>
    <!-- wrapper -->


    @yield('script')
</body>
</html>
