@extends('layouts.main',compact('data'))
@section('style')
<link rel='stylesheet' href='{{ asset("css/join.css") }}' />
@endsection
@section('content')

    <!--start book card-->
    <div class="book-card">
        <div class="data">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-xs-12">
                        <h2 class="h1 wow flash">{{ trans('labels1.regNewCor') }}</h2>
                        <p class="lead wow fadeInLeft">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took Lorem
                        </p>
                    </div>

                    <div class="col-sm-6 col-xs-12 wow fadeInRight">
                        <video style="padding:0px; margin-top: 30px" width="550" height="310" controls>
                      <source src="{{ asset('video/videoplayback.mp4') }}" type="video/mp4">
                      <source src="{{ asset('video/videoplayback.ogg') }}" type="video/ogg">
                    {{ trans('labels1.browserNotSuppV') }}
                    </video>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--end book card-->

    <!--  <div class="prov-img">
        <div class="container-fluid">
           <div class="row">
               <div style="padding:0;" class="col-xs-8">
                <img src="{{ asset('images/img/Cap555.PNG') }}" class="img-responsive"/>
               </div>
                   <div style="padding:0;" class="my-ved col-xs-4">
                    <video  style="padding:0;" width="550" height="310" controls>
                      <source src="{{ asset('video/videoplayback.mp4') }}" type="video/mp4">
                      <source src="{{ asset('video/videoplayback.ogg') }}" type="video/ogg">
                    {{ trans('labels1.browserNotSuppV') }}                   
                    </video>
                   </div>
            </div>
           </div>-->
    <!--end prov-->

    <!--start connect-->
    <div class="connect-me text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="connect">
                        <form class="my-form"  @if(App::getLocale()=='ar') dir="rtl" @else dir="ltr" @endif >
                            <div class="col-xs-6 ">
                                <input id="full" type="text" placeholder="{{ trans('labels1.yName') }}" /><br />
                            </div>
                            <div class="col-xs-6">
                                <input id="num" type="text" placeholder="{{ trans('labels1.phNumber') }}" /><br />
                            </div>
                            <div class="col-xs-6">
                                <input id="corp" type="text" placeholder="{{ trans('labels1.coName') }}" /><br />
                            </div>
                            <div class="col-xs-6">
                                <input id="my-mail" type="text" placeholder="{{ trans('labels1.coEmail') }}" /><br />
                            </div>

                            <div class="col-xs-12">
                                <input type="text" id="your-input" placeholder="{{ trans('labels1.email') }}" autocomplete="off" /><br />
                            </div>

                            <textarea placeholder="{{ trans('labels1.message') }}"></textarea><br />
                            <div class="col-xs-12">
                                <button type="button" class="btn">{{ trans('labels1.send') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--end connect-->
    <!--start offer-->
    <div class="offers text-center">
        <div class="data">
            <div class="container">
                <p class="lead">{{ trans('labels1.weAlways') }}</p>
                <p class="m"> {{ trans('labels1.yourShopping') }}</p>
                <div class="row">
                    <div class="col-sm-4 col-xs-12 ">
                        <div class="feat hvr-grow wow bounceInDown" data-wow-duration="2s" data-wow-offset="200">
                            <img src="{{ asset('img/dollar.png') }}" />
                            <h4 class="my-one">50k</h4>
                            <p class="voucher">{{ trans('labels1.redmptionvoucher') }}</p>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-12">
                        <div class="feat hvr-grow wow bounceInUp" data-wow-duration="2s" data-wow-offset="200">
                            <img src="{{ asset('images/img/home.png') }}" />
                            <h4>500</h4>
                            <p class="stores">{{ trans('labels1.store') }} </p>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-12">
                        <div class="feat hvr-grow wow bounceInDown" data-wow-duration="2s" data-wow-offset="200">
                            <img src="{{ asset('images/img/user.png') }}" />
                            <h4>10k</h4>
                            <p class="client">{{ trans('labels1.clients') }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end offer-->
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
        $('.nav .joinLink').addClass('active');

    });
</script>
@endsection