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
                            <li>الحد الاقصى لابعاد الصورة 300px × 300px .</li>
                        </ul>
                        <br>

                        @if( !is_null( $company->images) )

                        <div class="image-wrap">
                            <img src="{{ $company->images->company_logo }}" alt="">
                        </div>

                        @endif

                        <form
                            id="company_slider"
                            method="post"
                            action="{{ route('companyimages.store') }}"
                            enctype="multipart/form-data" novalidate>

                            @csrf

                            <div class="form-group">
                                <label> الصورة {!! req() !!}</label>
                                <input
                                    type="file"
                                    name="company_logo"
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

                    <div class="body">

                        <h5>أضافة شعار للعرض الخاص</h5>
                        <br>

                        <ul class="md_style">
                            <li>الحد الاقصى لابعاد الصورة 300px × 300px .</li>
                        </ul>
                        <br>

                        @if( !is_null( $company->images) )
                        <div class="image-wrap">
                            <img src="{{ $company->images->offer_logo }}" alt="">
                        </div>
                        @endif
                        <form
                            id="company_logo_offer"
                            method="post"
                            action="{{ route('companyimages.store') }}"
                            enctype="multipart/form-data" novalidate>

                            @csrf

                            <div class="form-group">
                                <label> الصورة {!! req() !!}</label>
                                <input
                                    type="file"
                                    name="offer_logo"
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

                    <div class="body">

                        <h5>أضافة صور للسلايدر</h5>
                        <br>

                        <ul class="md_style">
                            <li>الحد الاقصى لابعاد الصورة 800px × 800px .</li>
                        </ul>
                        <br>

                        <form
                            id="company_logo"
                            method="post"
                            action="{{ url('company-images') }}"
                            enctype="multipart/form-data" novalidate>

                            @csrf

                            <div class="row">

                                <div class="col-sm">

                                    @if( !is_null( $company->images) )
                                    <div class="image-wrap">
                                        <img src="{{ $company->images->slider_1 }}" alt="">
                                    </div>
                                    @endif

                                    <div class="form-group">
                                        <label> الصورة 1</label>
                                        <input
                                            type="file"
                                            name="slider_1"
                                            class="form-control"
                                            accept="image/*"
                                            data-parsley-required-message="يجب اختيار صورة"
                                            required>
                                    </div>

                                </div>
                                <!-- col-sm -->

                                <div class="col-sm">

                                    @if( !is_null( $company->images) )
                                    <div class="image-wrap">
                                        <img src="{{ $company->images->slider_2 }}" alt="">
                                    </div>
                                    @endif

                                    <div class="form-group">
                                        <label> الصورة 2</label>
                                        <input
                                            type="file"
                                            name="slider_2"
                                            class="form-control"
                                            accept="image/*"
                                            data-parsley-required-message="يجب اختيار صورة"
                                            required>
                                    </div>
                                </div>
                                <!-- col-sm -->
                            </div>
                            <!-- row -->

                            <div class="row">

                                <div class="col-sm">

                                    @if( !is_null( $company->images) )
                                    <div class="image-wrap">
                                        <img src="{{ $company->images->slider_3 }}" alt="">
                                    </div>
                                    @endif

                                    <div class="form-group">
                                        <label> الصورة 3</label>
                                        <input
                                            type="file"
                                            name="slider_3"
                                            class="form-control"
                                            accept="image/*"
                                            data-parsley-required-message="يجب اختيار صورة"
                                            required>
                                    </div>

                                </div>
                                <!-- col-sm -->

                                <div class="col-sm">

                                    @if( !is_null( $company->images)  )
                                    <div class="image-wrap">
                                        <img src="{{ $company->images->slider_4 }}" alt="">
                                    </div>
                                    @endif
                                    <div class="form-group">
                                        <label> الصورة 4</label>
                                        <input
                                            type="file"
                                            name="slider_4"
                                            class="form-control"
                                            accept="image/*"
                                            data-parsley-required-message="يجب اختيار صورة"
                                            required>
                                    </div>
                                </div>
                                <!-- col-sm -->
                            </div>
                            <!-- row -->

                            <div class="row">

                                <div class="col-sm">
                                    @if( !is_null( $company->images) )
                                    <div class="image-wrap">
                                        <img src="{{ $company->images->slider_5 }}" alt="">
                                    </div>
                                    @endif
                                    <div class="form-group">
                                        <label> الصورة 5</label>
                                        <input
                                            type="file"
                                            name="slider_5"
                                            class="form-control"
                                            accept="image/*"
                                            data-parsley-required-message="يجب اختيار صورة"
                                            required>
                                    </div>

                                </div>
                                <!-- col-sm -->

                                <div class="col-sm">
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
    <script src="{{ asset('/theme-assets/vendor/toastr/toastr.js') }}"></script>
    <script src="{{ asset('/template-assets/bundles/mainscripts.bundle.js') }}"></script>
    @include('toastr-script')
    <script>
        $(function() {
            $('#company_post_form').parsley();
        });
    </script>
@endsection
