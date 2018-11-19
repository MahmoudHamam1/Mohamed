@extends('layouts.master')

@section('style')
<link rel="stylesheet" href="{{ asset('/theme-assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/adminWebsiteConfig.css') }}">
@endsection

@section('content')

        <div class="webConfig">
        @include('Notification-messages')
        <h3>اعدادات الشركة </h3>
            <form action="/website/websiteConfig/admin" enctype="multipart/form-data" method="post">
                    <div class="row">
                        <div class="websiteLogo col-md-4"><h5>شعار الشركة</h5><img src="{{ asset('images/logo/'.$website->logo) }}" class="image image-thumbnail"><span>+</span></div>
                        <div class="websiteLocation col-md-4 col-md-offset-3"><h5>صورة تحميل الموقع</h5><img src="{{ asset('images/location/'.$website->loadingimage) }}" class="image image-thumbnail"><span>+</span></div>
                    </div>
                     <div class="form-group inputfile" >
                        <input type="file" value="{{ asset('images/location/'.$website->logo) }}" name="logo" class="form-control" id="imageLogo">
                        <input type="file" value="{{ asset('images/location/'.$website->loadingimage) }}" name="loadingimage" class="form-control" id="loadingimage">
                    </div>
                    <div class="row">
                    <div class="form-group col-md-6">
                        <label for="description">عن الشركة (بالعربي):</label>
                        <textarea name="ar[about]" 
                        required data-parsley-maxlength="400"
                         data-parsley-maxlength-message="الحد الاقصي للحروف 400 حرف"  class="form-control" id="description">@if( $website->logo !=null ) {{ $website->translate('ar')->about }}   @endif</textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="description">عن الشركة (بالانجليزي):</label>
                        <textarea name="en[about]" 
                        required data-parsley-maxlength="400"
                         data-parsley-maxlength-message="الحد الاقصي للحروف 400 حرف"  class="form-control" id="description">@if( $website->logo !=null )  {{ $website->translate('en')->about }}  @endif</textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="address">عنوان الشركة (بالعربي):</label>
                        <input type="text"required 
                        data-parsley-maxlength="200"
                        data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف" name="ar[location]" value=" @if( $website->logo !=null )  {{ $website->translate('ar')->location }}  @endif"  class="form-control" id="address">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="address">عنوان الشركة (بالانجليزي):</label>
                        <input type="text"required 
                        data-parsley-maxlength="200"
                        data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف" name="en[location]" value="@if( $website->logo !=null ) {{ $website->translate('en')->location }}    @endif"  class="form-control" id="address">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">البريد الالكتروني للشركة:</label>
                        <input type="email" required data-parsley-maxlength="200"
                        data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"name="email" value="{{ $website->email }}"  class="form-control" id="email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone_number">رقم الهاتف:</label>
                        <input type="number"
                        required data-parsley-maxlength="15"
                        data-parsley-maxlength-message="الحد الاقصي للحروف 15 حرف" 
                        name="phone_number" value="{{ $website->phone_number }}"  class="form-control" id="phone_number">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="facebook">Facebook:</label>
                        <input type="text" name="facebook"
                        data-parsley-maxlength="200"
                         data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                         value="{{ $website->facebook }}"  class="form-control" id="facebook">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="twitter">twitter:</label>
                        <input type="text" name="twitter"
                        data-parsley-maxlength="200"
                         data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                         value="{{ $website->twitter }}"  class="form-control" id="twitter">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="insta">instagram:</label>
                        <input type="text" name="insta" 
                        data-parsley-maxlength="200"
                         data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                        value="{{ $website->insta }}"  class="form-control" id="insta">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="google">Google +:</label>
                        <input type="text" name="google" value="{{ $website->google }}"  class="form-control" id="google">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="snapchat">Snapchat:</label>
                        <input type="text" name="snapchat"
                        data-parsley-maxlength="200"
                         data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                         value="{{ $website->snapchat }}"  class="form-control" id="snapchat">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="youtube">youtube:</label>
                        <input type="text" name="youtube"
                        data-parsley-maxlength="200"
                         data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                         value="{{ $website->youtube }}"  class="form-control" id="youtube">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="android">Andriod:</label>
                        <input type="text" name="android"
                        data-parsley-maxlength="200"
                         data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                         value="{{ $website->android }}"  class="form-control" id="android">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ios">IOS:</label>
                        <input type="text" name="ios" 
                        data-parsley-maxlength="200"
                         data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                        value="{{ $website->ios }}"  class="form-control" id="ios">
                    </div>
                    </div>
                    <h3>احداثيات الخريطة</h3>
                    <div class='row'>
                    <div class="form-group col-md-6">
                        <label for="latitude">خط العرض (latitude)</label>
                        <input type="text" name="latitude" value="{{ $website->latitude }}"  class="form-control" id="latitude">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="longitude">خط الطول (longitude)</label>
                        <input type="longitude" name="longitude" value="{{ $website->longitude }}"  class="form-control" id="longitude">
                    </div>
                    </div>
                    {{csrf_field()}}
                    <input name="_method" type="hidden"  value="PUT">
                    <button type="submit" class="btn btn-primary">تعديل</button>
                </form>
        </div>
@endsection

@section('script')
 <script src="{{ asset('/js/jquery-3.1.0.min.js') }}"></script>
 <script src="{{ asset('/js/adminWebsiteConfig.js') }}"></script>
    <script src="{{ asset('/template-assets/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="{{ asset('/theme-assets/vendor/toastr/toastr.js') }}"></script>
    <script src="{{ asset('/template-assets/bundles/knob.bundle.js') }}"></script>
    <script src="{{ asset('/template-assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('/template-assets/js/index.js') }}"></script>
   
@endsection