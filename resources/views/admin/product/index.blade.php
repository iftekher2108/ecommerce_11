@extends('layouts.app')
@section('title','Product')
@section('content')
<div class="d-flex justify-content-between mb-3">
<a href="" class="btn btn-danger">Delete all</a>
<a href="{{ route('product.create') }}" class="btn btn-primary">Create</a>
</div>

<div class="card">

    <div class="card-body">
        <div class="table-responsive text-nowrap">
          <table class="table normal-dt table-bordered">
            <thead>
              <tr class="bg-primary">
                <th><input type="checkbox" class="form-check-input border border-black"></th>
                <th class="text-white">Picture</th>
                <th class="text-white">Name</th>
                {{-- <th class="text-white">Users</th> --}}
                <th class="text-white">Status</th>
                <th class="text-white">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
            <tr>
                <td><input type="checkbox" name="" id="" class="form-check-input"></td>
                <td>
                <img src="{{ asset('storage/'.$product->image) }}" class="img-fluid" height="40" width="40" alt=""/>
                </td>
                <td>{{ $product->name }}</td>

                <td><span class="badge  {{ $product->status == 'active' ? "bg-success" : "bg-danger" }} me-1">{{ $product->status }}</span></td>

                <td>
                  {{-- <div class="dropdown">
                    <button
                      type="button"
                      class="btn p-0 dropdown-toggle hide-arrow"
                      data-bs-toggle="dropdown"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-trash me-1"></i> Delete</a
                      >
                    </div>
                  </div> --}}

                  <a class="btn btn-success btn-sm" href="javascript:void(0);">
                    <i class="bx bx-edit-alt me-1"></i>
                     Edit
                    </a>
                      <a class="btn btn-danger btn-sm" href="javascript:void(0);">
                        <i class="bx bx-trash me-1"></i>
                         Delete
                    </a>


                </td>
              </tr>
                @endforeach



            </tbody>
          </table>
        </div>
      </div>
</div>

@endsection



