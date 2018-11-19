@extends('layouts.master')

@section('style')
<link rel="stylesheet" href="{{ asset('/theme-assets/vendor/parsleyjs/css/parsley.css') }}">
<link rel="stylesheet" href="{{ asset('/theme-assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
@endsection

@section('content')

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> العـــروض</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">عروض</li>
                        <li class="breadcrumb-item active">اضافة عرض</li>
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
                            id="offer_post_form"
                            method="post"
                            action="{{ route('offers.update', $offer->id ) }}"
                            novalidate>

                            @csrf
                            @method('put')

                            <div class="row">

                                <div class="col-sm">

                                    <div class="form-group">
                                        <label>عنوان العرض {!! req() !!} ( Ar )</label>
                                        <input
                                            type="text"
                                            name="ar[title]"
                                            class="form-control"
                                            value="{{ $offer->translate('ar')->title }}"
                                            data-parsley-maxlength="200"
                                            data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                                            data-parsley-required-message="يجب ادحال عنوان العرض بالعربية ."
                                            required>
                                    </div>

                                </div><!-- col-xs-6 -->


                                <div class="col-sm">


                                    <div class="form-group">
                                        <label>عنوان العرض {!! req() !!} ( En )</label>
                                        <input
                                            type="text"
                                            name="en[title]"
                                            class="form-control"
                                            value="{{ $offer->translate('en')->title }}"
                                            data-parsley-maxlength="200"
                                            data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                                            data-parsley-required-message="يجب ادحال عنوان العرض بالانجليزية ."
                                            required>
                                    </div>

                                </div><!-- col-xs-6 -->


                            </div>
                            <!-- row -->


                            <div class="row">

                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>الوصف &nbsp; ( Ar )</label>
                                        <textarea
                                            name="ar[description]"
                                            class="form-control"
                                            dir="auto"
                                            length="2000"
                                            data-parsley-maxlength="2000"
                                            data-parsley-maxlength-message="الحد الاقصي للحروف 2000 حرف">{{ $offer->translate('ar')->description }}</textarea>
                                    </div>
                                </div>
                                <!-- col-sm -->

                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>الوصف &nbsp; ( En )</label>
                                        <textarea
                                            name="en[description]"
                                            class="form-control"
                                            dir="auto"
                                            length="2000"
                                            data-parsley-maxlength="2000"
                                            data-parsley-maxlength-message="الحد الاقصي للحروف 2000 حرف">{{ $offer->translate('en')->description }}</textarea>
                                    </div>
                                </div>
                                <!-- col-sm -->
                            </div>
                            <!-- row -->

                            <div class="row">


                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>الخصم بالنسبة المئوية % {!! req() !!}</label>
                                        <input
                                            type="text"
                                            name="discount"
                                            class="form-control"
                                            value="{{ $offer->discount }}"
                                            data-parsley-maxlength="3"
                                            data-parsley-type="digits"
                                            data-parsley-min="1"
                                            data-parsley-max="100"
                                            data-parsley-min-message="اقل خصم 1 % ."
                                            data-parsley-max-message="اعلى خصم 100% ."
                                            data-parsley-type-message="يسمح بارقام فقط ."
                                            data-parsley-maxlength-message="الحد الاقصي للارقام 3 ارقام ."
                                            data-parsley-required-message="يجب ادحال الخصم ."
                                            required>
                                    </div>
                                </div>
                                <!-- col-sm -->


                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>تاريخ بداية العرض {!! req() !!}</label>
                                        <input
                                            type="text"
                                            name="start_date"
                                            class="form-control"
                                            value="{{ $offer->start_date }}"
                                            data-provide="datepicker"
                                            data-parsley-maxlength="100"
                                            data-parsley-maxlength-message="الحد الاقصي للحروف 100 حرف ."
                                            data-parsley-required-message="يجب ادحال تاريخ بداية العرض ."
                                            required>
                                    </div>
                                </div>
                                <!-- col-sm -->

                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>تاريخ نهاية العرض {!! req() !!}</label>
                                        <input
                                            type="text"
                                            name="expire_date"
                                            class="form-control"
                                            value="{{ $offer->expire_date }}"
                                            data-provide="datepicker"
                                            data-parsley-maxlength="20"
                                            data-parsley-maxlength-message="الحد الاقصي للارقام 100 رقم ."
                                            data-parsley-required-message="يجب ادحال تاريخ نهاية العرض ."
                                            required>
                                    </div>
                                </div>
                                <!-- col-sm -->

                            </div>
                            <!-- row -->


                            <div class="row">

                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>اسم الشركة</label>
                                        <input
                                            type="text"
                                            name="user"
                                            class="form-control"
                                            value="{{ $offer->company->translate('ar')->name }}"
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

                            <button type="submit" class="btn btn-primary">تحــــديث</button>
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
    <script src="{{ asset('/theme-assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/theme-assets/vendor/toastr/toastr.js') }}"></script>
    <script src="{{ asset('/template-assets/bundles/mainscripts.bundle.js') }}"></script>
    @include('toastr-script')
    <script>
        $(function() {
            $('#offer_post_form').parsley();
        });
    </script>
@endsection
