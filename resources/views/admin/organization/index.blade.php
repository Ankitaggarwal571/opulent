@extends('layouts.app')
@section('content')
@include('layouts.aside')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
            <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-2">

                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    {{$page}} List</h5>
                    <!--end::Page Title-->
                    <!--begin::Actions-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                    @can('Organization Category create')
                    <a href="{{route('admin.organizationCat.create')}}" class="btn btn-light-warning font-weight-bolder btn-sm">
                        Add New
                    </a>
                    @endcanany
                    <!--end::Actions-->
                </div>
                <!--end::Info-->
            </div>
        </div>
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class=" container ">
        @if(session('success'))
        <div class="alert alert-custom alert-success fade show" role="alert">
            <div class="alert-icon"><i class="flaticon2-check-mark"></i></div>
            <div class="alert-text">{{ session('success')}}</div>
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="ki ki-close"></i></span>
                </button>
            </div>
        </div>
        @endif
        @if(session('failed'))
        <div class="alert alert-custom alert-danger fade show" role="alert">
            <div class="alert-icon"><i class="flaticon-warning"></i></div>
            <div class="alert-text">{{ session('failed')}}</div>
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="ki ki-close"></i></span>
                </button>
            </div>
        </div>
        @endif
        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table table-bordered table-responsive organization-dataTable">
                    <thead>
                        <tr>
                            <th id="name">Name</th>
                            <th id="name">Category</th>
                            <th id="name">Organization Phone</th>
                            <th id="name">Organization Email</th>
                            <th id="name">Organization PAN</th>
                            <th id="name">Authorised Person Name</th>
                            <th id="name">Authorised Person Email</th>
                            <th id="name">Authorised Person Phone</th>
                            <th id="name">Authorised Person Pan </th>
                            <th id="name">Pincode</th>
                            <th id="name">City</th>
                            <th id="name">State</th>
                            <th id="name">GST IN</th>
                            <th id="name">Aadhaar No.</th>
                            <th id="name">Organization PAN File</th>
                            <th id="name">GSTIN  File</th>
                            <th id="name">Aadhaar File</th>
                            <th id="name">Personal PAN</th>
                            <th id="name">Status</th>
                            <th id="action">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
    </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->
@endsection