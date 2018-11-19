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
                        <li class="breadcrumb-item active">جميع البطاقات</li>
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
                            action="{{ route('cards.store') }}"
                            novalidate>

                            @csrf

                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                            <div class="form-group">
                                <label>الاسم ثلاثي {!! req() !!} </label>
                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    value="{{ old('name') }}"
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
                                            type="text"
                                            name="phone_number"
                                            class="form-control"
                                            value="{{ old('phone_number') }}"
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
                                            id="nationality"
                                            type="text"
                                            name="nationality"
                                            class="form-control"
                                            value="{{ old('nationality') }}"
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
                                            type="text"
                                            name="id_number"
                                            class="form-control"
                                            value="{{ old('id_number') }}"
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
                                            type="text"
                                            name="country"
                                            class="form-control"
                                            value="{{ old('country') }}"
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
                                            type="text"
                                            name="district"
                                            class="form-control"
                                            value="{{ old('district') }}"
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
                                            id="email"
                                            name="email"
                                            type="email"
                                            class="form-control"
                                            value="{{ old('email') }}"
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
                                    data-provide="datepicker"
                                    class="form-control"
                                    name="birthdate"
                                    value="{{ old('birthdate') }}"
                                    data-parsley-required-message="يجب ادحال تاريخ الميلاد ."
                                    required>
                            </div>



                            <br>

                            <button type="submit" class="btn btn-primary">انشـــــاء</button>
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
    <script>
        $(function() {

            $('#card_post_form').parsley();


            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-bottom-center",
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "10000",
                "timeOut": "10000",
                "extendedTimeOut": "10000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut",
                "rtl":true,
                "tapToDismiss": true
            }


            var errorHeader = $('.card .header');

            if ( errorHeader.length > 0 ) {

                if ( errorHeader.hasClass('error-messages') ) {

                    errorHeader.hide(0);

                    var messages = errorHeader.find('.alert ul li');

                    messages.each(function(i){

                        setTimeout(function(){

                            toastr.warning(messages.eq(i));

                        }, i * 1000);

                    });

                }
            }


            var successHeader = $('div.card div.header div.alert-success');

            successHeader.hide(0);

            if ( successHeader.length > 0 ) {

                toastr.success( successHeader.text() );
            }




        });
    </script>
@endsection
