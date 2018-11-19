@extends('layouts.master')

@section('style')
<link rel="stylesheet" href="{{ asset('/theme-assets/vendor/parsleyjs/css/parsley.css') }}">
<link rel="stylesheet" href="{{ asset('css/sliderconfig.css') }}">
@endsection

@section('content')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2>
                        <a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                            جميع الصور
                                </h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">الصور</li>
                        <li class="breadcrumb-item active">عرض صورة</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card planned_task">
                    <div class="header">
                        <p class="page_title">تعديل الصور</p>
                    </div>
                    @include('Notification-messages')
                    <div class="body">
                         <div class="row">
                           <div class="row">
                                <div class="col-md-10 Addslide col-md-offset-1">
                                    <form action="{{ route('sliders.update',$slide->id) }}" class="form" method="POST" enctype="multipart/form-data">
                                    <div class=row>
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control"
                                                        data-parsley-maxlength="200"
                                                        data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                                                        data-parsley-required-message="يجب ادخال اسم  العنوان"
                                                name="ar[title]" required placeholder=" اكتب عنوان بالعربي"
                                                value="{{ $slide->translate('ar')->title }} "
                                                >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control"
                                                        data-parsley-maxlength="200"
                                                        data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                                                        data-parsley-required-message="يجب ادخال اسم  العنوان"
                                                name="en[title]" required placeholder=" اكتب عنوان بالانجليزي"
                                                value="{{ $slide->translate('en')->title }} "
                                                >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <textarea name="ar[description]" class="form-control"rows='2'
                                                data-parsley-maxlength="200"
                                                        data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                                                        data-parsley-required-message="يجب ادخال وصف بالعربي "
                                                required placeholder="اكتب وصف بالعربي"
                                                >{{ $slide->translate('ar')->description }}</textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <textarea name="en[description]" class="form-control"rows='2'
                                                data-parsley-maxlength="200"
                                                        data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                                                        data-parsley-required-message="يجب ادخال وصف بالانجليزي "
                                                required placeholder="اكتب وصف بالانجليزي"
                                                >{{ $slide->translate('en')->description }}</textarea>
                                            </div>
                                            </div>
                                    <div class="form-group">
                                    <input type="file" class="form-control"   
                                        name="image" >
                                    </div>
                                        @csrf
                                        @method('PUT')
                                        <input name="_method" type="hidden"  value="PUT">
                                    <button class="btn btn-outline-success" type="submit" data-type="confirm" title="تعديل">
                                        تعديل
                                    </button>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('/template-assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('/template-assets/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="{{ asset('/theme-assets/vendor/parsleyjs/js/parsley.min.js') }}"></script>
    <script src="{{ asset('/template-assets/bundles/mainscripts.bundle.js') }}"></script>
     {{--  <script src="{{ asset('/js/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('/js/sliderConfig.js') }}"></script>      --}}
@endsection