@extends('layouts.master')

@section('style')
<link rel="stylesheet" href="{{ asset('/theme-assets/vendor/parsleyjs/css/parsley.css') }}">
@endsection


@section('content')

<div id="main-content" class="file_manager">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> ملــــف الصــور</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">ادارة الملفات</li>
                        <li class="breadcrumb-item active">ملف الصور</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">


            @if(!is_null($companyimages->company_logo))
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card">
                    <div class="file">
                        <div class="hover">

                            <form action="{{ url('delete-company-image/' . $companyimages->id .'/company_logo' ) }}" method="post">
                                @csrf
                                <button class="btn btn-danger" type="submit" data-type="confirm" class="btn btn-danger js-sweetalert" onclick="return confirm('هل تريد حذف شعار الشركة ؟'  )" title="حذف">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            </form>

                        </div>
                        <a href="javascript:void(0);">
                            <div class="image align-center">
                                <img src="{{ $companyimages->company_logo }}" alt="img" class="img-fluid">
                            </div>
                            <div class="file-name">
                                <p class="m-b-5 text-muted">شعار الشركة</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endif

            @if(!is_null($companyimages->offer_logo))
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card">
                    <div class="file">
                        <div class="hover">
                            <button type="button" class="btn btn-icon btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                        <a href="javascript:void(0);">
                            <div class="image align-center">
                                <img src="{{ $companyimages->offer_logo }}" alt="img" class="img-fluid">
                            </div>
                            <div class="file-name">
                                <p class="m-b-5 text-muted">شعار العرض</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endif


            @if(!is_null($companyimages->slider_1))
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card">
                    <div class="file">
                        <div class="hover">
                            <button type="button" class="btn btn-icon btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                        <a href="javascript:void(0);">
                            <div class="image align-center">
                                <img src="{{ $companyimages->slider_1 }}" alt="img" class="img-fluid">
                            </div>
                            <div class="file-name">
                                <p class="m-b-5 text-muted">سلايدر 1</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endif


            @if(!is_null($companyimages->slider_2))
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card">
                    <div class="file">
                        <div class="hover">
                            <button type="button" class="btn btn-icon btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                        <a href="javascript:void(0);">
                            <div class="image align-center">
                                <img src="{{ $companyimages->slider_2 }}" alt="img" class="img-fluid">
                            </div>
                            <div class="file-name">
                                <p class="m-b-5 text-muted">سلايدر 2</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endif



            @if(!is_null($companyimages->slider_3))
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card">
                    <div class="file">
                        <div class="hover">
                            <button type="button" class="btn btn-icon btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                        <a href="javascript:void(0);">
                            <div class="image align-center">
                                <img src="{{ $companyimages->slider_3 }}" alt="img" class="img-fluid">
                            </div>
                            <div class="file-name">
                                <p class="m-b-5 text-muted">سلايدر 3</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endif



            @if(!is_null($companyimages->slider_4))
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card">
                    <div class="file">
                        <div class="hover">
                            <button type="button" class="btn btn-icon btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                        <a href="javascript:void(0);">
                            <div class="image align-center">
                                <img src="{{ $companyimages->slider_4 }}" alt="img" class="img-fluid">
                            </div>
                            <div class="file-name">
                                <p class="m-b-5 text-muted">سلايدر 4</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endif


            @if(!is_null($companyimages->slider_5))
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card">
                    <div class="file">
                        <div class="hover">
                            <button type="button" class="btn btn-icon btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                        <a href="javascript:void(0);">
                            <div class="image align-center">
                                <img src="{{ $companyimages->slider_5 }}" alt="img" class="img-fluid">
                            </div>
                            <div class="file-name">
                                <p class="m-b-5 text-muted">سلايدر 5</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endif


        </div>

    </div>
</div>


@endsection

@section('script')
    <script src="{{ asset('/template-assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('/template-assets/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="{{ asset('/template-assets/bundles/mainscripts.bundle.js') }}"></script>
@endsection
