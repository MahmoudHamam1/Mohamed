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
                        <li class="breadcrumb-item active">عرض البطاقة</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    @include('flash-messages')
                    <div class="body">

                        <div class="form-group">
                            <label>الاسم ثلاثي  </label>
                            <input type="text" class="form-control" value="{{ $card->name }}" readonly="on"
                        </div>


                        <div class="row">

                            <div class="col-sm">

                                <div class="form-group">
                                    <label>رقم الهاتف  </label>
                                    <input type="text" class="form-control" value="{{ $card->phone_number }}" readonly="on">
                                </div>

                            </div><!-- col-xs-6 -->

                            <div class="col-sm">

                                <div class="form-group">
                                    <label>الجنسية  </label>
                                    <input type="text" class="form-control" value="{{ $card->nationality }}" readonly="on">
                                </div>

                            </div><!-- col-xs-6 -->

                        </div>
                        <!-- row -->


                        <div class="row">

                            <div class="col-sm">

                                <div class="form-group">
                                    <label>رقم الهوية  </label>
                                    <input type="text" class="form-control" value="{{ $card->id_number }}" readonly="on">
                                </div>

                            </div>
                            <!-- col-sm -->

                            <div class="col-sm">

                                <div class="form-group">
                                    <label>المدينة  </label>
                                    <input type="text" class="form-control" value="{{ $card->country }}" readonly="on">
                                </div>

                            </div>
                            <!-- col-sm -->
                        </div>
                        <!-- row -->

                        <div class="row">

                            <div class="col-sm">
                                <div class="form-group">
                                    <label>الحي  </label>
                                    <input type="text" class="form-control" value="{{ $card->district }}" readonly="on">
                                </div>
                            </div>
                            <!-- col-sm -->

                            <div class="col-sm">

                                <div class="form-group">
                                    <label>البريد  </label>
                                    <input type="email" class="form-control" value="{{ $card->email }}" readonly="on">
                                </div>

                            </div>
                            <!-- col-sm -->

                        </div>
                        <!-- row -->


                        <div class="row">

                            <div class="col-sm">

                                <div class="form-group">

                                    <label>تاريخ الميلاد  </label>
                                    <input type="text" class="form-control" value="{{ $card->birthdate }}" readonly="on">

                                </div>

                            </div>
                            <!-- col-sm -->

                            <div class="col-sm">


                                <div class="form-group">

                                    <label>تاريخ الطلب  </label>
                                    <input class="form-control" value="{{ $card->created_at }}" readonly="on">
                                </div>

                            </div>

                        </div>
                        <!-- row -->

                        <div class="row">

                            <div class="col-sm">

                                <div class="form-group">

                                    <label> موعد تسليم البطاقة </label>
                                    <input class="form-control" value="{{ $card->deliver_date }}" readonly="on">

                                </div>

                            </div>
                            <!-- col-sm -->

                            <div class="col-sm">

                                <div class="form-group">

                                    <label> تاريخ انتهاء البطاقة </label>
                                    <input class="form-control" value="{{ $card->expire_date }}" readonly="on">
                                </div>

                            </div>

                        </div>
                        <!-- row -->

                         <div class="form-group">

                            <label> رقم البطاقة </label>
                            <input class="form-control" value="{{ $card->card_id }}" readonly="on">

                        </div>


                    </div>
                    <!-- body -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    <script src="{{ asset('/template-assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('/template-assets/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="{{ asset('/template-assets/bundles/mainscripts.bundle.js') }}"></script>
@endsection
