<!doctype html>
<html lang="{{ App::getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="theme-color" content="#1B191A">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="msapplication-navbutton-color" content="#1B191A">
    <!-- Windows Phone -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#1B191A">
    <!-- iOS Safari -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- TODO -->
    
    <link rel='stylesheet' href='{{ asset("css/bootstrap.min.css") }}' />
    <link rel='stylesheet' href='{{ asset("css/font-awesome.min.css") }}' />
    <link rel='stylesheet' href='{{ asset("css/owl.carousel.min.css") }}' />
    <link rel='stylesheet' href='{{ asset("css/style.css") }}' />
    <link rel='stylesheet' href='{{ asset("css/md_style.css") }}' />
    @if(App::getLocale()=='ar')
    <link rel='stylesheet' href='{{ asset("css/md_style_rtl.css") }}' />
    @endif
    @yield('style')
        <link rel='stylesheet' href='{{ asset("css/edit.css") }}' />

    <link href="https://fonts.googleapis.com/css?family=Tajawal:200,300,400,500,700,800,900&amp;subset=arabic" rel="stylesheet">
</head>

<body>

    <!-- header-->
    <div class="header">

        <div class="register">
        @guest
            <div class="right">
                <div class="reg-btn hidden-xs">
                    <a class="lang" href="{{ route('register') }}"> <i class="icon fa fa-user fa-lg" aria-hidden="true"></i> {{ trans('labels1.regist') }} </a>
                </div>
            </div>

            <div class="left">
                <div class="reg-btn">
                    <a class="lang" href="{{ route('login') }}"> <i class="icon fa fa-sign-in fa-lg" aria-hidden="true"></i>  {{ trans('labels1.login') }} </a>
                </div>
            </div>

            <div class="right addingToFrinds">
                <div class="reg-btn ">
                    <a class="lang" href="{{ route('register') }}"> <i class="icon fa fa-user fa-lg" aria-hidden="true"></i> {{ trans('labels1.joinClassPlus') }}</a>
                </div>
            </div>
            @else
                <div class="right">
                    <div class="reg-btn">
                        <a class="lang" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> <i class="icon fa fa-sign-out fa-lg" aria-hidden="true"></i> {{ trans('labels1.logout') }} </a>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>

                <div class="left">
                <div class="reg-btn">
                    <a class="lang" href="/dashboard"> <i class="icon fa fa-bar-chart fa-lg" aria-hidden="true"></i>  {{ trans('labels1.dashboard') }} </a>
                </div>
            </div>
            @endguest
            <div class="clear"></div>

            <p class="hotline hidden-xs">
                <a href="tel:{{ $data['website']->phone_number }}">{{ $data['website']->phone_number }} &nbsp; <i class="fa fa-phone" aria-hidden="true"></i></a>
            </p>
        </div>

        <!-- register -->


        <div class="search_wrap">

            <div class="lang-anchor">
            @if(App::getLocale()=='ar')
                <a href="/setLang/en">En</a>
            @else
                <a href="/setLang/ar">عربي</a>
            @endif
            </div>

            <div class="searchbox">

                <form>
                    <input type="search" placeholder="&#xF002; &nbsp; {{ trans('labels1.search') }}" autocomplete="off" dir="rtl">
                </form>

            </div>

        </div>
        <!-- search_wrap -->


        <div class="logo-wrap">
            <!--start logo-->
            <div class="logo img-responsive">
                <img src="{{ asset('images/logo') }}/{{ $data['website']->logo }}" />
            </div>
            <!--end logo-->
        </div>

    </div>
    <!-- header end -->

    <!--start nav-bar-->
    <nav class="navbar navbar-default ">

        <div class="container">

            <div class="navbar-header">
                <!--buttom for mobile screen-->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournavbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <p class="hotlineNav hotline">
                    <a href="tel:{{ $data['website']->phone_number }}">{{ $data['website']->phone_number }} &nbsp; <i class="fa fa-phone" aria-hidden="true"></i></a>
                </p>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="ournavbar">
                <div class="direction">
                    <ul class="nav navbar-nav">
                        <li class=" joinLink"><a href="{{ route('join') }}">{{ trans('labels1.contactUs') }}</a></li>
                        <li class=" newsLink"><a href="#"> {{ trans('labels1.news') }} </a></li>
                        <li class=" offerLink"><a href="#">  {{ trans('labels1.offer') }} </a></li>
                        <li class=" partenerLink"><a href="#"> {{ trans('labels1.partener') }} </a></li>
                        <li class=" depLink"><a href="#"> {{ trans('labels1.departments') }} </a></li>
                        <li class=" whoLink"><a href="{{ route('who-us') }}">{{ trans('labels1.whoUs') }}</a></li>
                        <li class=" active homeLink"><a href="{{ route('home') }}">{{ trans('labels1.home') }} </a></li>
                        @if(App::getLocale()=='ar')
                            <li class="visible-xs"><a href="/setLang/en">En</a></li>
                        @else
                            <li class="visible-xs"><a href="/setLang/ar">عربي</a></li>
                        @endif
                        <li class="visible-xs"><a href="#"> {{ trans('labels1.search') }} </a></li>
                    </ul>

                </div>
                <!-- direction -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!--end of the container -->
    </nav>
    <!-- end nav -->

    <!-- Social media -->
    <div class="share-it">
        <div class="facebook">
            <a href="{{ $data['website']->facebook }}"><i class="fa fa-facebook"></i></a>
        </div>
        <div class="twitter">
            <a href="{{ $data['website']->twitter }}"><i class="fa fa-twitter"></i></a>
        </div>
        <div class="google hidden-xs">
            <a href="{{ $data['website']->google }}"><i class="fa fa-google-plus"></i></a>
        </div>
        <div class="rss">
            <a href="{{ $data['website']->insta }}"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="linkedin">
            <a href="{{ $data['website']->snapchat }}"><i class="fa fa-snapchat"></i></a>
        </div>
        <div class="youtube cboxElement">
            <a href="{{ $data['website']->youtube }}"><i class="fa fa-youtube"></i></a>
        </div>
        <div class="clear"></div>
    </div>
    <!-- end Social media -->

    <!--start carousel-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
         @if(count($data['slider'])>0 )
        <ol class="carousel-indicators">
        @for($i=0;$i<count($data['slider']);$i++)
            @if($i==0)
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                @continue
            @endif
            <li data-target="#myCarousel" data-slide-to="{{ $i }}"></li>
        @endfor
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
       
            @foreach($data['slider'] as $sld)
                @if($data['slider'][0]->id==$sld->id)
                    <div class="item active">
                        <img src="{{asset('images/slider')}}/{{ $sld->image }}" alt="{{ $sld->title }}" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>{{ $sld->title }}</h3>
                            <p>{{ $sld->description }}</p>
                        </div>
                    </div>
                @else
                <div class="item">
                        <img src="{{asset('images/slider')}}/{{ $sld->image }}" alt="{{ $sld->title }}" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>{{ $sld->title }}</h3>
                            <p>{{ $sld->description }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
       
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
     @endif
    </div>
    <!--end  carousel-->
    @yield('content')
    <!-- start footer -->
    <div class="footer">
        <div class="container" @if(App::getLocale()=='ar') dir="rtl" @else dir="ltr" @endif>
            <div class="row "@if(App::getLocale()=='ar') dir="rtl" @else dir="ltr" @endif>

                <div class="col-sm-4 col-xs-12 third">

                    <p class="footer_title">{{ trans('labels1.contactInfo') }}</p>

                    <table>
                        <tr>
                            <td><i class="fa fa-mobile" aria-hidden="true"></i></td>
                            <td><a href="tel:{{ $data['website']->phone_number }}">{{ $data['website']->phone_number }}</a></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-envelope-o" aria-hidden="true"></i> </td>
                            <td><a href="mailto:{{ $data['website']->email }}">{{ $data['website']->email }}</a></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-map-marker" aria-hidden="true"></i> </td>
                            <td><a href="#">{{ $data['website']->location }} </a></td>
                        </tr>
                    </table>

                </div>

                <div class="col-sm-4 col-xs-12 second">

                    <p class="footer_title">{{ trans('labels1.links') }}</p>

                    <div class="row">

                        <div class="col-sm-6 col-xs-12">

                            <ul class="list-unstyled">
                                <li>Copiling </li>
                                <li>Tax </li>
                                <li>Corporate</li>
                                <li>Individual</li>
                                <li>Annual</li>
                                <li>Transfer</li>
                                <li>Advisory</li>
                            </ul>
                        </div>

                        <div class="col-sm-6 col-xs-12">

                            <ul class="list-unstyled">
                                <li>Copiling </li>
                                <li>Tax </li>
                                <li>Corporate</li>
                                <li>Individual</li>
                                <li>Annual</li>
                                <li>Transfer</li>
                                <li>Advisory</li>
                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-sm-4 col-xs-12 first">
                    <div class="footer_img_1">
                         @if($data['images']->footer1 != null)
                            <img src="{{ asset('images/websiteImages/'.$data['images']->footer1 ) }}" />
                        @endif
                    </div>
                    <br>
                    <div class="footer_img_2">
                     @if($data['images']->footer2 != null)
                            <img src="{{ asset('images/websiteImages/'.$data['images']->footer2 ) }}" />
                        @endif
                    </div>
                    <br>
                    <div class="footer_img_3">
                         @if($data['images']->footer3 != null)
                            <img src="{{ asset('images/websiteImages/'.$data['images']->footer3 ) }}" />
                        @endif
                    </div>

                </div>

                <div class="col-sm-12 footer-social">
                    <div class="my-icon text-center">
                        <a target="_blank" rel="noopener noreferrer" href="{{ $data['website']->facebook }}"> <i class=" a fa fa-facebook fa-lg wow fadeInRight"></i></a>
                        <a target="_blank" rel="noopener noreferrer" href="{{ $data['website']->twitter }}"> <i class=" c fa fa-twitter fa-lg wow fadeInRight"></i></a>
                        <a target="_blank" rel="noopener noreferrer" href="{{ $data['website']->google }}"> <i class=" b fa fa-google-plus fa-lg wow fadeInRight"></i></a>
                        <a target="_blank" rel="noopener noreferrer" href="{{ $data['website']->insta }}"> <i class=" a fa fa-instagram fa-lg wow fadeInRight"></i></a>
                        <a target="_blank" rel="noopener noreferrer" href="{{ $data['website']->snapchat }}"> <i class=" c fa fa-snapchat fa-lg wow fadeInRight"></i></a>
                        <a target="_blank" rel="noopener noreferrer" href="{{ $data['website']->youtube }}"> <i class=" b fa fa-youtube fa-lg wow fadeInRight"></i></a>
                        <a target="_blank" rel="noopener noreferrer" href="{{ $data['website']->android }}"> <i class=" a fa fa-android fa-lg wow fadeInRight"></i></a>
                        <a target="_blank" rel="noopener noreferrer" href="{{ $data['website']->ios }}"> <i class=" c fa fa-apple fa-lg wow fadeInRight"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--end footer-->

    <div class="notifications">
        <a href="#">
            <div class="bells-wrap animate">
                <div class="bell-1"><i class="fa fa-credit-card" aria-hidden="true"></i></div>
                <div class="bell-2"></div>
                <div class="bell-3"></div>
            </div>
        </a>
        <!-- bells-wrap -->
    </div>
    <!-- notifications -->



     <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
     <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <!--[if lt IE 9]>
      <script src="{{ asset('js/html5shiv.min.js') }}"></script>
      <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->
    @yield('javascript')

</body>

</html>