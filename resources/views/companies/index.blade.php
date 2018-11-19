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
                            الشركـــات
                        </h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">الشركات</li>
                        <li class="breadcrumb-item active">عرض الكل</li>
                    </ul>
                </div>
            </div>
        </div>

        @if($companies->count() > 0)

        <div class="row clearfix">

            <div class="col-lg-12 col-md-12">
                <div class="card planned_task">
                    <div class="header">
                        <p class="page_title">جميع الشركات</p>
                    </div>

                    <div class="body">

                        <div class="table-responsive">
                            <table class="table m-b-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>اسم الشركة</th>
                                        <th>اسم المستخدم</th>
                                        <th>الحالة</th>
                                        <th>تاريخ الانشاء</th>
                                        <th>تاريخ التحديث</th>
                                        <th>&nbsp; </th>
                                        <th>&nbsp; </th>
                                        <th>&nbsp; </th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($companies as $company)
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $company->translate('ar')->name }}</td>
                                        <td>{{ $company->user->fullName() }}</td>
                                        <td>
                                            <span class="badge">
                                                @if($company->verified)
                                                    مفعل
                                                @else
                                                    غير مفعل
                                                @endif
                                            </span>
                                        </td>

                                        <td>Sept 16, 2017</td>
                                        <td>Sept 16, 2017</td>

                                        <td>
                                            @if(!is_null($company->images))
                                            <a href="{{ url('companyimages/'. $company->images->id. '/edit' ) }}" class="btn btn-outline-primary" title="صور الشركة">
                                                <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                            </a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-outline-info" title="تعديل">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ action('CompanyController@destroy', $company->id ) }}" method="post">
                                                @csrf
                                                @method("DELETE")
                                                <button
                                                    class="btn btn-outline-danger"
                                                    type="submit"
                                                    data-type="confirm"
                                                    onclick="return confirm('هل تريد حذف {{ $company->translate("ar")->name }} ؟'  )"
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
