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

        @include('flash-messages')

        @if($cards->count() > 0)

        <div class="row clearfix">

            <div class="col-lg-12 col-md-12">
                <div class="card planned_task">
                    <div class="header">

                        <p class="page_title">جميع البطاقات</p>
                    </div>

                    <div class="body">

                        <div class="table-responsive">
                            <table class="table m-b-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>الاسم الثلاثي</th>
                                        <th>رقم البطاقة</th>
                                        <th>حالة البطاقة</th>
                                        <th>تاريخ الطلب</th>
                                        <th>تاريخ التوصيل</th>
                                        <th>تاريخ الانتهاء</th>

                                        @role('admin')
                                        <th>&nbsp; </th>
                                        @endrole

                                        <th>&nbsp; </th>
                                        <th>&nbsp; </th>
                                        <th>&nbsp; </th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($cards as $card)
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $card->name }}</td>
                                        <td>{{ $card->card_id }}</td>
                                        <td>{{ __('status.'.$card->status) }}</td>
                                        <td>{{ $card->created_at }}</td>
                                        <td>{{ $card->deliver_date }}</td>
                                        <td>{{ $card->expire_date }}</td>

                                        @role('admin')
                                        <td>
                                        @if($card->status == 'pending')
                                            <a href="{{ route('create-card', $card->id ) }}" class="btn btn-outline-success" title="انشاء">
                                                <i class="fa fa-id-card-o" aria-hidden="true"></i>
                                            </a>
                                        @endif
                                        </td>
                                        @endrole

                                        <td>
                                            <a href="{{ route('cards.show', $card->id ) }}" class="btn btn-outline-info" title="عرض">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </td>

                                        <td>
                                            <a href="{{ route('cards.edit', $card->id ) }}" class="btn btn-outline-primary" title="تعديل">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>

                                        <td>
                                            <form action="{{ action('CardController@destroy', $card->id ) }}" method="post">
                                                @csrf
                                                @method("DELETE")
                                                <button
                                                    class="btn btn-outline-danger"
                                                    type="submit"
                                                    data-type="confirm"
                                                    onclick="return confirm( 'هل تريد حذف بطاقة {{ $card->name }} ؟' )"
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
    <script src="{{ asset('/theme-assets/vendor/toastr/toastr.js') }}"></script>
    <script src="{{ asset('/template-assets/bundles/mainscripts.bundle.js') }}"></script>
    @include('toastr-script')
    <script>
        $(function() {
            $('#company_post_form').parsley();
        });
    </script>
@endsection
