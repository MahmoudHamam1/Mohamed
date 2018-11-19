@extends('layouts.master')

@section('style')
<link rel="stylesheet" href="{{ asset('/theme-assets/vendor/parsleyjs/css/parsley.css') }}">
@endsection


@section('content')
<div id="main-content">
    <div class="container-fluid">

        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> شركـــات</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">شركـات</li>
                        <li class="breadcrumb-item active">أضافة صور</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-6">
                <div class="card">
                    @include('flash-messages')
                    <div class="body">

                        <h5>أضافة شعار الشركة</h5>
                        <br>

                        <ul class="md_style">
                            <li>الحد الاقصي لطول وعرض الصورة (300px) .</li>
                            <li>الحد الادنى لطول وعرض الصورة (100px) .</li>
                        </ul>
                        <br>

                        <form
                            id="company_slider"
                            method="post"
                            action="/companies/store/image/company-logo"
                            enctype="multipart/form-data" novalidate>

                            @csrf

                            <div class="form-group">
                                <label> الصورة {!! req() !!}</label>
                                <input
                                    type="file"
                                    name="image"
                                    class="form-control"
                                    accept="image/*"
                                    data-parsley-required-message="يجب اختيار صورة"
                                    required>
                            </div>


                            <br>
                            <button type="submit" class="btn btn-primary">حـفــظ</button>
                        </form>

                    </div><!-- body -->
                </div>
            </div>

        <div class="col-md-6">
                <div class="card">
                    @include('flash-messages')
                    <div class="body">

                        <h5>أضافة شعار للعرض الخاص</h5>
                        <br>

                        <ul class="md_style">
                            <li>الحد الاقصي لطول وعرض الصورة (300px) .</li>
                            <li>الحد الادنى لطول وعرض الصورة (100px) .</li>
                        </ul>
                        <br>

                        <form
                            id="company_logo_offer"
                            method="post"
                            action="/companies/store/image/offer-logo"
                            enctype="multipart/form-data" novalidate>

                            @csrf

                            <div class="form-group">
                                <label> الصورة {!! req() !!}</label>
                                <input
                                    type="file"
                                    name="image"
                                    class="form-control"
                                    accept="image/*"
                                    data-parsley-required-message="يجب اختيار صورة"
                                    required>
                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary">حـفــظ</button>
                        </form>

                    </div><!-- body -->
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    @include('flash-messages')
                    <div class="body">

                        <h5>أضافة صور للسلايدر</h5>
                        <br>

                        <ul class="md_style">
                            <li>الحد الاقصي لطول الصورة (600px) .</li>
                            <li>الحد الادنى لطول الصورة (300px) .</li>
                            <li>الحد الاقصي لعرض الصورة (800px) .</li>
                            <li>الحد الادنى لعرض الصورة (300px) .</li>
                        </ul>
                        <br>

                        <form
                            id="company_logo"
                            method="post"
                            action="/companies/store/image/company-logo"
                            enctype="multipart/form-data" novalidate>

                            @csrf

                    <div class="row">

                        <div class="col-sm">

                            <div class="form-group">
                                <label> الصورة </label>
                                <input
                                    type="file"
                                    name="image"
                                    class="form-control"
                                    accept="image/*"
                                    data-parsley-required-message="يجب اختيار صورة"
                                    required>
                            </div>

                        </div>
                        <!-- col-sm -->

                        <div class="col-sm">

                            <div class="form-group">
                                <label> الصورة </label>
                                <input
                                    type="file"
                                    name="image"
                                    class="form-control"
                                    accept="image/*"
                                    data-parsley-required-message="يجب اختيار صورة"
                                    required>
                            </div>
                        </div>
                        <!-- col-sm -->
                        </div>
                        <!-- row -->





                            <br>
                            <button type="submit" class="btn btn-primary">حـفــظ</button>
                        </form>

                    </div><!-- body -->
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
    <script>
        $(function() {
            $('#company_post_form').parsley();
        });
    </script>
@endsection
