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
            <h2 id="success" style="display:none; color:green; text-align:center;">Record Updated successfully</h2>
            <div class="card-header">
                <h3 class="card-title">
                    Update Product
                </h3>
            </div>
            <!--begin::Form-->
            <form action="{{ route('admin.users.update',$user->id)}}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label class="col-form-label" for="title">User Name </label>
                            <input class="form-control" name="name" placeholder="User Name " type="text"
                                value="@if(old('name')){{ old('name') }}@else{{ $user->name }}@endif" />

                        </div>

                        <div class="col-lg-4">
                            <label class="col-form-label" for="hsn">Email</label>
                            <input class="form-control" name="email" placeholder="Email" id="hsn" type="text"
                                value="@if(old('email')){{ old('email') }}@else{{ $user->email }}@endif" />

                        </div>
                        <div class="col-lg-4">
                            <label class="col-form-label" for="mrp">Mobile</label>
                            <input class="form-control" name="mobile" placeholder="Mobile" id="mrp" type="text"
                                value="@if(old('mobile')){{ old('mobile') }}@else{{ $user->mobile }}@endif" />

                        </div>
                        

                        <h3 class="text-xl my-4 text-gray-600">Role</h3>
                            <div class="grid grid-cols-3 gap-4">
                            @foreach($roles as $role)
                                <div class="flex flex-col justify-cente">
                                    <div class="flex flex-col">
                                        <label class="inline-flex items-center mt-3">
                                            <input type="checkbox" class="form-control" name="roles[]" value="{{$role->id}}"
                                            @if(count($user->roles->where('id',$role->id)))
                                                checked 
                                            @endif
                                            ><span class="ml-2 text-gray-700">{{ $role->name }}</span>
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                    </div>
                    <div class="card-footer">
                    <div class="row">
                        <div class="col-2">
                        </div>
                        <div class="col-10">
                            <button type="submit"  class="btn btn-success mr-2">Submit</button>
                            <a href="{{route('admin.users.index')}}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>


@endsection