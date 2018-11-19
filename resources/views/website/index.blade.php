@extends('layouts.main',compact('data'))

@section('content')

    <!--start description-->
    <div class="desc" id="1">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12 pull-right wow fadeInRight  text-left img-responsive">
                    @if($data['images']->About != null)
                        <img src="{{ asset('images/websiteImages/'.$data['images']->About ) }}" />
                    @endif
                </div>
                <div class="col-sm-6 col-xs-12   @if(App::getLocale()=='ar') text-right @endif ">
                    <h2 class="h1 wow flash">{{ trans('labels1.classPlus') }}</h2>
                    <p class="lead wow fadeInLeft">
                        {{ $data['website']->about }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--end description-->

    <!-- class_plus_section -->
    <div class="class_plus_section features text-center">

        <p class="sections_title">{{ trans('labels1.departments') }}</p>

        <div class="frame-animi">

            <div class="box">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                    <line class="top" x1="0" y1="0" x2="900" y2="0"/>
                    <line class="left" x1="0" y1="300px" x2="0" y2="-900"/>
                    <line class="bottom" x1="300" y1="300px" x2="-600" y2="300px"/>
                    <line class="right" x1="300" y1="0" x2="300" y2="900"/>
                </svg>
                 @if($data['images']->entertainment != null)
                    <img src="{{ asset('images/websiteImages/'.$data['images']->entertainment ) }}" />
                @endif
                <p>{{ trans('labels1.entertainment') }}</p>
            </div>

            <div class="box">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                    <line class="top" x1="0" y1="0" x2="900" y2="0"/>
                    <line class="left" x1="0" y1="300px" x2="0" y2="-900"/>
                    <line class="bottom" x1="300" y1="300px" x2="-600" y2="300px"/>
                    <line class="right" x1="300" y1="0" x2="300" y2="900"/>
                </svg>
                 @if($data['images']->education != null)
                    <img src="{{ asset('images/websiteImages/'.$data['images']->education ) }}" />
                @endif
                <p>{{ trans('labels1.education') }}</p>
            </div>

            <div class="box">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                    <line class="top" x1="0" y1="0" x2="900" y2="0"/>
                    <line class="left" x1="0" y1="300px" x2="0" y2="-900"/>
                    <line class="bottom" x1="300" y1="300px" x2="-600" y2="300px"/>
                    <line class="right" x1="300" y1="0" x2="300" y2="900"/>
                </svg>

                @if($data['images']->services != null)
                    <img src="{{ asset('images/websiteImages/'.$data['images']->services ) }}" />
                @endif

                <p>{{ trans('labels1.services') }}</p>
            </div>

        </div>
        <!-- frame-animi end -->
    </div>
    <!-- class_plus_section end -->

    <!-- parteners -->
    <section class="partners">

        <p class="partners_title">{{ trans('labels1.shareSucc') }}</p>

        <!-- Set up your HTML -->
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="{{asset('images/img/100.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('images/img/100.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('images/img/100.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('images/img/100.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('images/img/100.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('images/img/100.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('images/img/100.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('images/img/100.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('images/img/100.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('images/img/100.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('images/img/100.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('images/img/100.jpg')}}" alt="">
            </div>

        </div>

    </section>
    <!-- end parteners-->

    <!-- start book card -->
    <div class="book-card">
        <div class="data">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 ">

                        <div class="button-wrap">
                            <button class="">{{ trans('labels1.bookNow') }}</button>
                        </div>

                    </div>

                    <div class="col-sm-6 col-xs-12">
                        <h2 class="h1 @if(App::getLocale()=='ar') text-right @endif"> {{ trans('labels1.cardFeatures') }}</h2>
                        <p class="lead @if(App::getLocale()=='ar') text-right @endif">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard
                        </p>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!--end book card-->
    <!--start connect US-->
    <div class="connect-us " id="6">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="connect text-center ">
                        <h2 class="h1 wow LightSpeedIn">{{ trans('labels1.contactUs') }}</h2>
                        <img class="text-center img-responsive" src="{{ asset('images/img/map.PNG') }}" />
                        <p class="my-lead"> {{ $data['website']->email }} | {{ $data['website']->phone_number }} | Contact Us</p>

                        <form class="my-form text-center-xs" action="/senMessage" dir="rtl">
                            <input type="text" name="email" id="your-input" placeholder="{{trans('labels1.email')}}" autocomplete="off" /><br />
                            <textarea class="no-resize" name="message" placeholder="{{ trans('labels1.message') }}"></textarea><br />
                            @csrf()
                            <button type="submit" class="btn">{{ trans('labels1.send') }}</button>
                        </form>
                        <div class="alert alert-danger alert-dismissible fade ">
                              <ul  class="list-unstyled text-center">
                              </ul>
                              <button type="button" class="close"  data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                        <div class="alert alert-success alert-dismissible fade ">
                                <ul class="list-unstyled text-center">
                                </ul>
                                <button type="button" class="close"  data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
                    
    <!--end connect US-->

    <!-- start join -->
    <div class="join-now text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="h1">{{ trans('labels1.joinUsAs') }}</h2>
                    <p class="">Lorem ipsum dolor sit amet </p>

                    <a href="{{ route('join') }}"><button type="button" class=" ">{{ trans('labels1.joinNow') }}</button></a>
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
<script src="{{ asset('js/sendMessage.js') }}"></script>
@endsection

@section('javascript')
<script>
    $(function(){
        $('.nav li').removeClass('active');
        $('.nav .homeLink').addClass('active');

    });
</script>
@endsection