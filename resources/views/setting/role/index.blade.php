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
                    List</h5>
                    <!--end::Page Title-->
                    <!--begin::Actions-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                    <a href="{{route('admin.roles.create')}}" class="btn btn-light-warning font-weight-bolder btn-sm">
                        Add New
                    </a>
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
        <div class="row">
            <div class="col-sm-8">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <table class="table table-bordered table-responsive">
                            <tr>
                                <th >No</th>
                                <th>Name</th>
                                <th>Permission</th>
                                <th>Action</th>
                            </tr>
                            @can('Role access')
                            @foreach ($roles as $key => $role)
                            <tr>
                                <td>{{$role->id}}</td>
                                <td>{{ $role->name }}</td>
                                <td> @foreach($role->permissions as $permission)
                              <span class="label label-inline label-success">{{ $permission->name }}</span>
                            @endforeach</td>
                                
                                <td>
                                @can('Role edit')
                                    <a class="btn btn-primary" href="{{route('admin.roles.edit',$role->id)}}">Edit</a>
                                   @endcan
                                   @can('Role delete')
                                   <a class="btn btn-danger" href="{{ route('admin.roles.destroy', $role->id) }}">Delete</a>
                                   @endcan
                                    
                                  
                                  
                                </td>
                            </tr>
                            @endforeach
                            @endcan
                        </table>
                        <!--end: Datatable-->
                    </div>

                </div>
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