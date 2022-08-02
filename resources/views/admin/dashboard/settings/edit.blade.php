@extends('admin.layouts.app')

@push('stylesheet-page-level')
    <style>
        .mce-notification-warning{
            display: none;}
        .btn.btn-outline.dark {
            border-color: #2f353b;
            color: #2f353b;
            background: 0 0;
        }
    </style>
@endpush


@section('content')
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-tools">
                        <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary"
                            role="tablist">
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#tab_en" role="tab"
                                   id="test1">
                                    <i class="flaticon-share m--hide"></i>
                                    {{$heading}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_en">
                        @include('admin.dashboard.settings.form', ['languageId' => 2])
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
