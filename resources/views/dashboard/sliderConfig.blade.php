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
                        <li class="breadcrumb-item active">عرض الكل</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card planned_task">
                    <div class="header">
                        <p class="page_title">جميع الصور</p>
                    </div>
                    @include('Notification-messages')
                    <div class="body">
                         <div class="row">
                            <div class="col-md-10 addSlide col-md-offset-1">
                            <h4>اضافة صورة جديدة</h4>
                                 <form action="/website/sliders" class="form" method="post" enctype="multipart/form-data">
                                 <div class=row>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control"
                                                data-parsley-maxlength="200"
                                                data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                                                data-parsley-required-message="يجب ادخال اسم  العنوان"
                                        name="ar[title]" required placeholder=" اكتب عنوان بالعربي">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control"
                                                data-parsley-maxlength="200"
                                                data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                                                data-parsley-required-message="يجب ادخال اسم  العنوان"
                                        name="en[title]" required placeholder=" اكتب عنوان بالانجليزي">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <textarea name="ar[description]" class="form-control"rows='2'
                                        data-parsley-maxlength="200"
                                                data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                                                data-parsley-required-message="يجب ادخال وصف بالعربي "
                                        required placeholder="اكتب وصف بالعربي"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <textarea name="en[description]" class="form-control"rows='2'
                                        data-parsley-maxlength="200"
                                                data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                                                data-parsley-required-message="يجب ادخال وصف بالانجليزي "
                                        required placeholder="اكتب وصف بالانجليزي"></textarea>
                                    </div>
                                 </div>
                                  <div class="form-group ">
                                    <input type="file" class="form-control"
                                             data-parsley-required-message="يجب ادخال صورة "
                                     name="image" >
                                 </div>
                                        @csrf
                                    <button class="btn btn-outline-success " type="submit" data-type="confirm" title="اضافة">
                                        أضافة
                                    </button>
                                    
                                </form>
                                </div>
                            </div>

                        <div class="table-responsive">
                            <table class="table m-b-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>العنوان</th>
                                        <th>الوصف</th>
                                        <th>الصورة</th>
                                        <th>&nbsp; </th>
                                        <th>&nbsp; </th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($slider as $sld)
                                    <tr>
                                        <td>{{ $sld->id }}</td>
                                        <td>{{ $sld->translate('ar')->title }}</td>
                                        <td>{{ $sld->translate('ar')->description }}</td>
                                        <td><img src="{{ asset('images/slider')}}/{{ $sld->image }}" width="150" height="70"></td>
                                        <td>
                                            <form action="{{ route('sliders.edit',$sld->id) }}" method="get">
                                               
                                                <button
                                                    class="btn btn-outline-success"
                                                    type="submit"
                                                    data-type="confirm"
                                                    title="تعديل">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="/website/slider/{{ $sld->id }}" method="post">
                                                @csrf
                                                @method("DELETE")
                                                <button
                                                    class="btn btn-outline-danger"
                                                    type="submit"
                                                    data-type="confirm"
                                                    title="حذف">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- table-responsive -->
                        
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


 {{--  <div class="row">
    <div class="col-md-10 editslide col-md-offset-1">
        <form action="/dashboard/slider" class="form" method="POST" enctype="multipart/form-data">
        <div class=row>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control"
                            data-parsley-maxlength="200"
                            data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                            data-parsley-required-message="يجب ادخال اسم  العنوان"
                    name="ar[title]" required placeholder=" اكتب عنوان بالعربي">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control"
                            data-parsley-maxlength="200"
                            data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                            data-parsley-required-message="يجب ادخال اسم  العنوان"
                    name="en[title]" required placeholder=" اكتب عنوان بالانجليزي">
                </div>
                <div class="form-group col-md-6">
                    <textarea name="ar[description]" class="form-control"rows='2'
                    data-parsley-maxlength="200"
                            data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                            data-parsley-required-message="يجب ادخال وصف بالعربي "
                    required placeholder="اكتب وصف بالعربي"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <textarea name="en[description]" class="form-control"rows='2'
                    data-parsley-maxlength="200"
                            data-parsley-maxlength-message="الحد الاقصي للحروف 200 حرف"
                            data-parsley-required-message="يجب ادخال وصف بالانجليزي "
                    required placeholder="اكتب وصف بالانجليزي"></textarea>
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
            أضافة
        </button>
            <button class="btn btn-outline-danger cancel" type="button" data-type="confirm" title="اغلاق">
        اغلاق
    </button>
    </form>
</div>  --}}