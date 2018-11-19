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
                        <li class="breadcrumb-item active">اضافة شركة</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    @include('flash-messages')
                        <!-- <h5>اضافة شركة جديدة</h5> -->
                    <div class="body">

                        <form
                            id="company_post_form"
                            method="post"
                            action="/companies"
                            novalidate>

                            @csrf

                            <input type="hidden" name="user_id" value="{{ $user->id }}">

                            <div class="row">

                                <div class="col-sm">

                                    <div class="form-group">
                                        <label>اللأســم {!! req() !!} ( Ar )</label>
                                        <input
                                            type="text"
                                            name="ar[name]"
                                            class="form-control"
                                            value="{{ old('ar.name') }}"
                                            data-parsley-maxlength="200"
                                            data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                                            data-parsley-required-message="يجب ادحال اسم الشركة بالعربية"
                                            required>
                                    </div>

                                </div><!-- col-xs-6 -->


                                <div class="col-sm">

                                    <div class="form-group">
                                        <label>اللأســم ( En )</label>
                                        <input
                                            type="text"
                                            name="en[name]"
                                            class="form-control"
                                            value="{{ old('en.name') }}"
                                            data-parsley-maxlength="200"
                                            data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف">
                                    </div>

                                </div><!-- col-xs-6 -->


                            </div>
                            <!-- row -->


                            <div class="row">

                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>رقم الهاتف  {!! req() !!}</label>
                                        <input
                                            type="text"
                                            name="phone_number_1"
                                            class="form-control"
                                            value="{{ old('phone_number_1') }}"
                                            data-parsley-type="digits"
                                            data-parsley-maxlength="20"
                                            data-parsley-maxlength-message="الحد الاقصي للارقام 20 رقم ."
                                            data-parsley-required-message="يجب ادحال رقم الهاتف ."
                                            data-parsley-type-message="يسمح بارقام فقط ."
                                            required>
                                    </div>
                                </div>
                                <!-- col-sm -->

                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>البريد الالكتروني {!! req() !!} </label>
                                        <input
                                            type="email"
                                            name="email"
                                            class="form-control"
                                            value="{{ old('email') }}"
                                            data-parsley-required-message="يجب ادحال البريد الالكتروني"
                                            data-parsley-email-message="يجب ادحال بريد الالكتروني صحيح ."
                                            data-parsley-maxlength="200"
                                            data-parsley-maxlength-message="الحد الاقصي للاحرف 200 حرف ."
                                            required>
                                    </div>
                                </div>
                                <!-- col-sm -->
                            </div>
                            <!-- row -->


                            <div class="row">

                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>اسم المستخدم</label>
                                        <input
                                            type="text"
                                            name="user"
                                            class="form-control"
                                            value="{{ $user->fullName() }}"
                                            disabled>
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
