@extends('layouts.main',compact('data'))
@section('style')
 <link rel='stylesheet' href='{{ asset("css/company.css") }}' />
@endsection
@section('content')
<div class="row companyData">
    <div class="col-md-6 companyimages">
         <!--start carousel-->
        {{--  <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            {{ --      @if( $data['companyImages']->slider_1 !=null)
                <ol class="carousel-indicators">
                    @if( $data['companyImages']->slider_1 !=null)
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    @endif
                    @if( $data['companyImages']->slider_2 !=null)
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                    @endif
                    @if( $data['companyImages']->slider_3 !=null)
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                    @endif
                    @if( $data['companyImages']->slider_4 !=null)
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    @endif
                    @if( $data['companyImages']->slider_5 !=null)
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                    @endif
                </ol>
                <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @if( $data['companyImages']->slider_1 !=null)
                    <div class="item active">
                        <img src="{{ $data['companyImages']->slider_1 }}" alt="Los Angeles" style="width:100%;">
                    </div>
                @endif
                @if( $data['companyImages']->slider_2 !=null)
                    <div class="item ">
                        <img src="{{  $data['companyImages']->slider_2 }}" alt="Los Angeles" style="width:100%;">
                    </div>
                @endif
                @if( $data['companyImages']->slider_3 !=null)
                    <div class="item ">
                        <img src="{{  $data['companyImages']->slider_3 }}" alt="Los Angeles" style="width:100%;">
                    </div>
                @endif
                @if( $data['companyImages']->slider_4 !=null)
                    <div class="item ">
                        <img src="{{  $data['companyImages']->slider_4 }}" alt="Los Angeles" style="width:100%;">
                    </div>
                @endif
                @if( $data['companyImages']->slider_5 !=null)
                    <div class="item ">
                        <img src="{{  $data['companyImages']->slider_5 }}" alt="Los Angeles" style="width:100%;">
                    </div>
                @endif
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
        </div>  --}}  --}}
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>
            <!-- Wrapper for slides -->

          <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{ asset('images/img/adult-mob.png')}}" alt="Los Angeles" style="width:100%;">
                    </div>
               
                    <div class="item ">
                        <img src="{{ asset('images/img/adult-mob.png')}}" alt="Los Angeles" style="width:100%;">
                </div>
                    <div class="item ">
                        <img src="{{ asset('images/img/adult-mob.png')}}" alt="Los Angeles" style="width:100%;">
                    </div>
                
                    <div class="item ">
                        <img src="{{ asset('images/img/adult-mob.png')}}" alt="Los Angeles" style="width:100%;">
                    </div>
              
                    <div class="item ">
                        <img src="{{ asset('images/img/adult-mob.png')}}" alt="Los Angeles" style="width:100%;">
                    </div>
                
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
           
        </div>
        <!--end  carousel-->
        <iframe src="https://www.youtube.com/embed/668nUCeBHyY" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>     
    <div class="socialContacts text-center">
        <span><a href="{{ $data['company']->facebook }}"><i class="fa fa-facebook"></i></a></span>
        <span><a href="{{ $data['company']->twitter }}"><i class="fa fa-twitter"></i></a></span>
        <span><a href="{{ $data['company']->email }}"><i class="fa fa-envelope-o"></i></a></span>
        <span><a href="{{ $data['company']->snapchat }}"><i class="fa fa-snapchat"></i></a></span>
        <span><a href="{{ $data['company']->instgram }}"><i class="fa fa-instagram"></i></a></span>
        <span><a href="{{ $data['company']->website }}"><i class="fa fa-globe"></i></a></span>
        <span>{{ $data['company']->phone_number_1 }} <i class="fa fa-phone"></i></span>
        <span>{{ $data['company']->phone_number_2 }} <i class="fa fa-phone"></i></span>
        <span>{{ $data['company']->address }}</span>
        </div>
        </div>

    <div class="col-md-6 companyDetails">
        <div class="row">
        
            <div class="col-xs-4 privateView"><img src="{{$data['companyImages']->offer_logo }}" width="100%"></div>
            <div class="col-xs-4 title text-center"><h3>{{ $data['company']->name }}</h3></div>
            <div class="col-xs-4 logo"><img src="{{   $data['companyImages']->company_logo }}"width="100%"></div><br/>
            <p class="lead text-center col-xs-12">{{ $data['company']->description }}</p>

            @foreach($data['offers'] as $offer)

                <div class="accordion col-md-12" id="accordionExample">
                    <div class="card">
                    <div class="card-header" id="heading{{ $offer->id }}">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#offer{{ $offer->id }}" aria-expanded="true" aria-controls="collapseOne{{ $offer->id }}">
                            {{ $offer->title }}
                            </button>
                        </h5>
                    </div>
                    </div>
                    <div id="offer{{ $offer->id }}" class="collapse" aria-labelledby="heading{{ $offer->id }}" data-parent="#accordionExample">
                        <div class="card-body">
                            <p class="lead"> {{ $offer->description }}</p>
                            <div class='row'>
                            @if(App::getLocale()=='ar')
                            <div class="col-md-4">{{ trans('labels1.discount') }} : {{ $offer->discount }}</div>
                            <div class="col-md-4">{{ trans('labels1.to') }} : {{ $offer->expire_date }}</div>
                            <div class="col-md-4">{{ trans('labels1.from') }} : {{ $offer->start_date }}</div>
                            @else
                            <div class="col-md-4">{{ trans('labels1.from') }} : {{ $offer->start_date }}</div>
                            <div class="col-md-4">{{ trans('labels1.to') }} : {{ $offer->expire_date }}</div>
                            <div class="col-md-4">{{ trans('labels1.discount') }} : {{ $offer->discount }}</div>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
                
            @endforeach
        </div>
        </div>
    </div>

    <div class="col-xs-10 col-xs-offset-1 companymap">
        <img src="{{ asset('images/img/map.PNG') }}" width="100%">
    </div>


</div>

@endsection

@section('javascript')
<script>
    $(function(){
        $('.nav li').removeClass('active');
    });
</script>
@endsection