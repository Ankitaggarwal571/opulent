@extends('layouts.app')
@section('content')
@include('layouts.aside')
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class=" container ">
        <!--begin::Card-->
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

        <div class="card card-custom">
            <div class="card-header">
                <h3 class="card-title">
                    Create Organization Category
                </h3>
            </div>
            <form action="{{route($action, $id)}}" method="post" enctype="multipart/form-data">
                @if($id) @method('PATCH') @endif
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-2 col-form-label" for="name">Name</label>
                        <div class="col-10">
                            <input class="form-control" name="name" placeholder="Name" id="name" type="text" value="@if($data){{$data->name}}@else{{ old('name') }}@endif" />
                            @if($errors->has('name'))
                            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-2">
                        </div>
                        <div class="col-10">
                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                            <a href="{{route('admin.organizationCat.index')}}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->
@endsection