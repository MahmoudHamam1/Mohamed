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
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth">
                        <i class="fa fa-arrow-left"></i></a>
                        البيانات
                    </h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">الحساب الشخصي</li>
                        <li class="breadcrumb-item active">البينات</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    @include('flash-messages')
                    <div class="tab-content">

                        <div class="tab-pane active" id="Settings">

                            <div class="body">
                                <h6>المعلومات الرئيسية</h6>
                                    <form
                                        id="update_user"
                                        action="{{ route( 'users.update', $user->id ) }}"
                                        method="post"
                                        enctype="multipart/form-data">

                                        @csrf
                                        @method('PUT')

                                        <br>

                                        <h6>الصورة الشخصية</h6>
                                        <div class="media">
                                            <div class="media-left m-r-15">

                                                @if( isset($user->avatar) )
                                                    <img src="{{ $user->avatar }}" class="user-photo media-object" alt="User">
                                                @else
                                                    <img src="{{ asset('/theme-assets/images/avatar.jpg') }}" class="user-photo media-object" alt="User">
                                                @endif

                                            </div>
                                            <div class="media-body">
                                                <p>رفع الصوره الشخصية.
                                                    <br> <em>ابعاد الصورة يجب ان تكون 140px × 140px</em></p>
                                                <button type="button" class="btn btn-default-dark" id="btn-upload-photo">اختر صورة</button>
                                                <input type="file" name="avatar" id="filePhoto" class="sr-only">
                                                <br>
                                            </div>
                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-6 col-md-12">

                                                <div class="form-group">
                                                    <input
                                                        type="text"
                                                        name="first_name"
                                                        class="form-control"
                                                        placeholder="الاسم الأول"
                                                        data-parsley-maxlength="200"
                                                        data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                                                        data-parsley-required-message="يجب ادحال الاسم الأول"
                                                        value="{{ $user->first_name }}"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <input
                                                        type="text"
                                                        name="last_name"
                                                        class="form-control"
                                                        placeholder="الاسم الاخير"
                                                        data-parsley-maxlength="200"
                                                        data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                                                        data-parsley-required-message="يجب ادحال الاسم الاخير"
                                                        value="{{ $user->last_name }}"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <div>

                                                    @if( $user->gender ==="male" )

                                                        <label class="fancy-radio">
                                                            <input
                                                                name="gender"
                                                                value="male"
                                                                type="radio"
                                                                checked>

                                                            <span><i></i>ذكر</span>
                                                        </label>
                                                        <label class="fancy-radio">
                                                            <input
                                                                name="gender"
                                                                value="female"
                                                                type="radio">
                                                            <span><i></i>انثى</span>
                                                        </label>

                                                    @elseif( $user->gender ==="female" )

                                                        <label class="fancy-radio">
                                                            <input
                                                                name="gender"
                                                                value="male"
                                                                type="radio">

                                                            <span><i></i>ذكر</span>
                                                        </label>
                                                        <label class="fancy-radio">
                                                            <input
                                                                name="gender"
                                                                value="female"
                                                                type="radio"
                                                                checked>
                                                            <span><i></i>انثى</span>
                                                        </label>

                                                    @else

                                                        <label class="fancy-radio">
                                                            <input
                                                                name="gender"
                                                                value="male"
                                                                type="radio">

                                                            <span><i></i>ذكر</span>
                                                        </label>
                                                        <label class="fancy-radio">
                                                            <input
                                                                name="gender"
                                                                value="female"
                                                                type="radio">
                                                            <span><i></i>انثى</span>
                                                        </label>

                                                    @endif
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="icon-calendar"></i></span>
                                                        </div>
                                                        <input
                                                            data-provide="datepicker"
                                                            data-date-autoclose="true"
                                                            class="form-control"
                                                            name="birthdate"
                                                            placeholder="تاريخ الميلاد"
                                                            value="{{ $user->birthdate }}">
                                                    </div>
                                                </div>

                                                @hasrole('admin')
                                                <div class="form-group">
                                                    <select
                                                        class="form-control"
                                                        name="roles"
                                                        data-parsley-required-message="يجب اختيار الصلاحيات"
                                                        required>

                                                            <option value="">الصلاحيات</option>

                                                        @foreach($roles as $role)

                                                            @if($user->hasRole( $role->name ))
                                                                <option value="{{ $role->name }}" selected="selected">{{ ucfirst($role->name) }}</option>
                                                            @else
                                                                <option value="{{ $role->name }}">{{ ucfirst($role->name) }}</option>
                                                            @endif



                                                        @endforeach
                                                    </select>
                                                </div>
                                                @endhasrole
                                                <!-- form-group -->
                                            </div>
                                            <!-- col-lg-6 col-md-12 -->
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <input
                                                        type="text"
                                                        name="address"
                                                        class="form-control"
                                                        placeholder="العنوان"
                                                        value="{{ $user->address }}"
                                                        data-parsley-maxlength="200"
                                                        data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف">
                                                </div>
                                                <div class="form-group">
                                                    <input
                                                        type="text"
                                                        name="phone_number"
                                                        class="form-control"
                                                        placeholder="رقم الهاتف"
                                                        value="{{ $user->phone_number }}"
                                                        data-parsley-type="digits"
                                                        data-parsley-maxlength="20"
                                                        data-parsley-maxlength-message="الحد الاقصي للارقام 20 رقم ."
                                                        data-parsley-type-message="يسمح بارقام فقط .">
                                                </div>
                                                <div class="form-group">
                                                    <input
                                                        type="text"
                                                        name="nationality"
                                                        class="form-control"
                                                        placeholder="الجنسية"
                                                        value="{{ $user->nationality }}"
                                                        data-parsley-maxlength="100"
                                                        data-parsley-maxlength-message="الحد الاقصي للحروف 100 حرف">
                                                </div>
                                            </div>
                                            <!-- col-lg-6 col-md-12 -->
                                        </div>
                                        <!-- row -->
                                        <br>
                                        <button type="submit" class="btn btn-primary">تحديث</button>
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
    <script src="{{ asset('/theme-assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/template-assets/bundles/mainscripts.bundle.js') }}"></script>
    <script>
        $(function() {

            $('#update_user').parsley();

            // photo upload
            $('#btn-upload-photo').on('click', function() {
                $(this).siblings('#filePhoto').trigger('click');
            });

            // plans
            $('.btn-choose-plan').on('click', function() {
                $('.plan').removeClass('selected-plan');
                $('.plan-title span').find('i').remove();

                $(this).parent().addClass('selected-plan');
                $(this).parent().find('.plan-title').append('<span><i class="fa fa-check-circle"></i></span>');
            });
        });
    </script>
@endsection
