@extends('layouts.master')

@section('style')
<link rel="stylesheet" href="{{ asset('/theme-assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/adminWebsiteConfig.css') }}">
<style>
.websiteLocation {
    margin-top: 40px;
}
</style>
@endsection

@section('content')

        <div class="webConfig">
        @include('Notification-messages')
        <h3>اعدادات الشركة </h3>
            <form action="/website/images/admin" enctype="multipart/form-data" method="post">
                    <div class="row">
                        <div class="websiteLocation About col-md-4"><h5>عن كلاس بلص *</h5><img src="{{ asset('images/websiteImages/'.$images->About) }}" class="image image-thumbnail"><span>+</span></div>
                        <div class="websiteLocation entertainment col-md-4"><h5>قسم الترفيه *</h5><img src="{{ asset('images/websiteImages/'.$images->entertainment) }}" class="image image-thumbnail"><span>+</span></div>
                        <div class="websiteLocation education col-md-4"><h5>قسم التعليم *</h5><img src="{{ asset('images/websiteImages/'.$images->education) }}" class="image image-thumbnail"><span>+</span></div>
                        <div class="websiteLocation services col-md-4"><h5>قسم الخدمات *</h5><img src="{{ asset('images/websiteImages/'.$images->services) }}" class="image image-thumbnail"><span>+</span></div>
                        <div class="websiteLocation hotel_tourism col-md-4"><h5>قسم الفنادق والسياحة *</h5><img src="{{ asset('images/websiteImages/'.$images->hotel_tourism) }}" class="image image-thumbnail"><span>+</span></div>
                        <div class="websiteLocation footer1 col-md-4"><h5>اعلان 1</h5><img src="{{ asset('images/websiteImages/'.$images->footer1) }}" class="image image-thumbnail"><span>+</span></div>
                        <div class="websiteLocation footer2 col-md-4"><h5>اعلان 2</h5><img src="{{ asset('images/websiteImages/'.$images->footer2) }}" class="image image-thumbnail"><span>+</span></div>
                        <div class="websiteLocation footer3 col-md-4"><h5>اعلان 3</h5><img src="{{ asset('images/websiteImages/'.$images->footer3) }}" class="image image-thumbnail"><span>+</span></div>
                    </div>
                     <div class="form-group inputfile" >
                        <input type="file" value="{{ asset('images/websiteImages/'.$images->About) }}" name="About" class="form-control" id="About">
                        <input type="file" value="{{ asset('images/websiteImages/'.$images->entertainment) }}" name="entertainment" class="form-control" id="entertainment">
                        <input type="file" value="{{ asset('images/websiteImages/'.$images->education) }}" name="education" class="form-control" id="education">
                        <input type="file" value="{{ asset('images/websiteImages/'.$images->services) }}" name="services" class="form-control" id="services">
                        <input type="file" value="{{ asset('images/websiteImages/'.$images->hotel_tourism) }}" name="hotel_tourism" class="form-control" id="hotel_tourism">
                        <input type="file" value="{{ asset('images/websiteImages/'.$images->footer1) }}" name="footer1" class="form-control" id="footer1">
                        <input type="file" value="{{ asset('images/websiteImages/'.$images->footer2) }}" name="footer2" class="form-control" id="footer2">
                        <input type="file" value="{{ asset('images/websiteImages/'.$images->footer3) }}" name="footer3" class="form-control" id="footer3">
                    </div>
                    {{csrf_field()}}
                    <input name="_method" type="hidden"  value="PUT">
                    <button type="submit" class="btn btn-primary">تعديل</button>
                </form>
        </div>
@endsection

@section('script')
 <script src="{{ asset('/js/jquery-3.1.0.min.js') }}"></script>
 <script src="{{ asset('/js/adminWebsiteImages.js') }}"></script>
    <script src="{{ asset('/template-assets/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="{{ asset('/theme-assets/vendor/toastr/toastr.js') }}"></script>
    <script src="{{ asset('/template-assets/bundles/knob.bundle.js') }}"></script>
    <script src="{{ asset('/template-assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('/template-assets/js/index.js') }}"></script>
   
@endsection