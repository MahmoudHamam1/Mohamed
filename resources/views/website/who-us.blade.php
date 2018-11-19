@extends('layouts.main',compact('data'))
@section('style')
 <link rel='stylesheet' href='{{ asset("css/services.css") }}' />
@endsection
@section('content')
<!--start prov-->
    <div class="prov-img">
        <div class="container-fluid">
            <div class="row">
                <div style="padding:0;" class="col-xs-12">
                    <img src="{{ asset('images/img/Cacard.PNG')}}" class="img-responsive" />
                </div>
            </div>
        </div>

    </div>

    <!--end prov-->
    <!--start who-us-->
    <div class="client text-center">

        <div class="container">
            <p class="lead">{{ trans('labels1.clientsFeedback') }}</p>

            <div class="row">

                <div class="col-sm-4 col-xs-12 ">
                    <div class="feat hvr-grow wow bounceInDown" data-wow-duration="2s" data-wow-offset="200">
                        <img src="{{asset('images/img/Client%20feed.PNG')}}" />

                    </div>
                </div>

                <div class="col-sm-4 col-xs-12 ">
                    <div class="feat hvr-grow wow bounceInDown" data-wow-duration="2s" data-wow-offset="200">
                        <img src="{{asset('images/img/Client%20feed.PNG')}}" />

                    </div>
                </div>

                <div class="col-sm-4 col-xs-12 ">
                    <div class="feat hvr-grow wow bounceInDown" data-wow-duration="2s" data-wow-offset="200">
                        <img src="{{asset('images/img/Client%20feed.PNG')}}" />

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--end who-us-->
    <!--start class-application-->
    <div class="class-app">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12 wow fadeInRight  text-left ">
                    <img class="img-responsive" src="{{asset('images/img/mobb.PNG')}}" />
                </div>

                <div class="col-sm-6 col-xs-12   @if(App::getLocale()=='ar') text-right @else text-left @endif   ">
                    <h2 class="h1 wow flash">{{ trans('labels1.classApp') }}</h2>
                    <p class="lead wow fadeInLeft">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>

                    <div class="col-xs-6 ">
                        <img class="img-responsive" src="{{asset('images/img/play.PNG')}}" />

                    </div>
                    <div class="col-xs-6 ">

                        <img class="img-responsive" src="{{asset('images/img/store.PNG')}}" />
                    </div>
                </div>

            </div>
        </div>
    </div>



    <!--end class-application-->
    <!--start join-->
    <div class="join-now text-center" id="7">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="h1 wow fadeInLeftBig">{{ trans('labels1.doUlike') }}</h2>
                    <p class="wow fadeInLeftBig">{{ trans('labels1.joinSavingp1') }} <br/> {{ trans('labels1.joinSavingp2') }}</p>
                    <a href="specialoffer.html"><button type="button" class=" wow rollIn">{{ trans('labels1.bookCnow') }}</button></a>
                </div>
            </div>
        </div>
    </div>
    <!--end join-->

    <div class="container">
        <div class="row">
            <div style="min-height:0;" class="col-md-4 col-md-offset-4">
                <div class="material-button-anim">
                    <ul class="list-inline" id="options">
                        <li class="option">
                            <button class="material-button option1" type="button">
                                    <span class="fa fa-phone" aria-hidden="true"></span>
                                </button>
                        </li>
                        <li class="option">
                            <button class="material-button option2" type="button">
                                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                                </button>
                        </li>
                        <li class="option">
                            <button class="material-button option3" type="button">
                                    <span class="fa fa-pencil" aria-hidden="true"></span>
                                </button>
                        </li>
                    </ul>
                    <button class="material-button material-button-toggle" type="button">
                            <span class="fa fa-plus" aria-hidden="true"></span>
                        </button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('javascript')
<script>
    $(function(){
        $('.nav li').removeClass('active');
        $('.nav .whoLink').addClass('active');

    });
</script>
@endsection