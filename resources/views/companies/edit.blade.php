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
                        <li class="breadcrumb-item active">بينات الشركة</li>
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
                            id="company_update_form"
                            method="post"
                            action="{{ action( 'CompanyController@update', $company->id ) }}"
                            novalidate>

                            @method('put')
                            @csrf

                            <div class="row">

                                <div class="col-sm">

                                    <div class="form-group">
                                        <label>اللأســم {!! req() !!} ( Ar )</label>
                                        <input
                                            type="text"
                                            name="ar[name]"
                                            class="form-control"
                                            value="{{ $company->translate('ar')->name }}"
                                            data-parsley-maxlength="200"
                                            data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                                            data-parsley-required-message="يجب ادحال اسم الشركة بالعربية"
                                            required>
                                    </div>

                                </div><!-- col-xs-6 -->


                                <div class="col-sm">

                                    <div class="form-group">
                                        <label>اللأســم {!! req() !!} ( En )</label>
                                        <input
                                            type="text"
                                            name="en[name]"
                                            class="form-control"
                                            value="{{ $company->translate('en')->name }}"
                                            data-parsley-maxlength="200"
                                            data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                                            data-parsley-required-message="يجب ادحال اسم الشركة بالأنجليزية"
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
                                            data-parsley-maxlength-message="الحد الاقصي للحروف 2000 حرف">{{ $company->translate('ar')->description }}</textarea>
                                    </div>
                                </div>
                                <!-- col-sm -->

                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>الوصف &nbsp; ( En )</label>
                                        <textarea name="en[description]" class="form-control" dir="auto" length="2000" data-parsley-maxlength="2000" data-parsley-maxlength-message="الحد الاقصي للحروف 2000 حرف">{{ $company->translate('en')->description }}</textarea>
                                    </div>
                                </div>
                                <!-- col-sm -->
                            </div>
                            <!-- row -->


                            <div class="row">

                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>العنوان &nbsp; ( Ar )</label>
                                        <input
                                            type="text"
                                            name="ar[address]"
                                            class="form-control"
                                            value="{{ $company->translate('ar')->address }}"
                                            data-parsley-maxlength="200"
                                            data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف .">
                                    </div>
                                </div>
                                <!-- col-sm -->

                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>العنوان &nbsp; ( En )</label>
                                        <input
                                            type="text"
                                            name="en[address]"
                                            class="form-control"
                                            value="{{ $company->translate('en')->address }}"
                                            data-parsley-maxlength="200"
                                            data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف .">
                                    </div>
                                </div>
                                <!-- col-sm -->
                            </div>
                            <!-- row -->


                            <div class="row">

                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>رقم الهاتف 1 {!! req() !!}</label>
                                        <input
                                            type="text"
                                            name="phone_number_1"
                                            class="form-control"
                                            value="{{ $company->phone_number_1 }}"
                                            data-parsley-type="digits"
                                            data-parsley-maxlength="20"
                                            data-parsley-maxlength-message="الحد الاقصي للارقام 20 رقم ."
                                            data-parsley-required-message="يجب ادحال رقم الهاتف 1 ."
                                            data-parsley-digits-message="يسمح بارقام فقط ."
                                            required>
                                    </div>
                                </div>
                                <!-- col-sm -->

                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>رقم الهاتف 2</label>
                                        <input
                                            type="text"
                                            name="phone_number_2"
                                            class="form-control"
                                            value="{{ $company->phone_number_2 }}"
                                            data-parsley-type="digits"
                                            data-parsley-digits-message="يسمح بارقام فقط ."
                                            data-parsley-maxlength="20"
                                            data-parsley-maxlength-message="الحد الاقصي للارقام 20 رقم .">
                                    </div>
                                </div>
                                <!-- col-sm -->
                            </div>
                            <!-- row -->



                            <div class="row">

                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>الموقع</label>
                                        <input
                                            type="text"
                                            name="website"
                                            class="form-control"
                                            value="{{ $company->website }}"
                                            data-parsley-type="url"
                                            data-parsley-url-message="يجب ادخال رابط ."
                                            data-parsley-maxlength="200"
                                            data-parsley-maxlength-message="الحد الاقصي للاحرف 200 حرف .">
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
                                            value="{{ $company->email }}"
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
                                        <label>Snapchat</label>
                                        <input
                                            type="text"
                                            name="snapchat"
                                            class="form-control"
                                            value="{{ $company->snapchat }}"
                                            data-parsley-type="url"
                                            data-parsley-url-message="يجب ادخال رابط ."
                                            data-parsley-maxlength="200"
                                            data-parsley-maxlength-message="الحد الاقصي للاحرف 200 حرف .">
                                    </div>
                                </div>
                                <!-- col-sm -->

                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input
                                            type="text"
                                            name="twitter"
                                            class="form-control"
                                            value="{{ $company->twitter }}"
                                            data-parsley-type="url"
                                            data-parsley-url-message="يجب ادخال رابط ."
                                            data-parsley-maxlength="200"
                                            data-parsley-maxlength-message="الحد الاقصي للاحرف 200 حرف .">
                                    </div>
                                </div>
                                <!-- col-sm -->
                            </div>
                            <!-- row -->



                            <div class="row">

                                <div class="col-sm">

                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input
                                            type="text"
                                            name="facebook"
                                            class="form-control"
                                            value="{{ $company->facebook }}"
                                            data-parsley-type="url"
                                            data-parsley-url-message="يجب ادخال رابط ."
                                            data-parsley-maxlength="200"
                                            data-parsley-maxlength-message="الحد الاقصي للاحرف 200 حرف .">
                                    </div>

                                </div>
                                <!-- col-sm -->

                                <div class="col-sm">

                                    <div class="form-group">
                                        <label>Instgram</label>
                                        <input
                                            type="text"
                                            name="instgram"
                                            class="form-control"
                                            value="{{ $company->instgram }}"
                                            data-parsley-type="url"
                                            data-parsley-url-message="يجب ادخال رابط ."
                                            data-parsley-maxlength="200"
                                            data-parsley-maxlength-message="الحد الاقصي للاحرف 200 حرف .">
                                    </div>
                                </div>
                                <!-- col-sm -->
                            </div>
                            <!-- row -->


                            <br>
                            <h6>احداثيات الخريطة</h6>

                            <div class="row">

                                <div class="col-sm">

                                    <div class="form-group">
                                        <label>خط الطول ( Longitude )</label>
                                        <input
                                            type="text"
                                            name="longitude"
                                            class="form-control"
                                            value="{{ $company->longitude }}"
                                            data-parsley-type="number"
                                            data-parsley-type-message="يجب ادحال خط طول صحيح (ارقام فقط) .">
                                    </div>

                                </div>
                                <!-- col-sm -->

                                <div class="col-sm">

                                    <div class="form-group">
                                        <label>خط العرض ( Latitude )</label>
                                        <input
                                            type="text"
                                            name="latitude"
                                            class="form-control"
                                            value="{{ $company->latitude }}"
                                            data-parsley-type="number"
                                            data-parsley-type-message="يجب ادحال خط عرض صحيح (ارقام فقط) .">
                                    </div>
                                </div>
                                <!-- col-sm -->
                                </div>
                                <!-- row -->



                            @hasrole('admin')

                            <div class="row">

                                <div class="col-sm">
                                    <div class="form-group">

                                        <label>التفعيل</label>

                                        <div class="form-group">
                                            <select
                                                class="form-control"
                                                name="verified">

                                                @if($company->verified)
                                                    <option value="1" selected="selected">مفعل</option>
                                                    <option value="0">غير مفعل </option>
                                                @else
                                                    <option value="1">مفعل</option>
                                                    <option value="0" selected="selected">غير مفعل </option>
                                                @endif

                                            </select>
                                        </div>


                                    </div>
                                </div>
                                <!-- col-sm -->

                                <div class="col-sm">

                                </div>
                                <!-- col-sm -->
                            </div>
                            <!-- row -->
                            @endhasrole

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
            $('#company_update_form').parsley();
        });
    </script>
@endsection
