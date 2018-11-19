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
                    <h2>
                        <a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                            العـــروض
                        </h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">العروض</li>
                        <li class="breadcrumb-item active">جميع العروض</li>
                    </ul>
                </div>
            </div>
        </div>

        @if($offers->count() > 0)

        <div class="row clearfix">

            <div class="col-lg-12 col-md-12">
                <div class="card planned_task">
                    <div class="header">
                        <p class="page_title">جميع العروض</p>
                    </div>

                    <div class="body">

                        <div class="table-responsive">
                            <table class="table m-b-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>عنوان العرض</th>
                                        <th>اسم الشركة</th>
                                        <th>اسم المنشئ</th>

                                        <th>تاريخ الانشاء</th>
                                        <th>تاريخ التحديث</th>
                                        <th>&nbsp; </th>
                                        <th>&nbsp; </th>

                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($offers as $offer)
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $offer->translate('ar')->title }}</td>
                                        <td>{{ $offer->company->translate('ar')->name }}</td>
                                        <td>{{ $offer->company->user->fullName() }}</td>
                                        <td>{{ $offer->created_at }}</td>
                                        <td>{{ $offer->updated_at }}</td>

                                        <td>
                                            <a href="{{ route('offers.edit', $offer->id ) }}" class="btn btn-outline-primary" title="تعديل العرض">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>

                                        <td>
                                            <form action="{{ action('OfferController@destroy', $offer->id ) }}" method="post">
                                                @csrf
                                                @method("DELETE")
                                                <button
                                                    class="btn btn-outline-danger"
                                                    type="submit"
                                                    data-type="confirm"
                                                    onclick="return confirm('هل تريد حذف {{ $offer->translate("ar")->title }} ؟'  )"
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
        @endif
    </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('/template-assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('/template-assets/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="{{ asset('/theme-assets/vendor/parsleyjs/js/parsley.min.js') }}"></script>
    <script src="{{ asset('/template-assets/bundles/mainscripts.bundle.js') }}"></script>
    <script>
        $(function() {
            $('#company_post_form').parsley();
        });
    </script>
@endsection
