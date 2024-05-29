@extends('layouts.app')
@section('content')
@include('layouts.aside')   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-1">
              <div class="bg-white shadow-md rounded my-6 p-5">
                <form method="POST" action="{{ route('admin.permissions.store')}}">
                  @csrf
                  @method('post')
                <div class="flex flex-col space-y-2">
                  <label for="role_name" class="text-gray-700 select-none font-medium">Permission Name</label>
                  <input
                    id="role_name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Enter permission"
                    class="form-control"
                  />
                </div>
                <div class="text-center mt-16">
                <button type="submit" class="btn btn-success mr-2">Submit</button>
                              </div>
              </div>
            </div>
        </main>
    </div>
</div>
@endsection