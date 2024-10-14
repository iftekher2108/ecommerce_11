@extends('layouts.app')
@section('title','Category Create')
@section('content')

<div class="row g-2">
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
   <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                <label for="image" class="form-label">Image</label><br>
                 <img src="{{ asset('admin_assets/image/preview.png') }}" height="250" width="350"
                  class="preview-img rounded border @error('image') border-danger @enderror  shadow"  alt="preview picture"/>
                <input type="file" id="image" hidden name="image" class="input-image"/>
                @error('image')
                <span class="text-danger">
                  We'll never share your details with anyone else
                </span>
                @enderror
                </div>

                <div class="group mb-3">
                    <label for="category" class="form-label">Name</label>
                    <input
                      type="text"
                      class="form-control @error('name') is-invalid @enderror"
                      id="category"
                      name="name"
                      placeholder="Category"
                    />
                    @error('name')
                    <span class="text-danger">
                      We'll never share your details with anyone else
                    </span>
                    @enderror
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

