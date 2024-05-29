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
                    Create User
                </h3>
            </div>

            <!--begin::Form-->
            <form action="{{ route('admin.users.store')}}" method="post" enctype="multipart/form-data">
              @csrf
                  @method('post')
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="name">Name (as per bank records)</label>
                                <input class="form-control" name="name" placeholder="Name" id="name" type="text"
                                    value="{{ old('name') }}" />
                                @if($errors->has('name'))
                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                @enderror
                            </div>
                        </div>
                      
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label">Email</label>
                                <input class="form-control" name="email" placeholder="Email" type="email"
                                    value="{{ old('email') }}" />
                                @if($errors->has('email'))
                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label">Mobile</label>
                                <input class="form-control" name="mobile" placeholder="Mobile" type="text"
                                    value="{{ old('mobile') }}" />
                                @if($errors->has('mobile'))
                                <div class="invalid-feedback">{{ $errors->first('mobile') }}</div>
                                @enderror
                            </div>
                        </div>
                       
                       
                    </div>
                   
                    <div class="row">
                      @foreach($roles as $role)
                      <div class="col-md-4">
                            <div class="form-group">
                              <label class="inline-flex items-center mt-3">
                                  <input type="checkbox" class="form-control" name="roles[]" value="{{$role->id}}"><span class="ml-2 text-gray-700">{{ $role->name }}</span>
                              </label>
                          </div>
                      </div>
                  @endforeach

                        
                    </div>
                   
                </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-2">
                </div>
                <div class="col-10">
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <a href="{{route('admin.users.index')}}" class="btn btn-secondary">Cancel</a>
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