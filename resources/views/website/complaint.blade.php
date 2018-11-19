
@extends('layouts.main',compact('data'))
@section('style')  
 <link rel='stylesheet' href='{{ asset("css/complaint.css") }}' />
  @endsection
@section('content')  
        
<div class="row complaint">
    <section class='rating-widget col-md-12'>
    <!-- Rating Stars Box -->
    <div class='rating-stars text-center'>
        <ul id='stars'>
        <li class='star' title='Poor' data-value='1'>
            <i class='fa fa-star fa-fw'></i>
        </li>
        <li class='star' title='Fair' data-value='2'>
            <i class='fa fa-star fa-fw'></i>
        </li>
        <li class='star' title='Good' data-value='3'>
            <i class='fa fa-star fa-fw'></i>
        </li>
        <li class='star' title='Excellent' data-value='4'>
            <i class='fa fa-star fa-fw'></i>
        </li>
        <li class='star' title='WOW!!!' data-value='5'>
            <i class='fa fa-star fa-fw'></i>
        </li>
        </ul>
        <p class="lead lead-danger"></p>
    </div>

  <form @if(App::getLocale()=='ar') dir="rtl" @else dir="ltr" @endif action="{{ route('sendcomplaint') }}" class="col-md-10 col-md-offset-1 text-center" method="post">
    @csrf
    @include('flash-messages')
    <div class="row">
    
    @if(App::getLocale()=='en')
        <div class="form-group col-md-6">
            <input type="email" class="form-control" required name="email" id="email"  placeholder="{{ trans('labels1.email') }}">
        </div>
        
        <div class="form-group col-md-6">
            <select class="form-control" name="type" id="" required>
            <option value="Complaint">{{ trans('labels1.Complaint') }}</option>
            <option value="Suggestion">{{ trans('labels1.Suggestion') }}</option>
            </select>
        </div>
    @else
    <div class="form-group col-md-6">
            <select class="form-control" name="type" id="" required>
            <option value="Complaint">{{ trans('labels1.Complaint') }}</option>
            <option value="Suggestion">{{ trans('labels1.Suggestion') }}</option>
            </select>
        </div>

    <div class="form-group col-md-6">
            <input type="text" required class="form-control" name="email" id="email"  placeholder="{{ trans('labels1.email') }}">
        </div>
        
    @endif
        <div class="form-group">
            <textarea  required class="form-control" name="message" id="message"  placeholder="{{ trans('labels1.message') }}"></textarea>
        </div>
        <input type="hidden" name="rate" required>
        <button class="btn" type="submit">{{ trans('labels1.send') }}</button>
    </div>
  </form>
  
  </div>
</section>


@endsection


  @section('javascript')  
<script src="{{ asset('js/complaint.js') }}"></script>
 <script>
    $(function(){
        $('.nav li').removeClass('active');
    });
</script>
@endsection  