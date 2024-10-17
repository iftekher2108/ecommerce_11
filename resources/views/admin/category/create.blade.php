@extends('layouts.app')
@section('title','Category Create')
@section('content')

<div class="row g-2">
<form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
   <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                 <img src="{{ asset('admin_assets/image/preview.png') }}" height="250" width="350"
                  class="preview-img rounded border shadow"  alt="preview picture">
                <input type="file" id="image" accept="image/*" name="image" hidden class="form-control input-image"/>
                @error('image')
                <span class="text-danger">
                  {{ $message }}
                </span>
                @enderror
                </div>

                <div class="group mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input
                      type="text"
                      class="form-control @error('name') is-invalid @enderror"
                      id="name"
                      name="name"
                      value="{{ old('name') }}"
                      placeholder="Category"
                    />
                    @error('name')
                    <span class="text-danger">
                      {{ $message }}
                    </span>
                    @enderror
                  </div>

                  <div class="mb-3">
                    <label for="status" class="form-label">Default select</label>
                    <select id="status" name="status" class="form-select">
                      <option value="active">Active</option>
                      <option value="inactive">Inactive</option>
                    </select>
                  </div>

                  <button class="btn w-50 btn-primary">Create</button>

            </div>
        </div>
    </div>
</form>




    {{-- <div class="col-md-6">
        <div class="card">
            <div class="card-body">

            </div>
        </div>
    </div> --}}

</div>


@endsection

