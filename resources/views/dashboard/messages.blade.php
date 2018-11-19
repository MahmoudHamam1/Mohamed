@extends('layouts.master')

@section('style')
<link rel="stylesheet" href="{{ asset('/theme-assets/vendor/parsleyjs/css/parsley.css') }}">
<link rel="stylesheet" href="{{ asset('css/messageonfig.css') }}">
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
                            الرسائل
                        </h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">الرسائل</li>
                        <li class="breadcrumb-item active">عرض الكل</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">

            <div class="col-lg-12 col-md-12">
                <div class="card planned_task">
                    <div class="header">
                        <p class="page_title">جميع الرسائل</p>
                    </div>

                    <div class="body">

                        <div class="table-responsive">
                            <table class="table m-b-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>البريد الالكتروني</th>
                                        <th>الرسالة</th>
                                        <th>تاريخ الارسال</th>
                                        <th>&nbsp; </th>
                                        <th>&nbsp; </th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($message as $msg)
                                    <tr>
                                        <td>{{ $msg->id }}</td>
                                        <td>{{ $msg->email }}</td>
                                        <td>{{ $msg->message }}</td>
                                        <td>{{ $msg->created_at }}</td>
                                        <td>
                                            <button
                                                class="btn btn-outline-success viewMessage"
                                                type="button"
                                                data-type="confirm"
                                                id="{{ $msg->id }}"
                                                title="عرض">
                                                <i class="fa fa-envelope-o"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <form action="/website/messages/{{ $msg->id }}" method="post">
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
                        <div class="row">
                            <div class="col-md-10 showMessage col-md-offset-1">
                                <h3></h3>
                                <p class="lead"></p>
                                <button class="btn btn-outline-danger cancel" type="button" data-type="confirm" title="عرض">
                                    اغلاق
                                </button>
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
    <script src="{{ asset('/js/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('/js/messageConfig.js') }}"></script>
    
@endsection
