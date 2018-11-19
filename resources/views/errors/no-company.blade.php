@extends('layouts.master')

@section('style')
<link rel="stylesheet" href="{{ asset('/theme-assets/vendor/parsleyjs/css/parsley.css') }}">
@endsection

@section('content')
<div id="main-content">
    <div class="container-fluid">

        <div class="block-header">
            <!-- <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> شركـــات</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">شركـات</li>
                        <li class="breadcrumb-item active">أضافة صور</li>
                    </ul>
                </div>
            </div> -->
        </div>

        <div class="row clearfix">

            <div class="col-md-6">

                <div class="card">

                    <br>
                    <p>Not own company yet.</p>
                    <br>

                </div>
                <!-- card -->
            </div>
            <!-- col-md-6 -->

        </div>
        <!-- row -->
    </div>
    <!-- container-fluid -->
</div>
@endsection

@section('script')
    <script src="{{ asset('/template-assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('/template-assets/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="{{ asset('/template-assets/bundles/mainscripts.bundle.js') }}"></script>
@endsection
