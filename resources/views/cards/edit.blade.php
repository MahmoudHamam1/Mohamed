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
                    <h2>
                        <a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        البطاقات
                    </h2>

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">البطاقات</li>
                        <li class="breadcrumb-item active">تعديل البطاقة</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    @include('flash-messages')
                    <div class="body">

                        <form
                            id="card_post_form"
                            method="post"
                            action="{{ route('cards.update', $card->id ) }}"
                            novalidate>

                            @method('put')
                            @csrf

                            <div class="form-group">
                                <label>الاسم ثلاثي {!! req() !!} </label>
                                <input
                                    dir="auto"
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    value="{{ $card->name }}"
                                    data-parsley-maxlength="200"
                                    data-parsley-maxlength-message="الحد الاقصي للاحرف 200 حرف ."
                                    data-parsley-required-message="يجب ادحال الاسم ثلاثي ."
                                    required>
                            </div>


                            <div class="row">

                                <div class="col-sm">

                                    <div class="form-group">
                                        <label>رقم الهاتف {!! req() !!} </label>
                                        <input
                                            dir="auto"
                                            type="text"
                                            name="phone_number"
                                            class="form-control"
                                            value="{{ $card->phone_number }}"
                                            data-parsley-type="digits"
                                            data-parsley-maxlength="20"
                                            data-parsley-maxlength-message="الحد الاقصي للارقام 20 رقم ."
                                            data-parsley-type-message="يجب ادحال ارقام فقط."
                                            data-parsley-required-message="يجب ادحال رقم الهاتف ."
                                            required>
                                    </div>

                                </div><!-- col-xs-6 -->

                                <div class="col-sm">

                                    <div class="form-group">
                                        <label>الجنسية {!! req() !!} </label>
                                        <input
                                            dir="auto"
                                            id="nationality"
                                            type="text"
                                            name="nationality"
                                            class="form-control"
                                            value="{{ $card->nationality }}"
                                            data-parsley-maxlength="200"
                                            data-parsley-maxlength-message="الحد الاقصي للاحرف 200 حرف ."
                                            data-parsley-required-message="يجب ادحال الجنسية ."
                                            required>
                                    </div>

                                </div><!-- col-xs-6 -->

                            </div>
                            <!-- row -->


                            <div class="row">

                                <div class="col-sm">

                                    <div class="form-group">
                                        <label>رقم الهوية {!! req() !!} </label>
                                        <input
                                            dir="auto"
                                            type="text"
                                            name="id_number"
                                            class="form-control"
                                            value="{{ $card->id_number }}"
                                            data-parsley-type="digits"
                                            data-parsley-maxlength="20"
                                            data-parsley-maxlength-message="الحد الاقصي للارقام 20 رقم ."
                                            data-parsley-type-message="يسمح بارقام فقط ."
                                            data-parsley-required-message="يجب ادحال رقم الهوية ."
                                            required>
                                    </div>

                                </div>
                                <!-- col-sm -->

                                <div class="col-sm">

                                    <div class="form-group">
                                        <label>المدينة {!! req() !!} </label>
                                        <input
                                            dir="auto"
                                            type="text"
                                            name="country"
                                            class="form-control"
                                            value="{{ $card->country }}"
                                            data-parsley-maxlength="200"
                                            data-parsley-maxlength-message="الحد الاقصي للاحرف 200 حرف ."
                                            data-parsley-required-message="يجب ادحال المدينة ."
                                            required>
                                    </div>

                                </div>
                                <!-- col-sm -->
                            </div>
                            <!-- row -->

                            <div class="row">

                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>الحي {!! req() !!} </label>
                                        <input
                                            dir="auto"
                                            type="text"
                                            name="district"
                                            class="form-control"
                                            value="{{ $card->district }}"
                                            data-parsley-maxlength="200"
                                            data-parsley-maxlength-message="الحد الاقصي للاحرف 200 حرف ."
                                            data-parsley-required-message="يجب ادحال الحي ."
                                            required>
                                    </div>
                                </div>
                                <!-- col-sm -->

                                <div class="col-sm">

                                    <div class="form-group">
                                        <label>البريد {!! req() !!} </label>
                                        <input
                                            dir="auto"
                                            id="email"
                                            name="email"
                                            type="email"
                                            class="form-control"
                                            value="{{ $card->email }}"
                                            data-parsley-type="email"
                                            data-parsley-maxlength="200"
                                            data-parsley-type-message="يجب ادخال بريد الكتروني صحيح ."
                                            data-parsley-maxlength-message="الحد الاقصي للاحرف 200 حرف ."
                                            data-parsley-required-message="يجب ادحال البريد الالكتروني ."
                                            required>
                                    </div>

                                </div>
                                <!-- col-sm -->

                            </div>
                            <!-- row -->


                            <div class="form-group">

                                <label>تاريخ الميلاد {!! req() !!} </label>
                                <input
                                    dir="auto"
                                    data-provide="datepicker"
                                    class="form-control"
                                    name="birthdate"
                                    value="{{ $card->birthdate }}"
                                    data-parsley-required-message="يجب ادحال تاريخ الميلاد ."
                                    required>
                            </div>



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
            $('#card_post_form').parsley();
        });
    </script>
@endsection
